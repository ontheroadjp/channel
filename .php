<?php $page_no = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<!DOCTYPE html>
<html lang="ja">
<meta charset="<?php bloginfo('charset'); ?>">

<?php include( 'include/export_metatag.php'); ?>

<?php
?>
	

<!-- --------------------- CSS ------------------------ -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
<!-- http://devcdn1.ontheroad.jp/wp-content/themes/channel/style.css" -->

<!-- -------------------- wp_head() ---------------------- -->
<?php wp_head(); ?>

<!-- -------------------- Javascript ---------------------- -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/smoothscroll.js"></script>
<!-- http://devcdn1.ontheroad.jp/wp-content/themes/channel/lib/smoothscroll.js -->

<!-- --------------------- その他 ------------------------ -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

<!-- ------------------- Google Analitics ------------------ -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-29132526-1', 'ontheroad.jp');
	ga('require', 'displayfeatures');
	ga('send', 'pageview');
	ga("send", "event", "AmazonJS", "Click", "ASIN TITLE");
</script>

<!-- ------------------------- OGP ------------------------- -->
<meta property="og:locale" content="ja_JP">
<meta property="fb:admins" content="100002003889575" />
<meta property="fb:app_id" content="171242856322655" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />

<?php if( is_single() || is_page() ) { ?>
<meta property="og:title" content="<?php echo strip_tags( the_title() ); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo get_thumbnail_uri($post->ID, 'large'); ?>" />
<meta property="og:url" content="<?php echo strip_tags( the_permalink() ); ?>" />
<meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>" />
<?php } else { ?>
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>" />
<meta property="og:type" content="blog" />
<meta property="og:image" content="<?php get_thumbnail_uri($post->ID); ?>" />
<meta property="og:url" content="<?php echo get_bloginfo('url') . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
<?php } ?>

</head><body>

<!-- ----------------------- #Wrapper ------------------------ -->
<div id="wrapper">

<!-- ----------------------- #Top Navi ----------------------- -->
<div id="top">
<div id='topnav'>
<div class="left">
<?php 
	if ( is_home() ) {
//		echo '<li class="current_page_item"><a href="'.get_bloginfo('siteurl').'">'._e("Home", 'themejunkie').'</a></li>';
		echo '<li class="current_page_item"><a href="'.get_bloginfo('siteurl').'">HOME</a></li>';
	} else {
//		echo '<li><a href="'.get_bloginfo('siteurl').'">'._e("Home", 'themejunkie').'</a></li>';
		echo '<li><a href="'.get_bloginfo('siteurl').'">HOME</a></li>';
	}
	wp_list_pages('depth=1&sort_column=menu_order&title_li=');
?>
</div><!--end: left-->

<div class="right"><?php include('include/search_form.php'); ?></div>

</div><!-- end: topnavi -->
</div><!--end: top-->

<!-- ----------------------- #Header ----------------------- -->
<header id="header">
<div class="logo"><a href="<?php bloginfo('siteurl'); ?>"><?php echo get_bloginfo('name'); ?></a></div>
<div class="description"><?php echo get_bloginfo('description'); ?></div>
<?php if (get_theme_mod('showad468x60') == 'Yes') { ?>
<div class="ad468x60"><?php echo stripslashes(get_theme_mod('ad468x60')); ?></div>
<?php } ?>
</header><!--end: header-->

<!-- ----------------------- #Menu ------------------------- -->
<nav id="menu">
<div class="left">
<?php 
//	if( is_home() ) { 
//		echo '<li class="current">HOME</li>';
//	} else {
//		echo '<li><a href="'.get_bloginfo('siteurl').'">HOME</a></li>';
//	} 
//
//	$terms = get_categories();
//	foreach ( $terms as $term ) {
//		if ( $term->name == "つぶやき" ) continue;
//		if( single_cat_title('', false) == $term->name ) {
//			echo '<li class="current">'.$term->name.'</li>';
//		} else if( is_category( $term->term_id ) ) {
//			echo '<li class="current">'.$term->name.'</li>';
//		} else if(!empty($term->name)){
//			echo '<li><a href="'.get_category_link( $term->term_id ).'">'.$term->name.'</a></li>';
//		}
//	}
?>

<?php 
//	if( !is_user_logged_in() ) {
//		if( is_home() ) { 
//			echo '<li class="current">HOME</li>';
//		} else {
//			echo '<li><a href="'.get_bloginfo('siteurl').'">HOME</a></li>';
//		} 
//
//		$terms = get_categories( 'orderby=order' );
//		foreach ( $terms as $term ) {
//			if ( $term->name == "つぶやき" ) continue;
//			if( single_cat_title('', false) == $term->name ) {
//				echo '<li class="current">'.$term->name.'</li>';
//			} else if( is_category( $term->term_id ) ) {
//				echo '<li class="current">'.$term->name.'</li>';
//			} else if(!empty($term->name)){
//				echo '<li><a href="'.get_category_link( $term->term_id ).'">'.$term->name.'</a></li>';
//			}
//		}
//	} else {

		echo '<ul>';
		if( is_home() ) { 
			echo '<li class="current">HOME</li>';
		} else {
			echo '<li><a href="'.get_bloginfo('siteurl').'">HOME</a></li>';
		} 

		$terms = get_terms('category', array(
			 	'orderby'	=> 'order',
			 ) );
		foreach ( $terms as $term ) {
			$termchildren = get_term_children( $term->term_id, 'category' );

			$termchildren = get_terms( 'category', array( 
					'child_of'	=> $term->term_id
					, 'orderby' => 'order'
					, 'fields' => 'ids'
				 ) );


			if( is_array( $termchildren ) && $termchildren[0] <> '' ) {
				echo '<li><a href="'.get_category_link( $term->term_id ).'">'.$term->name.'</a><ul>';
				foreach( $termchildren as $child ) {
					$child_obj = get_term_by( 'id', $child, 'category' );
					echo '<li><a href="' . get_category_link( $child ) . '">' . $child_obj->name . '</a></li>';
				}
				echo '</ul></li>';
			} else if( $term->parent == 0 ){
				if( single_cat_title('', false) == $term->name ) {
					echo '<li class="current">'.$term->name.'</li>';
				} else if( is_category( $term->term_id ) ) {
					echo '<li class="current">'.$term->name.'</li>';
				} else if(!empty($term->name)){
					echo '<li><a href="'.get_category_link( $term->term_id ).'">'.$term->name.'</a></li>';
				}
			}

		} // end of foreach
		echo '</ul>';
//	}
?>
</div><!--end: left -->
</nav><!--end: menu-->

<!-- <div id="wrapper"> のみとじてない -->



