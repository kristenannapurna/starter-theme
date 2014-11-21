<?php
/**
 * Template Name: Portfolio Page

 *
 * @package Starter_Theme
 */

get_header(); ?>	

<section id="primary" role="main">

    <ul id="filters" class="sortPortfolio clearfix">
       <li><a href="#" data-filter="*">All</a></li>
       <li><a href="#" data-filter=".Interiors">Interiors</a></li>
       <li><a href="#" data-filter=".Props">Props</a></li>
    </ul>

    <section id="portfolio-grid">
   <!--  <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div> -->

    <?php if ( have_posts() ) : ?>
        <!-- there IS content for this query -->
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            
            <?php while(has_sub_field('portfolio_item')): ?>
                <div class="portfolio-item <?php the_sub_field('type'); ?>">
                <?php $image = get_sub_field('image'); ?>

                   <a rel="gallery" class="fancybox fancybox.image" data-fancybox-title = " <?php the_sub_field('credits'); ?> " href="<?php echo $image['url'] ?> ">
                    <img src="<?php echo $image['sizes']['post-thumbnail'] ?>" alt="<?php echo $image['title']?>">
                   </a> 
                 </div>
            <?php endwhile ?>

        <?php endwhile; ?>


    <?php else : ?>
        <!-- there IS NOT content for this query -->

        <article id="post-0" class="hentry post no-results not-found">
            <header class="entry-header">
                <h1><?php _e( "Oops!", "starter-theme" ); ?></h1>
            </header><!-- .entry-header -->

            <p><?php _e( "We can&#039;t find content for this page!", "starter-theme" ); ?></p>
        </article><!-- #post-0 -->

        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
        
    </section> <!-- .portfolio -->
</section><!-- #primary -->

<?php get_footer(); ?> 