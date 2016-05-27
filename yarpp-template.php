<?php /*
Example template
Author: mitcho (Michael Yoshitaka Erlewine)
*/
?><h3>ŠÖ˜A‚·‚éƒGƒ“ƒgƒŠ</h3>
<?php if (have_posts()):?>
<ul>
<?php while (have_posts()) : the_post(); ?>
<li>
	<div class="thumbnail">
		<?php get_thumbnail($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?>
	</div>
	<a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a>
	<div class="clear"></div>
</li>

<?php endwhile; ?>
</ul>
<?php else: ?>
<!-- <p>No related posts.</p> -->
<?php endif; ?>





