<?php
/*
NOTE: this file requires WordPress 3.1+ to function
*/
$settings = 'theme_mods_'.get_current_theme(); // do not change!

$defaults = array( // define our defaults
		'subscribe' => 'Yes',
		'feedburner_id' => 'themejunkie',
		'flickr' => 'Yes',
		'track' => 'Yes',
		'footer_widgets' => 'Yes',
		'showad468x60' => 'Yes',
		'showad300x250' => 'Yes'
		 // <-- no comma after the last option
);

//	push the defaults to the options database,
//	if options don't yet exist there.
add_option($settings, $defaults, '', 'yes');

/*
///////////////////////////////////////////////
This section hooks the proper functions
to the proper actions in WordPress
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
*/
//	this function registers our settings in the db
add_action('admin_init', 'register_theme_settings');
function register_theme_settings() {
	global $settings;
	register_setting($settings, $settings);
}
//	this function adds the settings page to the Appearance tab
add_action('admin_menu', 'add_theme_options_menu');
function add_theme_options_menu() {
	add_submenu_page('themes.php', __('Channel Theme Options', 'themejunkie'), __('Channel Theme Options', 'themejunkie'), 8, 'theme-options', 'theme_settings_admin');
}

function theme_settings_admin() { ?>
<?php theme_options_css_js(); ?>

<div class="wrap">
  <?php
	global $settings, $defaults;
	if(get_theme_mod('reset')) {
		echo '<div class="updated fade" id="message"><p>'.__('Theme Options', 'themejunkie').' <strong>'.__('Reset to defaults', 'themejunkie').'</strong></p></div>';
		update_option($settings, $defaults);
	} elseif($_REQUEST['updated'] == 'true') {
		echo '<div class="updated fade" id="message"><p>'.__('Theme Options', 'themejunkie').' <strong>'.__('Saved', 'themejunkie').'</strong></p></div>';
	}
	screen_icon('options-general');
?>
  <h2><?php echo get_current_theme() . ' '; _e('Theme Options', 'themejunkie'); ?></h2>
  <form method="post" action="options.php">
    <?php settings_fields($settings); // important! ?>
    <?php // begin first column ?>
    <div class="metabox-holder">
      <div class="postbox">
        <h3>
          <?php _e("Theme Junkie Dashboard", 'themejunkie'); ?>
        </h3>
        <div class="inside">
          <p>Channel theme is proudly made by <a rel="nofollow" href="http://www.theme-junkie.com/"><?php _e("Theme Junkie", 'themejunkie'); ?></a>.</p>
          </p>
          <p style="border-top: 1px solid #ccc; padding-top: 10px;">
          <a href="http://www.theme-junkie.com/demo/channel/" target="_blank"><?php _e("Live Demo", 'themejunkie'); ?></a> // <a href="http://www.theme-junkie.com/download/channel.zip"><?php _e("Get Latest Version", 'themejunkie'); ?></a> // <a rel="nofollow" href="http://www.theme-junkie.com/contact/" target="_blank"><?php _e("Contact", 'themejunkie'); ?></a>
        </div>
      </div>
      <div class="postbox">
        <h3>
          <?php _e("Flickr", 'themejunkie'); ?>
        </h3>
        <div class="inside">
          <p>
            <?php _e("Display Flickr photo on the sidebar?", 'themejunkie'); ?>
            <br />
            <select name="<?php echo $settings; ?>[flickr]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('flickr')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('flickr')); ?>>No</option>
            </select>
          </p>
        </div>
      </div>
      <div class="postbox">
        <h3>
          <?php _e("Footer Widgets", 'themejunkie'); ?>
        </h3>
        <div class="inside">
          <p>
            <?php _e("Display Widgets on the Footer?", 'themejunkie'); ?>
            <br />
            <select name="<?php echo $settings; ?>[footer_widgets]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('footer_widgets')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('footer_widgets')); ?>>No</option>
            </select>
          </p>
        </div>
      </div>
      <div class="postbox">
        <h3>
          <?php _e("Analytics/Stat Tracking Code", 'themejunkie'); ?>
        </h3>
        <div class="inside">
          <p>
            <?php _e("Include analytics/stat tracking code?", 'themejunkie'); ?>
            <br />
            <select name="<?php echo $settings; ?>[track]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('track')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('track')); ?>>No</option>
            </select>
            <br />
            <?php _e("Enter your analytics/stat tracking code", 'themejunkie'); ?>
            : <br />
            <textarea name="<?php echo $settings; ?>[track_code]" cols=35 rows=5><?php echo stripslashes(get_theme_mod('track_code')); ?></textarea>
          </p>
        </div>
      </div>
      <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Settings', 'themejunkie') ?>" />
        <input type="submit" class="button-highlighted" name="<?php echo $settings; ?>[reset]" value="<?php _e('Reset Settings', 'themejunkie'); ?>" />
      </p>
    </div>
    <?php // end first column ?>
    <?php // begin second column ?>
    <div class="metabox-holder">
      <div class="postbox">
        <h3>
          <?php _e("Subscribe", 'themejunkie'); ?>
        </h3>
        <div class="inside">
          <p>
            <?php _e("Display this block on the header?", 'themejunkie'); ?>
            <br />
            <select name="<?php echo $settings; ?>[subscribe]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('subscribe')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('subscribe')); ?>>No</option>
            </select>
            <br/>
            <?php _e("Your Feedburner ID", 'themejunkie'); ?>
            :<br />
            <input type="text" name="<?php echo $settings; ?>[feedburner_id]" value="<?php echo get_theme_mod('feedburner_id'); ?>" size="35" />
          </p>
        </div>
      </div>
      <div class="postbox">
        <h3>
          <?php _e("468x60 Ad Banner", 'themejunkie'); ?>
          -
          <?php _e("Header", 'themejunkie'); ?>
        </h3>
        <div class="inside">
          <p>
            <?php _e("Display this block on the header?", 'themejunkie'); ?>
            <br />
            <select name="<?php echo $settings; ?>[showad468x60]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showad468x60')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showad468x60')); ?>>No</option>
            </select>
          </p>
          <p>
            <?php _e("Enter your ad code", 'themejunkie'); ?>
            :<br />
            <textarea name="<?php echo $settings; ?>[ad468x60]" cols=35 rows=5><?php echo stripslashes(get_theme_mod('ad468x60')); ?></textarea>
          </p>
        </div>
      </div>
      <div class="postbox">
        <h3>
          <?php _e("300x250 Ad Banner", 'themejunkie'); ?>
          -
          <?php _e("Sidebar", 'themejunkie'); ?>
        </h3>
        <div class="inside">
          <p>
            <?php _e("Display this block on the sidebar?", 'themejunkie'); ?>
            <br />
            <select name="<?php echo $settings; ?>[showad300x250]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showad300x250')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showad300x250')); ?>>No</option>
            </select>
          </p>
          <p>
            <?php _e("Enter your ad code", 'themejunkie'); ?>
            :<br />
            <textarea name="<?php echo $settings; ?>[ad300x250]" cols=35 rows=5><?php echo stripslashes(get_theme_mod('ad300x250')); ?></textarea>
          </p>
        </div>
      </div>
    </div>
    <!--end second column-->
  </form>
</div>
<?php }

// add CSS and JS if necessary
function theme_options_css_js() {
echo <<<CSS

<style type="text/css">
	.metabox-holder { 
		width: 350px; float: left;
		margin: 0; padding: 0 10px 0 0;
	}
	.metabox-holder .postbox .inside {
		padding: 0 10px;
	}
	input, textarea, select {
		margin: 5px 0 5px 0;
		padding: 1px;
	}
</style>

CSS;
echo <<<JS

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".fade").fadeIn(1000).fadeTo(1000, 1).fadeOut(1000);
});
</script>

JS;
}
?>
