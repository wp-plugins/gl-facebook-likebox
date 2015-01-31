<!--
Plugin Name: GL Facebook Likebox
Plugin URI: http://simivar.net/plugins/gl-facebook-likebox/
Description: Adds a great-lookin' Facebook Likebox to Your site.
Author: Krystian 'Simivar' Marcisz
Author URI: http://www.simivar.net/
Version: 1.0.2
Text Domain: glfl
Domain Path: /lang/
-->

<h3><?php _e('Settings', 'glfl'); ?></h3>
	<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" enctype="application/x-www-form-urlencoded" id="frm-glflsettings">
	<table width="100%" border="0" class="options" cellspacing="0" cellpadding="0">
		<tr>
		  <td><label for="pageurl"><?php _e('Page URL', 'glfl');?></label></td>
		  <td><input type="text" id="pageurl" name="pageurl" value="<?php echo $pageurl ?>" /></td>
		  <td class="extra small"><?php _e('e.g. <i>http://www.facebook.com/pages/SelenaGomezcompl/147365415319232</i>', 'glfl'); ?></td>
		</tr>
		<tr>
		  <td width="25%"><label for="position"><?php _e('Position:', 'glfl');?></label></td>
		  <td width="40%"><input type="radio" id="position" name="position" <?php if($position == 'right') echo 'checked="checked"'; ?> value="right" /><?php _e('right', 'glfl'); ?>
					&nbsp;<input type="radio" id="position" name="position" <?php if($position == 'left') echo 'checked="checked"'; ?> value="left" /><?php _e('left', 'glfl'); ?></td>
		  <td class="extra small" width="35%"><?php _e('Position of our Facebook Likebox, default: right.', 'glfl'); ?></td>
		</tr>
		<tr>
		  <td width="25%"><label for="colorscheme"><?php _e('Color scheme:', 'glfl');?></label></td>
		  <td width="40%"><input type="radio" id="colorscheme" name="colorscheme" <?php if($colorscheme == 'light') echo 'checked="checked"'; ?> value="light" /><?php _e('light', 'glfl'); ?>
					&nbsp;<input type="radio" id="colorscheme" <?php if($colorscheme == 'dark') echo 'checked="checked"'; ?> name="colorscheme" value="dark" /><?php _e('dark', 'glfl'); ?></td>
		  <td class="extra small" width="35%"><?php _e('Choose color scheme! : )', 'glfl'); ?></td>
		</tr>
		<tr>
		  <td><label for="faces"><?php _e('Show faces:', 'glfl');?></label></td>
		  <td><input type="radio" id="faces" name="faces" <?php if($faces == 'true') echo 'checked="checked"'; ?> value="true" /><?php _e('yes', 'glfl'); ?>
					&nbsp;<input type="radio" id="faces" <?php if($faces == 'false') echo 'checked="checked"'; ?> name="faces" value="false" /><?php _e('no', 'glfl'); ?></td>
		  <td class="extra small"><?php _e('Have to display faces?', 'glfl'); ?></td>
		</tr>
		<tr>
		  <td><label for="stream"><?php _e('Show stream:', 'glfl');?></label></td>
		  <td><input type="radio" id="stream" name="stream" <?php if($stream == 'true') echo 'checked="checked"'; ?> value="true" /><?php _e('yes', 'glfl'); ?>
					&nbsp;<input type="radio" id="stream" <?php if($stream == 'false') echo 'checked="checked"'; ?> name="stream" value="false" /><?php _e('no', 'glfl'); ?></td>
		  <td class="extra small"><?php _e('Show stream [newest posts on facebook page]?', 'glfl'); ?></td>
		</tr>
		<tr>
		  <td><label for="header"><?php _e('Show header:', 'glfl');?></label></td>
		  <td><input type="radio" id="header" name="header" <?php if($header == 'true') echo 'checked="checked"'; ?> value="true" /><?php _e('yes', 'glfl'); ?>
					&nbsp;<input type="radio" id="header" <?php if($header == 'false') echo 'checked="checked"'; ?> name="header" value="false" /><?php _e('no', 'glfl'); ?></td>
		  <td class="extra small"><?php _e('Show the facebook header of Likebox?', 'glfl'); ?></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" id="Glflsubmit" name="Glflsubmit" class="button button-primary" value="<?php _e('Update settings', 'glfl'); ?>" /></td>
		</tr>
	</table>
	</form>
<h3><?php _e('Choose icon', 'glfl'); ?></h3>
	<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" enctype="application/x-www-form-urlencoded" id="frm-glflicon">
	<table width="100%" border="0" class="options" cellspacing="0" cellpadding="0">
		<tr>
			<td><label for="icon">&nbsp;</label>
				<?php global $pluginurl; ?>
				<script type="text/javascript">
				//<![CDATA[
					jQuery.noConflict();
					
					function changeItem(url, place, divobj, id)
					{
						jQuery(".listitem").removeClass("activeItem");
						jQuery(divobj).addClass("activeItem");
						jQuery("#icon").attr("value", id);
					}
					
				//]]>
				</script>
				<div class="listitem <?php if($icon == '0') echo 'activeItem"'; ?>">
					<a href="javascript:void(0);" onclick="changeItem('<?php echo $pluginurl; ?>img/0.png', 3, this.parentNode, 0);" onmousedown="return false;">
						<img width="42" height="42" src="<?php echo $pluginurl; ?>img/0.png" style="background: none repeat scroll 0% 0% white;" alt="">
					</a>
				</div>
				<div class="listitem <?php if($icon == '1') echo 'activeItem"'; ?>">
					<a href="javascript:void(0);" onclick="changeItem('<?php echo $pluginurl; ?>img/1.png', 3, this.parentNode, 1);" onmousedown="return false;">
						<img width="42" height="42" src="<?php echo $pluginurl; ?>img/1.png" style="background: none repeat scroll 0% 0% white;" alt="">
					</a>
				</div>
				<div class="listitem <?php if($icon == '2') echo 'activeItem"'; ?>">
					<a href="javascript:void(0);" onclick="changeItem('<?php echo $pluginurl; ?>img/2.png', 3, this.parentNode, 2);" onmousedown="return false;">
						<img width="42" height="42" src="<?php echo $pluginurl; ?>img/2.png" style="background: none repeat scroll 0% 0% white;" alt="">
					</a>
				</div>
				<div class="listitem <?php if($icon == '3') echo 'activeItem"'; ?>">
					<a href="javascript:void(0);" onclick="changeItem('<?php echo $pluginurl; ?>img/3.png', 3, this.parentNode, 3);" onmousedown="return false;">
						<img width="42" height="42" src="<?php echo $pluginurl; ?>img/3.png" style="background: none repeat scroll 0% 0% white;" alt="">
					</a>
				</div>
				<div class="listitem <?php if($icon == '4') echo 'activeItem"'; ?>">
					<a href="javascript:void(0);" onclick="changeItem('<?php echo $pluginurl; ?>img/4.png', 3, this.parentNode, 4);" onmousedown="return false;">
						<img width="42" height="42" src="<?php echo $pluginurl; ?>img/4.png" style="background: none repeat scroll 0% 0% white;" alt="">
					</a>
				</div>
				<div class="listitem <?php if($icon == '5') echo 'activeItem"'; ?>">
					<a href="javascript:void(0);" onclick="changeItem('<?php echo $pluginurl; ?>img/5.png', 3, this.parentNode, 5);" onmousedown="return false;">
						<img width="42" height="42" src="<?php echo $pluginurl; ?>img/5.png" style="background: none repeat scroll 0% 0% white;" alt="">
					</a>
				</div>
				<div class="listitem <?php if($icon == '6') echo 'activeItem"'; ?>">
					<a href="javascript:void(0);" onclick="changeItem('<?php echo $pluginurl; ?>img/6.png', 3, this.parentNode, 6);" onmousedown="return false;">
						<img width="42" height="42" src="<?php echo $pluginurl; ?>img/6.png" style="background: none repeat scroll 0% 0% white;" alt="">
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="3">
			<input type="hidden" value="<?php echo $icon; ?>" id="icon" name="icon">
			<input type="submit" id="Glflsubmit-icon" name="Glflsubmit-icon" class="button button-primary" value="<?php _e('Change icon', 'glfl'); ?>" /></td>
		</tr>
	</table>
	</form>