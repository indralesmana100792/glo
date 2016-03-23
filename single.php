<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
	    <div class="row">
	        <?php while ( have_posts() ) : the_post(); ?>
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft featured-work">
	                <?php echo get_the_post_thumbnail($id);?>
	                <h2><?php echo get_the_title();?></h2>
	                <p class="padding-b"><?php echo get_the_content();?></p>  
	                <p>By <a href="#"><?php echo get_the_author();?></a></p>
			        <p><?php echo get_the_date();?></p>
	             </div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</section><!--main-section alabaster-end-->

	<nav class="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
					</nav><!-- .nav-single -->
		

<?php get_footer(); ?>