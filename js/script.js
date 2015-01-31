/*
Plugin Name: GL Facebook Likebox
Plugin URI: http://simivar.net/plugins/gl-facebook-likebox/
Description: Adds a great-lookin' Facebook Likebox to Your site.
Author: Krystian 'Simivar' Marcisz
Author URI: http://www.simivar.net/
Version: 1.0.3
Text Domain: glfl
Domain Path: /lang/
*/


jQuery.noConflict();

var lastlen = 0;

jQuery(document).ready(function($) {
	$("#facebook-right").hover(
	function right(){
		$(this).animate({ right: "0" }, {queue:false, duration:"normal"} );
	},
	function right(){
		$(this).animate({ right: "-243" }, {queue:false, duration:"normal"} );
	});
	
	$("#facebook-left").hover(
	function(){
		$(this).animate({ left: "0" }, {queue:false, duration:"normal"} );
	},
	function(){
		$(this).animate({ left: "-243" }, {queue:false, duration:"normal"} );
	});
	
});