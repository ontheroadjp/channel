<?php get_header(); ?>

<div id="col1">
<!--
  <?php //include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>
  <div class="featuredline"></div>
-->
  <div class="clear"></div>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div id="post">
    <div id="postbox">
      <div class="header">
        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a></h3>
        <span class="author">
        <?php the_author_posts_link(); ?>
        </span> // <span class="date">

		<?php the_date('Y年m月d日') ?>
        <!-- <?php the_time('M jS, Y') ?> -->

        </span></div>
      <div class="thumbnail">
        <?php get_thumbnail($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?>
      </div>
            <div class="clear"></div>

      <div class="info">
        <?php the_content_limit('240'); ?>
      </div>
      <div class="meta"><span class="continue"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Continue reading <?php the_title_attribute(); ?>">
        <?php _e("Continue", 'themejunkie'); ?>
        </a> </span> <span class="comment">
        <?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?><br />
		<?php the_tags('(タグ) ', ', ', ' '); ?>
        </span></div>


    </div>
    <!--end: postbox-->
  </div>
  <!--end: post-->
  <?php endwhile; ?>
  <div class="clear"></div>
  <div class="navigation">
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
  </div>
  <?php else : ?>
  <p>No posts found.</p>
  <?php endif; ?>
</div>
<!--end: col1-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
