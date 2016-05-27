<?php get_header(); ?>

<div id="content">

<!-- LS バナー -->
<!--
<a target='new' href="http://click.linksynergy.com/fs-bin/click?id=cSxHJqdiAjg&offerid=94348.110000127&type=4&subid=0"><IMG alt="iTunes Store（Japan）" border="0" src="http://ad.linkshare.ne.jp/13894/recommend/art5_468x60.jpg"></a><IMG border="0" width="1" height="1" src="http://ad.linksynergy.com/fs-bin/show?id=cSxHJqdiAjg&bids=94348.110000127&type=4&subid=0">
-->
<!-- LS バナー -->

<?php include('include/header_news.php'); ?>


	<!-- ad リンクユニット 468x15 -->
	<script type="text/javascript"><!--
	google_ad_client = "ca-pub-9420456297086074";
	/* リンクユニット 485x15 */
	google_ad_slot = "2242441994";
	google_ad_width = 468;
	google_ad_height = 15;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	<!-- ad リンクユニット 468x15 -->


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- エントリヘッダ -->
		<p class="browse"><a href="<?php bloginfo('siteurl'); ?>">HOME</a> > カテゴリ（<?php the_category(', '); ?>）の記事</p>

		<?php the_title('<h1>', '</h1>'); ?>

		<!--<p class="postmeta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('M d, Y'); ?> -->
		<div class="postmeta">Posted by <?php the_author_posts_link(); ?> on <?php the_date('Y年m月d日'); ?> |
			<?php //comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<a href="#comments">コメント</a>
		</div>

		<!-- ソーシャルボタン -->
		<?php include('include/social_buttons.php'); ?>


		<!-- エントリ -->
		<div class="entry">

		<?php
			global $post;
			if( has_post_thumbnail( $post_id ) && !empty($post->post_excerpt) ) {
		?>
				<div class="entry-header">

					<?php // アイキャッチ画像の表示 ?>
					<div class="eye_catch">
						<?php the_post_thumbnail( array(150, 150) ); ?>
					</div>

					<?php // 抜粋の表示 ?>
					<div class="excerpt"><?php the_excerpt(); ?></div>
					
					<div class="clear"></div>

				</div><br />

				<!-- ad バナー 468x60 -->
				<script type="text/javascript"><!--
				google_ad_client = "ca-pub-9420456297086074";
				/* （dev）バナー 468x60（記事ページ） */
				google_ad_slot = "4245812802";
				google_ad_width = 468;
				google_ad_height = 60;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
				<!-- ad バナー 468x60 -->

				<br /><br />

		<?php } ?>



		<?php // 本文の表示 ?>
		<?php the_content(); ?>

		</div><!-- end of entry -->

		<div class="clear"></div>


		<!-- ソーシャルボタン -->
		<?php include('include/social_buttons.php'); ?>

		<!-- ページトップボタン -->
		<?php include('include/to_pagetop.php'); ?>

		<!-- ad -->
		<script type="text/javascript"><!--
		google_ad_client = "ca-pub-9420456297086074";
		/* v）レクタングル（大） 300x250 */
		google_ad_slot = "6973852732";
		google_ad_width = 336;
		google_ad_height = 280;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>

		<br />

		<!-- 関連記事 -->
		<?php related_posts(); ?>

		<div class="clear"></div>

		<!-- ページトップボタン -->
		<?php include('include/to_pagetop.php'); ?>

		<div class="clear"></div>

		<!-- コメント欄 -->
		<a name="comments" id="#comments"></a>
		<?php comments_template(); ?><br />
		<?php comments_template('/comments-fb.php'); ?>

		<!-- ページトップボタン -->
		<?php include('include/to_pagetop.php'); ?>

	<?php endwhile; else: ?>
	<?php endif; ?>

</div><!--end: content-->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>


