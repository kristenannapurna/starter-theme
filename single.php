<?php
/**
 * Single post template
 *
 * @package StarterTheme
 */

get_header(); ?>


    <?php while ( have_posts() ) : the_post(); ?>

    	<?php 
        $image = get_field('banner_image');
        $size = 'Banner';

        if($image) {
            echo wp_get_attachment_image($image, $size);
        }

         ?>
        
    	
<section id="primary" class="blog">
		<?php the_title('<h2>','</h2>') ?>
		<div class="blogdata clearfix"> 
			<h3><?php echo get_the_date(); ?><span>&#8226</span><?php the_category(', ') ?> </h3> 
		</div>

        <?php the_content() ?>

        <!-- You could also put some between-post links here (next post, previous post) -->

        <nav id="nav-below">
            <div class="nav-previous"><h3><?php previous_post_link( '%link',  __( '< Previous Post', 'starter-theme' ) ); ?></h3></div>
            <div class="nav-next"><h3><?php next_post_link( '%link',  __( 'Next Post >', 'starter-theme' ) ); ?></h3></div>
        </nav>

    <?php endwhile; // end of the loop. ?>


</section><!-- #primary -->

<?php get_footer(); ?>