<?php
/*
Plugin Name: GL Facebook Likebox
Plugin URI: http://simivar.net/plugins/gl-facebook-likebox/
Description: Adds a great-lookin' Facebook Likebox to Your site.
Author: Krystian 'Simivar' Marcisz
Author URI: http://www.simivar.net/
Version: 1.0.4
Text Domain: glfl
Domain Path: /lang/
*/

## Define author and plugin version
define('GLFL_VERSION', '1.0.3');
define('GLFL_AUTHOR', 'Krystian "Simivar" Marcisz');

if ( !function_exists( 'glfl_show' ) ) :
function glfl_show() {
	## These are our own options
	$options = get_option("glfl_show");
	$pageurl = $options['pageurl'];
	$colorscheme = $options['colorscheme'];
	$faces = $options['faces'];
	$stream = $options['stream'];
	$header = $options['header'];
	$position = $options['position'];
	$icon = $options['icon'];
	
	if (!is_array( $options ))
		$options = array(
			'pageurl' => 'Your page URL',
			'colorscheme' => 'light',
			'faces' => 'true',
			'stream' => 'false',
			'header' => 'false',
			'position' => 'right',
			'icon' => '0'
		);
		
	## Our 'widget' content
	echo '<div id="facebook-'.$position.'">';
	echo '<div id="facebook-icon" class="icon_'.$icon.'"></div>';
	echo '<div id="facebook-app">';
	echo '<iframe src="http://www.facebook.com/plugins/likebox.php?href='.$pageurl.'&amp;width=237&amp;colorscheme='.$colorscheme.'&amp;show_faces='.$faces.'&amp;stream='.$stream.'&amp;header='.$header.'&amp;height=475" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:237px; height:475px;" allowTransparency="true"></iframe>';
	echo '</div>';
}	
endif;

## Take the plugin dir
$plugin_directory = basename( dirname( __FILE__ ) );

## Take a URL to plugin dir
$pluginurl = WP_PLUGIN_URL . '/' . $plugin_directory . '/';

if ( !function_exists( 'glfl_jqueryinit' ) ) :
## Include our script
function glfl_jqueryinit() {
	global $pluginurl;
	wp_register_script( 'glfljs', $pluginurl . 'js/script.js', array( 'jquery' ) );
	wp_enqueue_script( 'glfljs' );
} 
endif;

if ( !function_exists( 'glfl_AdminStyles' ) ) :
## Register and include .css files 
## - admin page
function glfl_AdminStyles(){
	global $pluginurl;
	wp_register_style( "glfl-adminstyle",  $pluginurl . 'css/admin.css', null, '1.0.3'); 
	wp_enqueue_style( 'glfl-adminstyle' );
}
endif;

if ( !function_exists( 'glfl_styles' ) ) :
## - blog page
function glfl_styles(){
	global $pluginurl;
	wp_register_style( "glfl-styles",  $pluginurl . 'css/style.css', null, '1.0.3'); 
	wp_enqueue_style( 'glfl-styles' );
}
endif;

if ( !function_exists( 'glfl_optionsmenu' ) ) :
## Function for custom options menu
function glfl_optionsmenu() {
	## create new menu
	add_options_page('GL Facebook Likebox options', 'GL Facebook Likebox', 'manage_options', 'glfl', 'glfl_settings_page');
}
endif;

if ( !function_exists( 'glfl_settings_page' ) ) :
function glfl_settings_page() {
	## Get options
	$options = get_option("glfl_show");
	## options exist? if not set defaults
	if ( !is_array( $options ) )
		$options = array(
			'pageurl' => 'Your page URL',
			'colorscheme' => 'light',
			'faces' => 'true',
			'stream' => 'false',
			'header' => 'false',
			'position' => 'right',
			'icon' => '0'
		);
		
	## form posted?
	if (isset($_POST['Glflsubmit']))
	{
		$options['pageurl'] = strip_tags(stripslashes($_POST['pageurl']));
		$options['colorscheme'] = strip_tags(stripslashes($_POST['colorscheme']));
		$options['faces'] = strip_tags(stripslashes($_POST['faces']));
		$options['stream'] = strip_tags(stripslashes($_POST['stream']));
		$options['header'] = strip_tags(stripslashes($_POST['header']));
		$options['position'] = strip_tags(stripslashes($_POST['position']));
		update_option("glfl_show", $options);
	}
	
	if (isset($_POST['Glflsubmit-icon']))
	{
		$options['icon'] = $_POST['icon'];
		update_option("glfl_show", $options);
	}
	
	$pageurl = htmlspecialchars($options['pageurl'], ENT_QUOTES);
	$colorscheme = htmlspecialchars($options['colorscheme'], ENT_QUOTES);
	$faces = htmlspecialchars($options['faces'], ENT_QUOTES);
	$stream = htmlspecialchars($options['stream'], ENT_QUOTES);
	$header = htmlspecialchars($options['header'], ENT_QUOTES);
	$position = $options['position'];
	$icon = $options['icon'];
?>
<div class="wrap glfl">
		<div class="icon32" id="icon-options-general"><br></div>
		<h2><?php _e('GL Facebook Likebox options', 'glfl'); ?></h2>
		<div id="column-main">
			<?php include 'php/main.php'; ?>
		</div>
		<div id="column-side">
			<?php include 'php/side.php'; ?>
		</div>
</div>
<?php } 
endif;

## Add custom options menu and load admin stylesheet
add_action('admin_menu', 'glfl_optionsmenu');
add_action( 'admin_init', 'glfl_AdminStyles' );

if (!is_admin()){
	add_action('init', 'glfl_jqueryinit');
}

add_action('wp_footer', 'glfl_show');
add_action('init', 'glfl_styles');

// Load plugin translation 
global $plugin_directory;
load_plugin_textdomain('glfl', null, $plugin_directory . '/lang/');
?>