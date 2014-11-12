<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <span class="entry-date"><?php echo get_the_date(); ?></span>
        <span class="set-category"><?php echo the_category(', '); ?> </span>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?> </a>
         <?php the_excerpt(); ?> 
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'starter-theme' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">

        <?php the_tags( '<div class="post-tags">' . __( 'Filed Under: ', 'starter-theme' ) , ', ', '</div>' ); ?>

        <!-- <div class="comments-link">
            <?php comments_popup_link( 
                 __( 'Leave a comment', 'starter-theme' ), 
                 __( '1 comment', 'starter-theme' ), 
                 __( '% comments', 'starter-theme' ) ); 
            ?>
        </div> -->
    </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->