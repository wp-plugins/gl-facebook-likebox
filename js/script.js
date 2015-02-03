/*
Plugin Name: GL Facebook Likebox
Plugin URI: http://simivar.net/plugins/gl-facebook-likebox/
Description: Adds a great-lookin' Facebook Likebox to Your site.
Author: Krystian 'Simivar' Marcisz
Author URI: http://www.simivar.net/
Version: 1.0.8
Text Domain: glfl
Domain Path: /lang/
*/

jQuery(document).ready(function($) {
	$("#facebook-right").hover(
	function(){
		$(this).css('z-index', 200 ).animate({ right: "0px" }, {queue:false, duration:"normal"} );
	},
	function(){
		$(this).animate({ right: "-243px", "z-index": "100" }, {queue:false, duration:"normal"} );
	});
	
	$("#facebook-left").hover(
	function(){
		$(this).css('z-index', 200 ).animate({ left: "0px" }, {queue:false, duration:"normal"} );
	},
	function(){
		$(this).animate({ left: "-243px", "z-index": "100" }, {queue:false, duration:"normal"} );
	});
	
});