<?php get_header(); ?>


<!-- <div id="content"> -->

	<?php // include('include/header_news.php'); ?>

	<h2 class="separator"><?php the_title(); ?></h2>

	<!-- ソーシャルボタン -->
	<?php // include('include/social_buttons.php'); ?>


	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="entry">
	<div class="post" id="post-<?php the_ID(); ?>">

		<?php 
			if ( is_page('sitemap_by_category') ) { 
				include('include/page_inc_sitemap.php');

			} else if( is_page('alfred') ) {
				include('include/page_inc_alfred.php');

			} else {
				the_content('More &raquo;');
				the_tags('Tags: ', ', ', ' ');
				edit_post_link('Edit', '[ ', ' ]');
			} 
		?>

	</div><!-- end of post -->
	</div><!-- end of entry -->


	<!-- ソーシャルボタン -->
	<?php // include('include/social_buttons.php'); ?>


	<!-- ad -->
	<script type="text/javascript"><!--
	google_ad_client = "ca-pub-9420456297086074";
	/* （dev）レクタングル（大） 336x280（個別ページ） */
	google_ad_slot = "1352266578";
	google_ad_width = 336;
	google_ad_height = 280;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>




	<?php //comments_template(); ?>
	<?php //comments_template('/comments-fb.php'); ?>

	<?php endwhile; ?>

	<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>

	<?php include('include/to_pagetop.php'); ?>

<!-- </div> -->
<!--end: content-->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
