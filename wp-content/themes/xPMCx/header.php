<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
	<head>
		
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>
		
		<div class="wrap">
			
			<div class="header">
				<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
			
			<div class="nav">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'header_navigation',
					'container' => false,
					'menu_class' => 'nav',
				));
			?>
			</div>