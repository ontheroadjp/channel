<?php
include("settings.php");


/**
 * 投稿内のsrc属性をCDN対応にする
 * http://takahashifumiki.com/web/programing/1795/
 * @param string $content
 * @return string
 */
function replace_cdnurl( $content ){
//     if(!is_ssl()){
		$upload_dir = wp_upload_dir();
		$upload_dir_url = $upload_dir[ 'baseurl' ];
		$upload_dir_cdn_url = str_replace('http://dev', 'http://devcdn1', $upload_dir_url);
		$content = str_replace($upload_dir_url, $upload_dir_cdn_url, $content);

//		$content = str_replace( 'src="http://dev.onthe', 'src="http://devcdn1.onthe', $content);
//     }
     return $content;
}
 
//add_filter('the_title', 'change_any_texts');
//add_filter('the_content', 'replace_cdnurl');
//add_filter('the_excerpt', 'replace_cdnurl');
//add_filter('the_content_feed', 'change_any_texts');
//add_filter('the_excerpt_rss', 'change_any_texts');


// ---------------------------------------------
//  wp_head() の制御
// 参考： http://www.rokurofire.info/2014/07/21/control_wp_cssjs/
// ---------------------------------------------
function deregister_files() {

	// jQuery を Googleがホストするものに差し替える
//	wp_deregister_script( 'jquery' );
//	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' );

	// プラグイン "wordpress-popular-posts" のCSSを出力しない
	// 管理画面で設定可

	// プラグイン "yet-another-related-posts-plugin" のCSSとJSを出力しない
	wp_deregister_style( 'yet-another-related-posts-plugin' );
	wp_dequeue_style( 'yet-another-related-posts-plugin' );

	// プラグイン "contact-form-7" のCSSとJSを出力しない
    if (!is_page( 'contact' )){
        wp_dequeue_style( 'contact-form-7' );
        wp_dequeue_script( 'contact-form-7' );
    }

	// プラグイン "amazon_js" のCSSとJSを出力しない
    if( 1 === get_post_meta($post->ID, 'disable_amazon_js', true) ) {
        wp_dequeue_style( 'amazonjs' );
        wp_dequeue_script( 'amazonjs' );
    }
}
add_action( 'wp_enqueue_scripts', 'deregister_files');


// WP バージョン表記を消す
remove_action('wp_head','wp_generator');

// wlwmanifest（Windows Live Writer）の情報を消す
remove_action('wp_head', 'wlwmanifest_link');


# Sidebar
if (function_exists('register_sidebar')) {

    register_sidebar( array( 
		'name'			=> 'Full Width Widget',
        'before_widget'	=> '',
        'after_widget'	=> '</div>',
        'before_title'	=> '<h3>',
        'after_title'	=> '</h3><div class="box">',
    ));

    register_sidebar( array( 
		'name'			=> 'Left Widget',
        'before_widget'	=> '',
        'after_widget'	=> '</div>',
        'before_title'	=> '<h3>',
        'after_title'	=> '</h3><div class="box">',
    ));	
	
    register_sidebar( array( 
		'name'			=> 'Right Widget',
        'before_widget'	=> '',
        'after_widget'	=> '</div>',
        'before_title'	=> '<h3>',
        'after_title'	=> '</h3><div class="box">',
    ));	
    register_sidebar( array( 
		'name'			=> 'Footer Widget',
        'before_widget'	=> '',
        'after_widget'	=> '</div></div>',
        'before_title'	=> '<div class="left"><h3>',
        'after_title'	=> '</h3><div class="box">',
    ));	
}

# Limit Post
function the_content_limit($max_char, $more_link_text = '', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo "";
      echo $content;
      echo "&nbsp;<a href='";
      the_permalink();
      echo "'>"."Read More &rarr;</a>";
      echo "";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "";
        echo $content;
        echo "...";
        echo "&nbsp;<a href='";
        the_permalink();
        echo "'>"."</a>";
        echo "";
   }
   else {
      echo "";
      echo $content;
      echo "&nbsp;<a href='";
      the_permalink();
      echo "'>"."Read More &rarr;</a>";
      echo "";
   }
}



// ---------------------------------------------
// アイキャッチ画像が使えるようにする。
// ---------------------------------------------
function mysetup() {
//	add_theme_support( 'post-thumbnails' ); // 全てで有効；
	add_theme_support( 'post-thumbnails', array( 'post' ) ); // 投稿のみで有効
//	add_theme_support( 'post-thumbnails', array( 'page' ) ); // 固定ページのみで有効
}
add_action( 'after_setup_theme', 'mysetup' );

// ---------------------------------------------
// アップロード画像のサイズ指定する。
// ---------------------------------------------
add_image_size( 'thumbnail_50', 50, 50, false );
add_image_size( 'thumbnail_80', 80, 80, false );
add_image_size( 'thumbnail_110', 110, 110, false );
add_image_size( 'thumbnail_300', 300, 300, false );


// ---------------------------------------------
// デフォルトの Thumbnail サイズを指定する。
// ---------------------------------------------
// set_post_thumbnail_size( 30, 30, true );

// ---------------------------------------------
// アイキャッチャ画像の表示
// ---------------------------------------------
function get_thumbnail($postid=0, $size='thumbnail', $attributes='') {
	if( $postid < 1 ) $postid = get_the_ID();

	// アイキャッチ画像を表示
	if( has_post_thumbnail( $postid ) ) {
		echo get_the_post_thumbnail( $postid, $size, $attributes );
//		echo the_post_thumbnail( $size, $attributes );
//		echo the_post_thumbnail( $size );


	// 本文に挿入されている画像を表示
	} else if ( $images = get_children( array( 
			'post_parent' => $postid,
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image', )))

		foreach($images as $image) {
			$thumbnail = wp_get_attachment_image_src( $image->ID, $size ); 
?>
			<img src="<?php echo $thumbnail[0]; ?>" <?php echo $attributes; ?> />
<?php

	// 画像が何もないときは No Image 画像を表示
	} else {
		echo '<img src=' . get_bloginfo ( 'stylesheet_directory' ).'/images/noimage.gif>';
	}
	
}


function get_thumbnail_uri($postid=0, $size='thumbnail', $attributes='') {
	if ( $postid < 1 ) $postid = get_the_ID();

	// アイキャッチ画像の URL
	if( has_post_thumbnail( $postid ) ) {
		$image_id = get_post_thumbnail_id();
	    $image_url = wp_get_attachment_image_src($image_id, $size ); 
	    echo $image_url[0]; 

	// 本文の画像（メディアライブラリにアップロードされた画像）の URL
	} else if ( $images = get_children( array( 
		'post_parent' => $postid,
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image', )))

		foreach($images as $image) {
			$thumbnail = wp_get_attachment_image_src( $image->ID, $size );
			?>

	<?php echo $thumbnail[0]; ?> <?php echo $attributes; ?>
<?php

	} else {
		// 画像が何もないときは No Image の URL
		echo get_bloginfo ( 'stylesheet_directory' );
		echo '/images/noimage.gif';
	}
	
}


# Most Comment
function mdv_most_commented($no_posts = 5, $before = '<li>', $after = '</li>', $show_pass_post = false, $duration='') {
    global $wpdb;
	
	$mdv_most_commented = wp_cache_get('mdv_most_commented');
	if ($mdv_most_commented === false) {
		$request = "SELECT ID, post_title, comment_count FROM $wpdb->posts";
		$request .= " WHERE post_status = 'publish'";
		if (!$show_pass_post) $request .= " AND post_password =''";
	
		if ($duration !="") $request .= " AND DATE_SUB(CURDATE(),INTERVAL ".$duration." DAY) < post_date ";
	
		$request .= " ORDER BY comment_count DESC LIMIT $no_posts";
		$posts = $wpdb->get_results($request);

		if ($posts) {
			foreach ($posts as $post) {
				$post_title = htmlspecialchars($post->post_title);
				$comment_count = $post->comment_count;
				$permalink = get_permalink($post->ID);
				$mdv_most_commented .= $before . '<a href="' . $permalink . '" title="' . $post_title.'">' . $post_title . '</a>' . $after;
			}
		} else {
			$mdv_most_commented .= $before . "None found" . $after;
		}
	
		wp_cache_set('mdv_most_commented', $mdv_most_commented);
	} 

    echo $mdv_most_commented;
}

# Retrieves the setting's value depending on 'key'.
function theme_settings( $key ) {
	global $settings;
	return $settings[$key];
}


// ---------------------------------------------
// 標準ウィジェット（カテゴリ）の設定
// ---------------------------------------------
add_filter( 'widget_categories_args',
    create_function( '$args',
    'return array_merge($args, array(	\'show_option_all\' => \'HOME\', 
										\'show_last_updated\' => 1,
										\'feed_image\' => get_bloginfo(\'template_directory\').\'/images/rss.gif\'
								));') );


// ---------------------------------------------
// 標準ウィジェット（タグクラウド）の設定
// ---------------------------------------------
add_filter( 'widget_tag_cloud_args',
    create_function('$args',
    'return array_merge($args, array(	\'smallest\' => 8, 
										\'largest\' => 16,
								));') );


// ---------------------------------------------
// <p> タグはずす
// ---------------------------------------------
remove_filter ( 'the_content', 'wpautop' ); 
remove_filter ( 'the_excerpt', 'wpautop' ); 


// ---------------------------------------------
// RSS 抜粋にサムネイルを付ける
// ---------------------------------------------
function diw_post_thumbnail_feeds( $content ){
    global $post;
    if(has_post_thumbnail( $post->ID ) ) {
        $content = '<div>'.get_the_post_thumbnail( $post->ID, 'thumbnail' ).'</div>'.$content;
    }
    return $content;
}
add_filter( 'the_excerpt_rss', 'diw_post_thumbnail_feeds' );
add_filter( 'the_content_feed', 'diw_post_thumbnail_feeds' );


// ---------------------------------------------
// New アイコンを付ける
// ---------------------------------------------
function add_new_icon( $val ) {
	$days	= 7;
	$today	= date('U');
	$entry	= get_the_time('U');
	$diff	= date('U',( $today - $entry ) ) / 86400;
	
	if( $days > $diff ) { 
		$icon_tag = '<img src="'.get_bloginfo('template_directory').'/images/new_icon.png" style="vertical-align: middle; margin: -1px 0 0 5px;" alt="New" />';

	}
    return $val.$icon_tag;
}
//add_filter('the_title', 'add_new_icon');
add_filter( 'the_date', 'add_new_icon' );
add_filter( 'the_time', 'add_new_icon' );


function get_new_icon( $val ) {
	$days	= 7;
	$today	= date('U');
	$diff	= date('U',( $today - $val ) ) / 86400;

	if( $days > $diff ) { 
		$icon_tag = '<img src="'.get_bloginfo('template_directory').'/images/new_icon.png" alt="New" />';

	}
    return $icon_tag;
}

// ------------------------------------------------
// カスタム投稿タイプ（event）
// ------------------------------------------------
add_action( 'init', 'register_cpt_event' );
 
function register_cpt_event() {
 
    $labels = array(
        'name' => _x( 'イベント一覧', 'event' ),
        'singular_name' => _x( 'イベント', 'event' ),
        'add_new' => _x( '新規追加', 'event' ),
        'add_new_item' => _x( '新しいイベントを追加', 'event' ),
        'edit_item' => _x( 'イベントを編集', 'event' ),
        'new_item' => _x( '新しいイベント', 'event' ),
        'view_item' => _x( 'イベントを見る', 'event' ),
        'search_items' => _x( 'イベントの検索', 'event' ),
        'not_found' => _x( 'イベントが見つかりません', 'event' ),
        'not_found_in_trash' => _x( 'ゴミ箱にイベントはありません', 'event' ),
        'parent_item_colon' => _x( '親イベント:', 'event' ),
        'menu_name' => _x( 'イベント投稿', 'event' ),
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => '概要',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type( 'event', $args );
}
 
// サムネイル画像を利用
add_theme_support( 'post-thumbnails', array( 'event' ) );
set_post_thumbnail_size( 150, 150, true );
 
// アイコンを追加
function add_menu_icons_styles(){
     echo '<style>
          #adminmenu #menu-posts-team div.wp-menu-image:before {
               content: "\f307";
          }
     </style>';
}
add_action( 'admin_head', 'add_menu_icons_styles' );

// パーマリンクの変更
function my_post_type_link( $link, $post ){
    if ( 'event' === $post->post_type ) {
        return home_url( '/archives/event/' . $post->ID );
    } else {
        return $link;
    }
}
add_filter( 'post_type_link', 'my_post_type_link', 1, 2 );

 
function my_rewrite_rules_array( $rules ) {
    $new_rules = array( 
        'archives/event/([0-9]+)/?$' => 'index.php?post_type=event&p=$matches[1]',
    );
 
    return $new_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'my_rewrite_rules_array' );


// ------------------------------------------------
// カスタムタクソノミ作成（イベントの日付）
// ------------------------------------------------
add_action( 'init', 'register_ctax_event' );

function register_ctax_event() {

	// カテゴリの作成
	$args = array(
		'label' => 'イベント日付（カテゴリ）',
		'public' => true,
		'show_ui' => true,
		'hierarchical' => true
	);
	register_taxonomy('event_category', 'event', $args );

	// タグの作成
	$args = array(
		'label' => 'イベント種別（タグ）',
		'public' => true,
		'show_ui' => true,
		'hierarchical' => false
	);
	register_taxonomy( 'event_tag','event', $args );
}

// ------------------------------------------------
// Twitter Tools プラグイン用
// ------------------------------------------------
/*
function ex_twitter_digests( $post_data ) {

		// 先頭に追加する HTML
		$pre_content ='';

		$pre_content .= '<p>今日のつぶやきをまとめてポストします。<br>(by <a href="http://wordpress.org/extend/plugins/twitter-tools/" target="_blank">TwitterTools プラグイン</a>)<br>'."\n";

		$pre_content .= '興味がある人はフォローしてやってください。<br>'."\n";
		$pre_content .= '<br>'."\n";

		$pre_content .= '<a href="https://twitter.com/ontheroad_jp" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-size="large">@ontheroad_jpをフォロー</a>'."\n".

"<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");
</script>".

'</p><div class="clear"></div>'."\n";

		$pre_content .= '<h3>本日のつぶやき</h3>'."\n";

		// 末尾に追加する HTML
		$suf_content = '';
		$suf_content .= '<h3>自動ダイジェスト投稿の方法</h3>'."\n";
		$suf_content .= '<p>'."\n";
		$suf_content .= 'Twitter Tools を使って自動ダイジェスト投稿をカスタマイズする方法は以下のエントリをご覧ください。<br><br>';
		$suf_content .= '<a href="http://dev.ontheroad.jp/archives/4357"></a>'."\n";
		$suf_content .= '</p>'."\n";


		// 記事本文 の追加
        $content = $post_data['post_content'];
		$post_data['post_content'] = $pre_content."\n".$content."\n".$suf_content;


		// 抜粋の追加
//		$excerpt = '<!--:ja-->今日のつぶやきをまとめてポストします。(by TwitterTools プラグイン)<!--:-->';
//		$excerpt .= '<!--:en-->The post summarizes the Tweets of today<br>(by TwitterTools plug-in)<!--:-->';
		$excerpt = '今日のつぶやきをまとめてポストします。<br>(by TwitterTools プラグイン)';
		$post_data['post_excerpt'] = $excerpt;


		// 投稿日付の修正
//		$post_data['post_date'] = date('Y-m-d H:i:s', get_option('aktt_next_daily_digest') - get_option('gmt_offset') * 3600);
		$post_data['post_date'] = gmdate("Y-m-d H:i:s", get_option('aktt_next_daily_digest'));


		// 投稿状態の設定
		$post_data['post_status'] = 'draft';

        return $post_data;
}
add_filter( 'aktt_digest_post_data', 'ex_twitter_digests' );
*/

// ------------------------------------------------
// Twitter Tools プラグイン用（アイキャッチ画像を自動挿入）
// ------------------------------------------------
/*
function add_eye_catch_img_for_twitter_digest( $post_id ) {
	if( $post_id-> )
	require_once(ABSPATH . 'wp-admin/includes/image.php');
	$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
	wp_update_attachment_metadata( $attach_id, $attach_data );
	return $post_id;
}
add_action( 'publish_post', 'add_eye_catch_img_for_twitter_digest', 99 );
*/

// ------------------------------------------------
// qTranslate プラグイン用
// ------------------------------------------------
/*
function curPageURL() {
    $pageURL = 'http';
     if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
     }
    else {
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
     }
return $pageURL;
}
 
function langlist () {
   if (qtrans_getLanguage() == 'en') {
      echo '<a href="' . qtrans_convertURL(curPageURL(), 'ja') . '">日本語</a>';
   } elseif (qtrans_getLanguage() == 'ja') {
      echo '<a href="' . qtrans_convertURL(curPageURL(), 'en') . '">English</a>';
   }
}
*/

/* ----------------------------------- カスタム投稿タイプ（ブラックジャックによろしく） ------------------------------ */

/*
function blackjack_init() {
	$labels = array(
		'name' => _x( 'ブラックジャックによろしく', 'post type general name' ),
		'singular_name' => _x('記事一覧', 'post type singular name'),
		'add_new' => _x('新しく記事を書く', 'blackjack'),
		'add_new_item' => __('ブラックジャックによろしく記事を書く'),
		'edit_item' => __('ブラックジャックによろしく記事を編集'),
		'new_item' => __('新しいブラックジャックによろしく記事'),
		'view_item' => __('ブラックジャックによろしく記事を見る'),
		'search_items' => __('ブラックジャックによろしく記事を探す'),
		'not_found' =>  __('ブラックジャックによろしく記事はありません'),
		'not_found_in_trash' => __('ゴミ箱にブラックジャックによろしく記事はありません'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes'),
		'has_archive' => true
	);
	register_post_type('blackjack',$args);
}
add_action( 'init', 'blackjack_init' );
*/


//投稿時のメッセージとか
/*
function book_updated_messages( $messages ) {
	$messages['blackjack'] = array(
		0 => '', // ここは使用しません
		1 => sprintf( __('ブラックジャックによろしく記事を更新しました <a href="%s">記事を見る</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('カスタムフィールドを更新しました'),
		3 => __('カスタムフィールドを削除しました'),
		4 => __('ブラックジャックによろしく記事更新'),
		5 => isset($_GET['revision']) ? sprintf( __(' %s 前にブラックジャックによろしく記事を保存しました'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('ブラックジャックによろしく記事が公開されました <a href="%s">記事を見る</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('ブラックジャックによろしく記事を保存'),
		8 => sprintf( __('ブラックジャックによろしく記事を送信 <a target="_blank" href="%s">プレビュー</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('ブラックジャックによろしく記事を予約投稿しました: <strong>%1$s</strong>. <a target="_blank" href="%2$s">プレビュー</a>'),  date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('ブラックジャックによろしく記事の下書きを更新しました <a target="_blank" href="%s">プレビュー</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);
  return $messages;
}
add_filter('post_updated_messages', 'book_updated_messages');
*/


//追加したカスタム投稿タイプの投稿ページ上部にあるプルダウンするヘルプ内テキスト
/*
function add_help_text($contextual_help, $screen_id, $screen) { 

  if ('dogs' == $screen->id ) {
    $contextual_help =
      '<p>' . __('ワンコ動画がなぜ最高なのかを以下に解説します') . '</p>' .
      '<ul>' .
      '<li>' . __('擬似的にモフモフ出来る') . '</li>' .
      '<li>' . __('とにかく可愛い') . '</li>' .
      '</ul>' .
      '<p>' . __('もし貴方がワンコ動画で満足できないならぬこ様動画も試すべきです:') . '</p>' .
      '<ul>' .
      '<li>' . __('擬似的にもふもふ出来ｒ') . '</li>' .
      '<li>' . __('お腹すいた。') . '</li>' .
      '</ul>' .
      '<p><strong>' . __('解決しないときは:') . '</strong></p>' .
      '<p>' . __('<a href="http://codex.wordpress.org/Posts_Edit_SubPanel" target="_blank">ドキュメント</a>') . '</p>' .
      '<p>' . __('<a href="http://wordpress.org/support/" target="_blank">フォーラム</a>') . '</p>' ;
  } elseif ( 'edit-book' == $screen->id ) {
    $contextual_help =
      '<p>' . __('カスタム投稿タイプむずいようで簡単ですね。でも僕にはむずいです。') . '</p>' ;
  }
  return $contextual_help;
}
add_action( 'contextual_help', 'add_help_text', 10, 3 );
*/


?>