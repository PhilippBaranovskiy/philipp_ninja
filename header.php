<!doctype html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>

	<meta charset="utf-8">
	<meta name="keywords" content="philipp phil baranovskiy ninja">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="viewport" content="initial-scale = 1, width = device-width">

	<link rel="icon" href="<?php bloginfo("template_directory"); ?>/fav16.png" sizes="16x16" type="image/png">
	<link rel="icon" href="<?php bloginfo("template_directory"); ?>/fav32.png" sizes="32x32" type="image/png">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/custom_css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css">

	<?php if (is_home()) : ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/custom_css/frontPage.css">
	<?php endif; ?>

	<script type="text/javascript">
		if (window.scrollY && window.scrollY == 0) {
			setTimeout(function() { window.scrollTo(0,1); }, 0);
		}
	</script>
	<?php wp_head(); ?>
</head>
<body class="container">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>