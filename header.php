<!DOCTYPE html>
<html lang="sv">
<head>
<title><?php wp_title(''); echo(' | '); bloginfo('title'); ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1">
<link rel="shortcut icon" href="/favicon.ico"/>
<script async src="https://use.fontawesome.com/8319c1b28d.js"></script>
<link async href="https://fonts.googleapis.com/css?family=Raleway:400|Open+Sans:400,500|Droid+Sans+Mono" rel="stylesheet" />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="banner-content">
		<span class="masthead">William Nyström</span>
		<nav><?php wp_nav_menu(); ?></nav>
		</div>
</header>