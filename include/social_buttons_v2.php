<?php
// アイコン:http://vanidesign.blog.fc2.com/blog-entry-7.html

// http://d-esign.net/web/archives/240#twitter

	$lifetime = 60 * 60 * 6;	// キャッシュ時間の設定（60秒×60分×6 = 6時間）
	$lifetime = 60;
	
	$url = get_permalink();
    $url = str_replace( "https://", "http://", $url );
?>

<div class="social_buttons">


<!-- FB シェアボタン -->
<?php
	if ( false === ( $fb_share = get_transient( 'fb_share_'.$url ) ) ) {
		$fb_share = wp_remote_get( 'http://graph.facebook.com/'.$url );
		$fb_share = json_decode( $fb_share['body'] );
		
		// データが無いときはゼロが返らない
		if( !isset( $fb_share->shares ) ) {
			$fb_share = 0;
		}else{
			$fb_share = $fb_share->shares;
		}
		set_transient( 'fb_share_'.$url, $fb_share, $lifetime );
//		echo $fb_share.'<br>';
	}
?>

<div class="social_button">
<a class="socialButton" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">

	<div class="arrow_box">
		<span><?php echo number_format_i18n( get_transient( 'fb_share_'.$url ) ); ?></span>
	</div>
	<img class="social_icon" src="<?php bloginfo('template_directory'); ?>/images/social_button/fb.png" alt="Let's Share">
</a>
</div>

<!-- ツイートボタン -->
<?php
	$db_prefix = 'tweets_postid_'.$post->ID;
	$tweets = get_transient( $db_prefix );

	if ( false === ( $tweets ) || $tweets == '' ) {
        // 2015.10 に count.json API サービスが終了のためカウント数取得できない
		//$tweets = wp_remote_get( 'http://urls.api.twitter.com/1/urls/count.json?url='.$url );
		//$tweets = json_decode( $tweets['body'] );
		//
		//// データが無いときはゼロが返ってくる
		//$tweets = $tweets->count;
		//set_transient( $db_prefix, $tweets, $lifetime );
	}
?>

<div class="social_button">
<a class="socialButton" onClick="window.open('https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=ontheroad_jp&related=ontheroad_jp','つぶやく','width=550,height=450') ; return false">

<!-- <a class="socialButton" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=ontheroad_jp&related=ontheroad_jp" target="_blank"> -->

	<div class="arrow_box">
		<!-- <span><?php echo number_format_i18n( get_transient( $db_prefix ) ); ?></span> -->
		<span>Tweet!</span>
	</div>
	<img class="social_icon" src="<?php bloginfo('template_directory'); ?>/images/social_button/twitter.png" alt="Let's Tweet">
</a>
</div>


<!-- はてなボタン -->
<?php
$db_prefix = 'hatebu_postid_'.$post->ID;
$hatebu = get_transient( $db_prefix );

if ( $hatebu === false || $hatebu == ''  ) {
		$hatebu = wp_remote_get( 'http://api.b.st-hatena.com/entry.count?url='.urlencode($url) );
		if ( ! is_wp_error( $hatebu ) && $hatebu['response']['code'] === 200 ) {
			$hatebu = $hatebu['body'];

			// データが無いときはゼロが返らない
			if( !isset( $hatebu ) || !$hatebu || $hatebu == '' ) {
				$hatebu = 0;
			}
			set_transient( $db_prefix, $hatebu, $lifetime );
		}
//		echo $hatebu.'<br>';
}
?>


<div class="social_button">
<a class="socialButton" onClick="window.open('http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>','はてなブックマークに追加する','width=550,height=450') ; return false">

<!-- <a class="socialButton" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" title="このエントリーをはてなブックマークに追加" target="_blank"> -->

	<div class="arrow_box">
		<span><?php echo number_format_i18n( get_transient( $db_prefix ) ); ?></span>
	</div>
	<img class="social_icon" src="<?php bloginfo('template_directory'); ?>/images/social_button/hatena.png" alt="Let's Hatebu" />
</a>
</div>



<!-- Google + ボタン -->

<?php
	if ( false === ( $googleplus = get_transient( 'googleplus_'.$url ) ) ) {

		//GETリクエストでURLを指定する場合
		if(isset($_GET['url'])) $url = $_GET['url'];
		 
		//CURLを利用してJSONデータを取得
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, "https://clients6.google.com/rpc?key=AIzaSyCKSbrvQasunBoV16zDH9R33D88CeLr9gQ" );
		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]' );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-type: application/json' ) );
		$result = curl_exec( $ch );
		curl_close( $ch );
		 
		//JSONデータからカウント数を取得
		$obj = json_decode( $result, true );
		 
		//カウントが0の場合
		if(!isset($obj[0]['result']['metadata']['globalCounts']['count'])){
		  $googleplus = 0;
		}else{
		  $googleplus = $obj[0]['result']['metadata']['globalCounts']['count'];
		}
		set_transient( 'googleplus_'.$url, $googleplus, $lifetime );
//		echo $googleplus;
	}
?>

<div class="social_button">
<a class="socialButton" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'Gwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">

	<div class="arrow_box">
		<span><?php echo number_format_i18n( get_transient( 'googleplus_'.$url ) ); ?></span>
	</div>
	<img class="social_icon" src="<?php bloginfo('template_directory'); ?>/images/social_button/gplus.png" alt="Let's Google+" />
</a>
</div>


<!-- Pocket ボタン -->
<div class="pocket_button">
<a data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en" data-save-url="<?php the_permalink();?>"></a>
<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
</div>

<!--
<a href="http://getpocket.com/edit?url=共有したいＵＲＬ&title=ページタイトル" onclick="window.open(this.href, 'FBwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;">Pocket</a>
-->

<!-- Feedly ボタン -->
<?php
	if ( false === ( $subscribers = get_transient( 'feedly_subscribers' ) ) ) { 
		$feed_url = rawurlencode( get_bloginfo( 'rss2_url' ) );
		$subscribers = wp_remote_get( "http://cloud.feedly.com/v3/feeds/feed%2F$feed_url" );
		$subscribers = json_decode( $subscribers['body'] );
		$subscribers = $subscribers->subscribers;
		set_transient( 'feedly_subscribers', $subscribers, $lifetime );
	}
?>

<div class="social_button">
<a class="socialButton" href="http://cloud.feedly.com/#subscription%2Ffeed%2F<?php echo rawurlencode( get_bloginfo( 'rss2_url' ) ); ?>" target="_blank" title="<?php bloginfo('name'); ?>のRSSをFeedlyで購読">
	<div class="arrow_box">
		<span><?php echo number_format_i18n( get_transient( 'feedly_subscribers' ) ); ?></span>
	</div>
<!--
    <img id="feedlyFollow" src="http://s3.feedly.com/img/follows/feedly-follow-rectangle-flat-small_2x.png" alt="follow us in feedly">
-->
	<img class="social_icon" src="<?php bloginfo('template_directory'); ?>/images/social_button/rss.png" atl="<?php bloginfo('name'); ?>のRSSをFeedlyで購読" />

</a>
</div>


</div><!-- end of social_button -->
<div class="clear"></div><br />
