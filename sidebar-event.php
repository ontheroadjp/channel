<div id="sidebar">

<div class="widget">

<!-- ------------------------ Dynamic Widgets ---------------------- -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Full Width Widget') ) : ?>
</div>
<?php endif; ?>
</div><!--end: widget-->

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
