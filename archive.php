<?php
/*
	$cat_id = get_query_var(‘cat’); 
	$cat_info = get_category( $cat_id, false ); 
	$cat_name = $cat_info->name; 

	$cat = get_the_category();
	$cat = $cat[0];
*/
?>

<?php get_header(); ?>

<!-- ------------------------ パンくずリスト ------------------------ -->
<?php
if( is_category() || is_tag() ) {
	$cat_id				= get_query_var('cat'); 
	$cat_info			= get_category($cat_id, false);

	$cat_name = $cat_info->name;

	$parent_name	= 0;	
	if ($cat_info->parent) {
		$parent_name	= get_category($cat_info->parent, false);
		$parent_url		= get_category_link( $cat_info->parent );
	}
} else if( is_year() || is_month() ) {
	$year = get_query_var('year');
} else if( is_month() ) {
	$monthnum = get_query_var('monthnum');
}
?>

<ol class="topic-path">
	<li class="first"><a href="<?php bloginfo('siteurl'); ?>">HOME</a></li>
	<?php
		if( is_category() ) {
			if( $cat_info->parent ) {
				echo '<li><a href="'.$parent_url.'">'.attribute_escape($parent_name->cat_name).'</a></li>';
			}
			echo '<li>'.$cat_name.'</li>';
		} else if( is_tag() ) {
			echo '<li>「'.trim(wp_title('', false)).'」の記事まとめ</li>';		
		} else if( is_year() ) {
			echo '<li>'.$year.'年</li>';		
		} else if( is_month() ) {
			echo '<li><a href="'.get_year_link($year).'">'.$year.'年</a></li>';		
			echo '<li>'.$monthnum.'月</li>';
		}
	?>
</ol>

<!-- ------------------------ バナー広告 ------------------------ -->
<!--
<div class="big_bunner">
</div>
-->

<div id="col1">
<?php // include('include/header_news.php'); ?>

<!-- ------------------------ アイキャッチ画像 ------------------------ -->
<?php if( is_category() ) { ?>
	<h2 class="archive_title"><?php echo trim(wp_title('', false)); ?> に関連する記事一覧</h2>
<?php } else if( is_tag() ) { ?>
	<h2 class="archive_title">「<?php echo trim(wp_title('', false)); ?>」の記事まとめ</h2>
<?php } else if( is_year() ) { ?>
	<h2 class="archive_title"><?php echo get_query_var('year'); ?>年に投稿された記事一覧</h2>
<?php } else if( is_month() ) { ?>
	<h2 class="archive_title"><?php echo get_the_time('Y年m月'); ?>に投稿された記事一覧</h2>
<?php } ?>

<div class="archive_header"><?php include('include/archive_header.php'); ?></div>


<?php if(have_posts()) : ?>

<?php if( is_category() ) { ?>
<!-- <h2>このカテゴリの最新エントリ</h2> -->
<p>7日以内に更新された記事には <img src="<?= bloginfo('template_directory'); ?>/images/new_icon.png" alt="New" /> が表示されます。</p>

<?php } else if( is_tag() ) { ?>
<!-- <h2>このタグが付いている記事の最新エントリ</h2> -->
<p>7日以内に更新された記事には <img src="<?= bloginfo('template_directory'); ?>/images/new_icon.png" alt="New" /> が表示されます。</p>

<?php } else if( is_month() ) { ?>
<?php } ?>

<?php //query_posts('cat=-109&posts_per_page=10&paged='.$paged); ?>
<?php //query_posts( 'cat=-109' ); ?>

<?php $loop_count = 0 ?>
<?php while (have_posts()) : the_post(); ?>
<?php // if ( in_category( 'tweet' ) ) continue; ?>
<?php $loop_count++ ?>


<?php if( $loop_count == 1 || $loop_count == 2 ) { ?>

<div id="post_big">
<div id="postbox_big">
	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php //the_tags('(タグ) ', ', ', ' '); ?>
	<div class="thumbnail">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php get_thumbnail($post->ID, 'full', 'alt="' . $post->post_title . '"'); ?>
		</a>
	</div>
	<div class="header">Posted by <?php the_author_posts_link(); ?> on <?php the_time('Y年m月d日') ?></div>
	<div class="info"><?php the_excerpt(); ?><?php // the_content_limit('240'); ?></div>
	<div class="meta">
		<span class="continue"> 
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Continue reading <?php the_title_attribute(); ?>"><?php _e("Continue", 'themejunkie'); ?></a> 
		</span> 
		<span class="comment"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?><br /></span>
	</div>
</div><!-- end: postbox_big -->
</div><!-- end: post_big -->

<?php } else { ?>

	<!-- ---------------------------- 広告（中段） ----------------------------------------------- -->
	<?php if( $loop_count == 3 ) { ?>
		<div class="left adsense">

		<iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=ontheroad0a-22&o=9&p=12&l=ur1&category=kindlebooks&banner=12NJVSNGQT7WYTTCM182&f=ifr" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>

		</div>

		<div class="left adsense">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- （dev）レクタングル（中） 300x250（アーカイブ_中_右） -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-9420456297086074"
     data-ad-slot="4374741906"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

		</div>
		<div class="clear"></div><br />
	<?php } ?>

	<div id="post">
	<div id="postbox">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<div class="header">Posted by <?php the_author_posts_link(); ?> on <?php the_time('Y年m月d日') ?></div>
		<?php //the_tags('(タグ) ', ', ', ' '); ?>
		<div class="thumbnail">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php get_thumbnail($post->ID, array(110,110), 'alt="' . $post->post_title . '"'); ?>
			</a>
		</div>
		<div class="info"><?php the_excerpt(); ?><?php // the_content_limit('240'); ?></div>
		<div class="clear"></div>
		<div class="meta">
			<span class="continue"> 
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Continue reading <?php the_title_attribute(); ?>"><?php _e("Continue", 'themejunkie'); ?></a> 
			</span> 
			<span class="comment"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?><br /></span>
		</div>

	</div><!--end: postbox-->
	</div><!--end: post-->

<?php } ?>
<?php endwhile; ?>
<div class="clear"></div>

<!-- ---------------------------- 広告（下段） ----------------------------------------------- -->
<div class="left adsense">
		<iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=ontheroad0a-22&o=9&p=12&l=ur1&category=kindle&banner=1JY4KG6QQSJKBPMGQWR2&f=ifr" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>

<div class="left adsense">

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- （dev）レクタングル（中） 300x250（アーカイブ_下_右） -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:250px"
	     data-ad-client="ca-pub-9420456297086074"
	     data-ad-slot="5851475100"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

</div>
<div class="clear"></div>

<!-- ---------------------------- Navi ---------------------------------------------- -->
<div class="navigation"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
<?php include('include/to_pagetop.php'); ?>
<br /><br />

<br /><br />


<?php else : ?>
	<p>No posts found.</p>
<?php endif; ?>

</div><!--end: col1-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
