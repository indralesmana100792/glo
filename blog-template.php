<?php
/*
 * Template Name: Blog Template
 * Description: Page template to display portfolio custom post types 
 * underneath the page content
 */

get_header(); ?>
	<section class="main-section alabaster" id="blog"><!--main-section alabaster-start-->
  <div class="container">
    <div class="row">
       <?php while ( have_posts() ) : the_post(); ?>
        
            <?php
              $args = array(
                'posts_per_page' => 1000,
                'post_type' => 'blog', // enter custom post type
                'orderby' => 'date',
                'order' => 'DESC',
              );
                  
              $loop = new WP_Query( $args );
              if( $loop->have_posts() ):
              while( $loop->have_posts() ): $loop->the_post(); global $post;
          ?>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 wow fadeInLeft featured-work">
                <?php echo get_the_post_thumbnail($id);?>
                <h2><?php echo get_the_title();?></h2>
                <p class="padding-b"><?php echo get_the_content();?></p>  
                 <a class="main-button" href="<?php echo get_post_permalink();;?>">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            <?php
              endwhile;
              endif;
            ?>
                    
        <?php endwhile;  ?> 
  
  </div>
</section><!--main-section alabaster-end-->


<?php get_footer(); ?>