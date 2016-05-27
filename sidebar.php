<div id="sidebar">

<div class="widget">

<?php if (get_theme_mod('subscribe') == 'Yes') { ?>
<!-- ------------------------ Subscribe -------------------------- -->
<h3><?php _e("Subscribe", 'themejunkie'); ?></h3>
<div class="box">
<div class="right"><img src="<?php echo bloginfo('template_url'); ?>/images/feed.gif" /></div>
<?php _e("You can subscribe by RSS or Email to receive the latest news and breaking stories.", 'themejunkie'); ?>
<p class="rss">
<span class="postsfeed"><a rel="nofollow" href="<?php bloginfo('rss_url');?>">
<?php _e("Posts", 'themejunkie'); ?></a></span>
<span class="commentsfeed"><a rel="nofollow" href="<?php bloginfo('comments_rss2_url');?>">
<?php _e("Comments", 'themejunkie'); ?></a></span>
</p>

<form id="subscribeform" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_theme_mod('feedburner_id'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
<div id="subscribe">
<input class="subscribeinput" value="Enter your email..." onclick="this.value='';" name="feed" id="input" />
<input type="hidden" value="<?php echo get_theme_mod('feedburner_id'); ?>" name="uri"/>
<input type="hidden" name="loc" value="en_US"/>
<input type="submit" class="subscribesubmit" value="Sign up"/>
</div>
</form>
</div><!-- end of .box -->
<?php } ?><!--end: subscribe-->


<!-- ------------------------ Dynamic Widgets ---------------------- -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Full Width Widget') ) : ?>
</div>
<?php endif; ?>
</div><!--end: widget-->


<div class="widget"><div class="box">
<?php 
/*
 $args = array (
	 'range' => 'weekly'		// 集計期間の設定（daily | weekly | monthly）
	 , 'limit' => 3		//表示数はmax5記事
	 , 'post_type' => 'post'		// 投稿のみ指定（固定ページを除外）
	 , 'title_length' => '35'		// タイトル文字数上限
	 , 'stats_comments' => '0'		// コメント数の表示有無（0 | 1）
	 , 'stats_views' => '0'		// 閲覧数の表示有無（0 | 1）
	 , 'stats_date' => '1'		// 日付の表示有無（0 | 1）
	 , 'thumbnail_width' => '45'		// 画像のwidth（px）
	 , 'thumbnail_height' => '45'		// 画像のheight（px）
	 , 'post_html' => '<li style="height:60px">{thumb} {title} {stats}</li>'		//表示されるhtmlの設定
);
if ( function_exists( 'wpp_get_mostpopular' ) ) { wpp_get_mostpopular( $args ); }
*/
?>
</div></div>

<!-- ------------------------ Left Widget -------------------------- -->
<div class="leftwidget">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Widget') ) : ?>
<h3><?php _e("Left Widget", 'themejunkie'); ?></h3>
<div class="box"><?php _e("message from Leftwidget", 'themejunkie'); ?></div>
<?php endif; ?>
</div><!--end: left widget-->


<!-- ----------------------- Right Widget ------------------------- -->
<div class="rightwidget">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Widget') ) { ?>
<h3><?php _e("Right Widget", 'themejunkie'); ?></h3>
<div class="box"><?php _e("message from rightwidget.", 'themejunkie'); ?></div>
<?php } ?>
</div><!--end: right widget-->

<div class="clear"></div>


</div><!--end: sidebar-->
