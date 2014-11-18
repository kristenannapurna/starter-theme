<?php
/**
 * Template Name: Home Page
 *
 * A custom page template for the about page. 
 *
 * @package Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">
 <a class="clearfix" href="/thisisperfect/portfolio">
 	<div class="galleryWall clearfix">
 		<div class="grid-sizer"></div>
 		<div class="gutter-sizer"></div>
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio1.jpg" alt="">
		<img class="galleryItem horizontal" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio11.jpeg" alt="">
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio3.jpg" alt="">
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio4.jpg" alt="">
		<img class="galleryItem horizontal" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio8.jpg" alt="">
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio6.jpg" alt="">
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio7.jpg" alt="">
		<img class="galleryItem horizontal" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio9.jpeg" alt="">
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio10.jpg" alt="">
		<img class="galleryItem horizontal" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio5.png" alt="">
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio14.png" alt="">
		<img class="galleryItem vertical" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio2.jpg" alt="">
		<img class="galleryItem horizontal" src="<?php bloginfo('template_directory') ?>/assets/images/portfolio13.png" alt="">

	</div> 
</a>

	<?php  ?>

    <!-- Everything in here is the same as the default template shown above -->

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
