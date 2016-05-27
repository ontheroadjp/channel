
<?php
	$cat_now = get_the_category();					// 現在のカテゴリー（配列）の取得
	$cat_now = $cat_now[0];
	$parent_id = $cat_now->category_parent;	// 親カテゴリー ID 取得
	$now_id = $cat_now->cat_ID; 						// 現在のカテゴリー ID 取得
	$now_name = $cat_now->cat_name;			// 現在のカテゴリー名取得
?>

<?php $loop = new WP_Query( array( 'posts_per_page' => 6, 'cat' => $now_id, 'orderby' =>rand ) ); ?>
<div class="showcase">
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="post-showcase">
		<div class="post-showcase-date">
			<?php the_time('Y年m月d日') ?>
		</div>
	
		<div class="post-showcase-thumbnail">
			<a href="<?php the_permalink() ?>">
				<?php //get_thumbnail($post->ID, array(80,80), ''); ?>
				<?php the_post_thumbnail( 'thumbnail_80' ); ?>
			</a>
		</div>

		<div class="post-showcase-title">
			<a href="<?php the_permalink(); ?>">
				<?php echo mb_substr( the_title('','',false), 0, 31, 'UTF-8' ); ?>
				<?php if( mb_strlen( the_title('','',false), "UTF-8" ) > 26 ) { ?>...<?php } ?>
			</a>
		</div>
	</div><!-- end of post-showcase -->

<?php endwhile;wp_reset_query(); ?>
<div class="clear"></div>
</div><!-- showcase -->
