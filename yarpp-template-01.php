<?php if (have_posts()):?>
<h3>あなたへのオススメ記事</h3>
<div class="postlink">
<ul>
<?php while (have_posts()) : the_post(); ?>

<li><?php get_thumbnail($post->ID, array(55,55), 'alt="' . $post->post_title . '"'); ?><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a><br><div style="margin:5px 0;">Posted by <?php the_author_posts_link(); ?> on <?php the_time('Y年m月d日'); ?><br><div class="clear"></div><?php // echo strip_tags(get_the_excerpt()); ?></li>

<?php endwhile; ?>
</ul>
</div>
<?php else: ?>
<!-- <p>No related posts.</p> -->
<?php endif; ?>
