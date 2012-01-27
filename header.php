<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php 
				if (is_home()) { 
					echo bloginfo('name'); 
					echo ' | '; 
					echo bloginfo('description'); 
				} 
				else {
					echo wp_title();
					echo ' | ';
					echo bloginfo('name');
				}
			?>
		</title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1 class="site-title"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			</header>
	