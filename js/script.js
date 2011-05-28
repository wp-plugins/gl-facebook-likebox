/*
Plugin Name: GL Facebook Likebox
Plugin URI: http://selenagomez.com.pl/simi/gl-facebook-likebox/
Description: Adds a great-lookin' Facebook Likebox to Your site.
Version: 1.0.1
Author: Krystian 'Simivar' Marcisz
Author URI: http://www.simivar.net/
License: GPL2
*/

var lastlen = 0;

$(document).ready(function() {
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