
<!-- <div class="postlink"> -->
<div class="widget">

<?php if (have_posts()):?>

<h3>関連するエントリ</h3>
<div class="box">


<ul>
	<?php while (have_posts()) : the_post(); ?>
	<li>
		<div class="thumbnail">
			<a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>">
				<?php get_thumbnail($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?>
			</a>
		</div>

		<a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>">
			<?php if ( get_the_title() ) the_title(); else the_ID(); ?>
		</a><br>
		<div style="margin:5px 0;"><?php the_time('Y年m月d日') ?></div>


		<?php //echo strip_tags(get_the_excerpt()); ?>

		<div class="clear"></div>
	</li>
	<?php endwhile; ?>
</ul>

</div>
<?php else: ?>

<!-- <p>No related posts.</p> -->
<?php endif; ?>





