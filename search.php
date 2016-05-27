<?php get_header(); ?>

<div id="content">
  <p class="browse"> You are here: Home / Search</p>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="archive">
    <div id="post-<?php the_ID(); ?>">
      <h3> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?>
        </a> </h3>
      <div class="archiveleft">
        <?php get_thumbnail($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?>
      </div>
      <div class="archiveright">
        <?php the_content_limit(400,''); ?>
      </div>
      <div class="clear"></div>
      <div class="archivebottom">
        <?php the_tags('Tags: ', ', ', ' '); ?>
        <?php edit_post_link('Edit', '[ ', ' ]'); ?>
      </div>
    </div>
  </div>
  <?php endwhile; else: ?>
  <h3 class="center">Not Found</h3>
  <p class="center">Sorry, but you are looking for something that isn't here.</p>
  <?php endif; ?>
</div>
<!--end: content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
