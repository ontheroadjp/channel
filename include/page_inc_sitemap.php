<div id="sitemap">

<!--
<h3>個別ページ</h3>
<ul><?php wp_list_pages('title_li='); ?></ul>
-->


<?php
	$args=array(
		'orderby' => 'name',
		'order' => 'ASC'
	);
	$categories=get_categories($args);
?>
	<?php foreach($categories as $category) { ?>
		<h3>
			カテゴリ：
			<!-- <a href="<?= get_category_link( $category->term_id ) ?>" title="<?= sprintf( __( "View all posts in %s" ), $category->name ) ?>"> -->
				<?= $category->name ?>（<?= $category->count ?> 記事）
			<!-- </a> -->
		</h3>

		<ul>
		<?php
			global $post;
			$myposts = get_posts('category='.$category->term_id."&orderby=post_date&order=DESC");
			foreach($myposts as $post) : setup_postdata($post); 
		?>
				<li>
					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php get_thumbnail($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?>
						</a>
					</div>

					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>

					<p class="postmeta">Posted by <?php the_author_posts_link(); ?> on <?php the_date('Y年m月d日'); ?>
						<?php //comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
						<!--  | <a href="#fb_comments">Leave a Comment</a> -->
					</p><div class="clear"></div>

					<div class="excerpt"><?php the_excerpt(); ?></div>

					<div class="tag">
						<?php the_tags('Tags: ', ', ', ' '); ?>
						<?php edit_post_link('Edit', '[ ', ' ]'); ?>
					</div>

				</li><br />
			<?php endforeach; ?>
		</ul><div class="clear"></div>

		<?php include('to_pagetop.php'); ?>


	<?php }; ?>
</div><!-- end of #sitemap -->

