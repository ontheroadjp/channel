<?php
	$cat_now = get_the_category();
	$cat_now = $cat_now[0];
//	$parent_id = $cat_now->category_parent;

	$now_id = $cat_now->cat_ID;		// カテゴリID
	$now_name = $cat_now->cat_name; // カテゴリ名

if( $now_id == '18' ) {			// Mac
//	echo '<img src="http://dev.ontheroad.jp/wp-content/themes/channel/images/header_img/mac.jpg" /><br />';
} else if( $now_id == '72' ) {	// iOS
//	echo '<img src="http://dev.ontheroad.jp/wp-content/themes/channel/images/header_img/ios.jpg" /><br />';
} else if( $now_id == '4' ) {	// WordPress
//	echo '<img src="http://dev.ontheroad.jp/wp-content/themes/channel/images/header_img/wordpress.jpg" /><br />';
} else {　?>


<?php } ?>

<!-- dev_Archive_Top_Big_Banner_728x90 -->
<div id='div-gpt-ad-1355116612393-0' style='width:728px; height:90px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1355116612393-0'); });
</script>
</div>

