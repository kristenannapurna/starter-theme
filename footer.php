<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>

</div><!-- #main -->

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
	<div class="wrapper clearfix">
		
	<div id="copyright" class="left">
			<!-- copyright goes here -->
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br>
			<a href="http://kristenspencer.ca" rel="nofollow" target="new">Design & Development by kristen spencer</a>
		</div>

		<div class="social-menu right">

			<?php 

// first let's get our nav menu using the regular wp_nav_menu() function with special parameters
			$cleanmenu = wp_nav_menu( array( 
			'theme_location' => 'footer', // we've registered a theme location in functions.php
 			'container' => false, // this is usually a div outside the menu ul, we don't need it
			'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>', // replacing the ul with nav
			'echo' => false, // don't display it just yet
			) );

// now we're ready to display, but when we do we'll replace the li elements with spans
			echo str_replace( 'li', 'span', $cleanmenu ); 


			?>

		</div>
	</div>


</footer><!-- #colophon -->

<?php wp_footer(); ?> 
</body>
</html>