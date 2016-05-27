<?php get_header(); ?>

<!-- ------------------------ パンくずリスト ------------------------ -->
<?php
	$cat_info = get_the_category();
	$cat_info = $cat_info[0];
//	var_dump($cat_info);

	$cat_id = $cat_info->cat_ID;
	$cat_name = $cat_info->name;
	$cat_url = get_category_link( $cat_id );
	
	$parent_id = $cat_info->parent;
	if( $parent_id <> 0 ) {
		$parent_info	= get_category($parent_id, false);
		$parent_name = $parent_info->cat_name;
		$parent_url	= get_category_link( $parent_id );
	}
?>

<ol class="topic-path">
	<li class="first"><a href="<?php bloginfo('siteurl'); ?>">HOME</a></li>
	<?php 
		if( $parent_id <> 0 ) {
			echo '<li><a href="'.$parent_url.'">'.attribute_escape($parent_name).'</a></li>';
		}
		echo '<li><a href="'.$cat_url.'">'.$cat_name.'</a></li>';
		echo '<li>'.get_the_title().'</li>';
	?>
</ol>

<!-- ------------------------ コンテンツ ------------------------ -->
<div itemscope itemtype="http://schema.org/Article" id="content">
<?php // include('include/header_news.php'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- --------------------- エントリヘッダー --------------------- -->
<?php
	$author_name = get_the_author_meta('display_name');
	$author_url = get_the_author_meta('user_url');
	$date = get_the_date('Y-m-d');
?>

<?php the_title('<h1 itemprop="name">', '</h1>'); ?>
<div class="postmeta">
</div>

<!-- ------------------ ソーシャルボタン ------------------ -->
<?php //include('include/social_buttons_v1.php'); ?>
<?php //include('include/social_buttons_v2.php'); ?>

<!-- ----------------------- 広告 ---------------------- -->
<?php // include("include/adsense/dev_single_Middle_Full_Banner_468x60.php"); ?>

<!-- --------------------- エントリー-------------------- -->
<div class="entry">
<?php
	global $post;
	if( has_post_thumbnail( $post_id ) && !empty($post->post_excerpt) ) { 
		echo '<div class="entry-header">';
		echo '<div class="eye_catch">'.get_the_post_thumbnail( $post->ID, array(150, 150), array('itemprop' => 'image') ).'</div>';
		echo '<div class="excerpt">'.the_excerpt().'</div>';
		echo '<div class="clear"></div>';
		echo '</div>';
	}

	echo '<span itemprop="articleBody">';
	the_content(); // 本文の表示
	echo '</span>';
	
//	echo str_replace( array("\r\n","\r","\n"), '', get_the_content() ); // 本文の表示
?>
</div><!-- end of entry -->
<div class="clear"></div>

<!-- ------------------ ソーシャルボタン ------------------ -->
<?php include('include/social_buttons_v2.php'); ?>

<!-- ------------------------ タグ ---------------------------- -->
<div class="entry_tags">
	<?php the_tags('Tags: ', ', ', ' '); ?>
	<?php edit_post_link('Edit', '[ ', ' ]'); ?>
</div><br />
<!-- -------------------------- 広告 ---------------------------- -->
<div class="left adsense"> 

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- （dev）レクタングル（中） 300x250（個別ページ_下_左） -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:250px"
	     data-ad-client="ca-pub-9420456297086074"
	     data-ad-slot="3037609507"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	
</div>

<div class="left adsense">

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- （dev）レクタングル（中） 300x250（個別ページ_下_右） -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:250px"
	     data-ad-client="ca-pub-9420456297086074"
	     data-ad-slot="1560876307"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

</div>
<div class="clear"></div><br /><br />

<!-- ---------------------- Facebook Page ------------------------ -->
<!--
<div class="left adsense">
<div class="fb-recommendations" data-site="http://dev.ontheroad.jp" data-app-id="171242856322655" data-width="300" data-height="300" data-header="true" data-linktarget="_top"></div>
</div>

<div class="left adsense">
<div class="fb-like-box" data-href="http://www.facebook.com/dev.ontheroad" data-width="300" data-height="300" data-show-faces="true" data-stream="true" data-header="true"></div>
</div>

<div class="clear"></div><br /><br />
<?php //include('include/to_pagetop.php'); ?>
-->
<!-- ------------------------ 管理人 --------------------------- -->
<div class="post_author">
<ul>

<li><a href="http://dev.ontheroad.jp/about">
<img src="http://dev.ontheroad.jp/wp-content/themes/channel/images/company.jpg" style="vertical-align:middle"/></a>
（ひ）（@<a href="https://twitter.com/ontheroad_jp" target="_blank">ontheroad_jp</a>）と申します。<br><br>
<div style="margin:5px 0;">15年ぶりの Mac （MacBook Air - Mid 2011）を購入したけど、完全に浦島太郎状態な30代後半のサラリーマン。いつ潰れるの？だった Apple  がここまで変貌するとは・・。いやはやなんとも感慨深いですね。（<a href="http://dev.ontheroad.jp/about" >もっとくわしく</a>）<br>
<br>
ぼちぼち更新してますので宜しくお願いします。<br>
<br>
<a href="https://twitter.com/ontheroad_jp" class="twitter-follow-button" data-show-count="false" data-lang="ja">@ontheroad_jpさんをフォロー</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div class="clear"></div><?php // echo strip_tags(get_the_excerpt()); ?></li>

</ul>
</div>
<?php include('include/to_pagetop.php'); ?>
<div class="clear"></div><br /><br />

<!-- ------------------------ 関連記事 --------------------------- -->
<?php related_posts(); ?>
<div class="clear"></div>

<?php include('include/to_pagetop.php'); ?>
<div class="clear"></div>

<!-- ------------------------ コメント --------------------------- -->
<a name="comments" id="#comments"></a>
<?php comments_template(); ?><br />
<?php // comments_template('/comments-fb.php'); ?>
<?php include('include/to_pagetop.php'); ?>

<br /><br />

<?php endwhile; else: ?>
<?php endif; ?>
</div><!--end: content-->
  
<!-- ------------------------ サイドバー ------------------------- -->
<?php get_sidebar('event'); ?>

<!-- ------------------------- フッタ ---------------------------- -->
<?php get_footer(); ?>
