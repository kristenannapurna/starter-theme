<?php
/**
 * Template Name: Contact Page
 *
 * A custom page template for the about page. 
 *
 * @package Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

	 <?php while ( have_posts() ) : the_post(); ?>
	<div class="contactForm clearfix">
		<section id="form" <?php post_class(); ?>>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
		</section><!-- #post-<?php the_ID(); ?> -->

		<section class="contactImage">
			<?php the_post_thumbnail('full'); ?>
		</section>
		
	</div>


    <?php endwhile; // end of the loop. ?>


</section><!-- #primary -->


<?php get_footer(); ?>
