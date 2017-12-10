<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	
	<div id="content">
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="carousel">
			</div>
						
			<div class="entry">
				
				<?php the_content(); ?>
												
			</div>
			
		</div>
		
		<?php endwhile; ?>
				
	<?php else : ?>
		
		<?php get_template_part('inc/gone'); ?>
		
	<?php endif; ?>
	
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>