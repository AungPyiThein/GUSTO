<body <?php body_class(); ?>>
<nav id="site-navigation" class="main-navigation" role="navigation">
<?php
/* navigation menu */
	$args = [
		'themme-location' => 'main-menu'
	];
	wp_nav_menu($args);
?>

		<div id="header">
 <div id="headerimg">
   <h1>
    <a href="<?php echo get_option('home'); ?>">
       <?php bloginfo('name'); ?></a> : Team Header
   </h1>
     <div class="description">
       <?php bloginfo('description'); ?>
     </div>
  </div>
</div>
