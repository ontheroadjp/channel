<?php

//<link rel='next' href='http://dev.ontheroad.jp/page/2' />
//<link rel="canonical" href="http://dev.ontheroad.jp/" />


	$title_suffix = ' | '.get_bloginfo('name');
	$desc = 'Macのこと、WordPressのこと、一眼レフカメラのこと、を中心に（ひ）が気ままに書き綴ってるブログ。';
	$keywords = 'Apple,apple,MacBook Air,macbookair,WordPress,wordpress,EOS,eos,一眼レフ';

	echo '<meta name="twitter:card" content="photo">';
	echo '<meta name="twitter:description" content="'.$desc.'">';

	// トップページ（1ページ目）
	if( is_home()  && $page_no == 1) {
		echo '<title>'.get_bloginfo('name').'</title>'."\n";
		echo '<meta name="description" content="'.$desc.'" />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
		echo '<link rel="canonical" href="'.get_bloginfo('siteurl').'" />'."\n";
			
	// トップページ（2ページ目以降）
	} else if( is_home() ) {
		echo '<title>'.get_bloginfo('name').'(#'.$page_no.')</title>';
		echo '<meta name="description" content="'.$desc.'('.$page_no.'ページ目)" />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
//		echo '<link rel="canonical" href="'.get_bloginfo('siteurl').'" />'."\n";

	// カテゴリーページ
	} else if( is_category() ){
		echo '<title>'.trim(wp_title('', false)).' に関連する記事まとめ(#'.$page_no.')'.$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="ブログ「'.get_bloginfo('name').'」の「'.trim(wp_title('', false)).'」に関連する記事まとめ(#'.$page_no.') />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
		
//		$cat = get_the_category();
//		echo '<link rel="canonical" href="'.get_category_link( get_query_var('cat') ).'" />'."\n";

	// タグページ
	} else if( is_tag() ){
		echo '<title>「'.trim(wp_title('', false)).'の記事まとめ(#'.$page_no.')'.$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="ブログ「'.get_bloginfo('name').'」の「'.trim(wp_title('', false)).'」の記事まとめ(#'.$page_no.') />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";

		$tag = get_the_tags();
//		echo '<link rel="canonical" href="'.get_tag_link( get_query_var('tag_id') ).'" />'."\n";

	// 年アーカイブページ
	} else if( is_year() ){
		echo '<title>'.get_query_var('year').'に投稿された記事まとめ(#'.$page_no.')'.$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="ブログ「'.get_bloginfo('name').'」へ'.get_query_var('year').'年に投稿された記事まとめ(#'.$page_no.') />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
//		echo '<link rel="canonical" href="'.get_year_link( get_query_var('year') ).'" />'."\n";


	// 月アーカイブページ
	} else if( is_month() ){
		echo '<title>'.get_the_time('Y年m月').'に投稿された記事まとめ(#'.$page_no.')'.$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="ブログ「'.get_bloginfo('name').'」へ'.get_the_time('Y年m月').'に投稿された記事まとめ(#'.$page_no.') />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
//		echo '<link rel="canonical" href="'.get_month_link( get_query_var('year'), get_query_var('monthnum') ).'" />'."\n";


	// 投稿者アーカイブページ
	} else if( is_author() ){
		echo '<title>'.trim(wp_title('', false)).'が投稿した記事まとめ(#'.$page_no.')'.$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="ブログ「'.get_bloginfo('name').'」に'.trim(wp_title('', false)).'が投稿した記事まとめ(#'.$page_no.') />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
//		echo '<link rel="canonical" href="'.the_author_posts_link().'" />'."\n";

	// アーカイブページ
	} else if( is_archive() ){
		echo '<title>アーカイブ：'.trim(wp_title('', false)).'(#'.$page_no.')'.$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="ブログ「'.get_bloginfo('name').'」の記事アーカイブ(#'.$page_no.') />'."\n";
//		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";

	// 個別ページ
	} else if( is_page() ) {
		echo '<title>'.trim(wp_title('', false)).$title_suffix.'</title>'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
		echo '<link rel="canonical" href="'.get_permalink( $post->ID ).'" />'."\n";

	// 記事ページ
	} else if( is_single() ) {
		$meta_values = get_post_meta($post->ID, 'keywords', true);
		echo '<title>'.trim(wp_title('', false)).$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="'.strip_tags( get_the_excerpt() ).'" />'."\n";
		echo '<meta name="keywords" content="'.$meta_values.'" />'."\n";
//		echo '<link rel="canonical" href="'.get_permalink( $post->ID ).'" />'."\n";

	// その他
	} else {
		echo '<title>'.trim(wp_title('', false)).$title_suffix.'</title>'."\n";
		echo '<meta name="description" content="'.get_bloginfo('description').'" />'."\n";
		echo '<meta name="keywords" content="'.$keywords.'" />'."\n";
	}

?>

