<?php
/**
 * Template Name: About Page
 *
 * A custom page template for the about page. 
 *
 * @package Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="aboutPage clearfix">
			<div class = "box box1"><?php the_content();?></div>
			<?php the_post_thumbnail('medium')?>

			<?php 
				$image = get_field('about_image');
			?>
				
					<img class="img2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			
			<div class="box box2"><p><?php the_field('about_the_company'); ?></p></div>
			

		</div>


    <?php endwhile; // end of the loop. ?>

    <!-- Everything in here is the same as the default template shown above -->

</section><!-- #primary -->


<?php get_footer(); ?>
