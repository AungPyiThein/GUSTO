<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>COMX</title>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php //get_header(); ?>
		<?php get_header("team"); ?>
		<h1><?php the_title(); the_content(); ?></h1>
		<?php get_footer(); ?>
	</body>
</html>
