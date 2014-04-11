<?php 
//Make sure the file isn't accessed directly.
	defined('IN_PLUCK') or exit('Access denied!');
?><!DOCTYPE html >
<html lang='<?php echo LANG; ?>'>
<head>
  <meta name="HandheldFriendly" content="true"/><!--Blackberry Column View-->
    <meta name="viewport" content="initial-scale=1.0"/><!--iPod-->
    <meta name="viewport" content="width=device-width"/><!--android-->
	<?php theme_meta(true); ?>
</head>

<body>
<div id="header" class='clearfix'>
	<h1 title="<?php theme_sitetitle(); ?>"><?php theme_sitetitle(); ?></h1>
	<?php theme_menu('ul', 'li', 'active', 1); ?>
</div>
			
<div id="container">

	<div id="content">
		<h2 title="<?php theme_pagetitle(); ?>"><?php theme_pagetitle(); ?></h2>
		<?php theme_content(); ?>
		<?php theme_area('main'); ?>
	</div>
	<div id="footer">
		<?php theme_area('footer'); ?>
		<a href="<?php echo SITE_URL; ?>/login.php">admin</a> | powered by <a href="http://www.pluck-cms.org">pluck</a> | <a href="http://www.arvixe.com" target="_blank">Hosted By Arvixe</a>
	</div>
</div>
</body>
</html>
