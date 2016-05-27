
<div class="clear"></div>

<!-- ----------------------- #Footer ----------------------- -->
<?php if (get_theme_mod('footer_widgets') == 'Yes') { ?>
<div id="footer">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget') ) : ?>
	<div class="left">
	<h3><?php _e("Footer Widget #1", 'themejunkie'); ?></h3>
	<div class="box"><?php _e("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper ultrices tortor quis sodales. Proin scelerisque porttitor tellus, vel dignissim tortor varius quis. Proin diam eros, lobortis sit amet viverra id, eleifend ut tellus. Vivamus sed lacus augue.", 'themejunkie'); ?></div>
	</div>

	<div class="left">
	<h3><?php _e("Footer Widget #2", 'themejunkie'); ?></h3>
	<div class="box"><?php _e("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper ultrices tortor quis sodales. Proin scelerisque porttitor tellus, vel dignissim tortor varius quis. Proin diam eros, lobortis sit amet viverra id, eleifend ut tellus. Vivamus sed lacus augue.", 'themejunkie'); ?></div>
	</div>

	<div class="left">
	<h3><?php _e("Footer Widget #3", 'themejunkie'); ?></h3>
	<div class="box"><?php _e("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper ultrices tortor quis sodales. Proin scelerisque porttitor tellus, vel dignissim tortor varius quis. Proin diam eros, lobortis sit amet viverra id, eleifend ut tellus. Vivamus sed lacus augue.", 'themejunkie'); ?></div>
	</div>
	<?php endif; ?>

<div class="clear"></div>
</div><!--end: footer-->
<?php } ?>

<div class="clear"></div>

<!-- ----------------------- #Show Case --------------------- -->
<?php // include('include/show_case.php'); ?>
<div class="clear"></div>

<!-- ----------------------- #Bottom ------------------------ -->
<div id="bottom">
<div class="left">Copyright &copy; 2012 - 2014 <a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a> All rights reserved</div>
<div class="right">
<!-- Designed by <a href="http://www.theme-junkie.com/" target="_blank">Theme Junkie</a>.  -->
Powered by <a href="http://www.wordpress.org/" target="_blank">WordPress</a>.
</div>
<div class="clear"></div>
</div><!--end: bottom-->

</div><!--end: wrapper-->
<div class="clear"></div>

<!-- iTunes Affiliate -->
<script type='text/javascript'>var _merchantSettings=_merchantSettings || [];_merchantSettings.push(['AT', '10lKgz']);(function(){var autolink=document.createElement('script');autolink.type='text/javascript';autolink.async=true; autolink.src= ('https:' == document.location.protocol) ? 'https://autolinkmaker.itunes.apple.com/js/itunes_autolinkmaker.js' : 'http://autolinkmaker.itunes.apple.com/js/itunes_autolinkmaker.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(autolink, s);})();</script>

<!-- wp_footer() -->
<?php wp_footer(); ?>
</body></html>