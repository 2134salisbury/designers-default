<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="keywords" content="<?php the_tags('','',','); ?>" />
		<meta http-equiv="Pragma" content="no-cache" /> 
		<meta http-equiv="Expires" content="-1" /> 
		<meta http-equiv="Cache-Control" content="no-cache" /> 
		<meta http-equiv="Content-Language" content="en-us" />
	
		<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print" />
		<!--[if lte IE 6]><style type="text/css" media="all">@import "<?php bloginfo('stylesheet_directory'); ?>/ie6.css";</style><![endif]-->
		<!--[if gt IE 6]><style type="text/css" media="all">@import "<?php bloginfo('stylesheet_directory'); ?>/ie7.css";</style><![endif]-->
	
		<link rel="shortcut icon" href="/favicon.ico" />			
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php wp_head(); ?>

	</head>

	<body>

		<?php
		// Checks to see whether it needs a sidebar or not
		if ( !empty($withcomments) && !is_single() ) { ?>
			<div id="page" class="container_16 <?php bloginfo('text_direction'); ?>">
		<?php } else { // No sidebar ?>
			<div id="page" class="container_16">
		<?php } ?>

				<div id="header">
					<div id="headerimg">
						<div id="header_window">
							<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
							<div class="description"><?php bloginfo('description'); ?></div>
						</div>
					</div>
				</div>
			
				<hr />
