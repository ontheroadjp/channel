<?php get_header(); ?>

<!-- ------------------------ パンくずリスト ------------------------ -->
<ol class="topic-path">
	<li class="first">HOME</li>
</ol>

<?php include( 'include/show_case.php' ); ?>
<?php // include("include/adsense/dev_home_Top_Big_Banner_728x90.php"); ?>

<div id="col1">


<h2><?php bloginfo('name'); ?></h2>
<div class="top_message">
このサイトでは MacやWEBなどのことを中心にボチボチ更新しています。 好きなことを適当につらつらと書いておりますので、間違いなどあればコメントしてもらえればと思います。<br>
</div>

<?php // include("include/adsense/dev_home_Middle_Full_Banne.php"); ?>

<?php if (have_posts()) : ?>

<h2>最新のエントリ</h2>
<p>7日以内に更新された記事には <img src="<?= bloginfo('template_directory'); ?>/images/new_icon.png" alt="New" /> が表示されます。</p>

<?php query_posts('cat=-109&posts_per_page=10&paged='.$paged); ?>
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

	<!-- --------------------- 広告（中段） --------------------------- -->
	<?php if( $loop_count == 3 ) { ?>
		<! -- 左側 -->
		<div class="left adsense">
		
		<iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=ontheroad0a-22&o=9&p=12&l=ur1&category=kindlebooks&banner=12NJVSNGQT7WYTTCM182&f=ifr" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>

		</div>

		<! -- 右側 -->
		<div class="left adsense">

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- （dev）レクタングル（中） 300x250（トップ_中_右） -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:300px;height:250px"
			     data-ad-client="ca-pub-9420456297086074"
			     data-ad-slot="8944542304"></ins>
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

<!-- ------------------- 広告（下段） ------------------------ -->
<div class="left adsense">
		<iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=ontheroad0a-22&o=9&p=12&l=ur1&category=kindle&banner=1JY4KG6QQSJKBPMGQWR2&f=ifr" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>

<div class="left adsense">

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- （dev）レクタングル（中） 300x250（トップ_下_右） -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:250px"
	     data-ad-client="ca-pub-9420456297086074"
	     data-ad-slot="1421275502"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

</div>
<div class="clear"></div>

<!-- ----------------- Navi -------------------------------- -->
<div class="navigation"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
<?php include('include/to_pagetop.php'); ?>
<br /><br />


<!-- ---------------- Facebook ページ ------------------------ -->
<!--
<div class="left adsense">
<div class="fb-recommendations" data-site="http://dev.ontheroad.jp" data-app-id="171242856322655" data-width="300" data-height="300" data-header="true" data-linktarget="_top"></div>
</div>

<div class="left adsense">
<div class="fb-like-box" data-href="http://www.facebook.com/dev.ontheroad" data-width="300" data-height="300" data-show-faces="true" data-stream="true" data-header="true"></div>
</div>
-->
<!-- ---------------- Facebook ページ ------------------------ -->

<div class="clear"></div>
<br /><br />


<?php else : ?>
	<p>No posts found.</p>
<?php endif; ?>

</div><!--end: col1-->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
