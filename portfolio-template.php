<?php
/*
 * Template Name: Portfolio Template
 * Description: Page template to display portfolio custom post types 
 * underneath the page content
 */

get_header(); ?>
	<section class="main-section paddind" id="gallery"><!--main-section-start-->
	  <div class="container">
	      <h2>Gallery</h2>
	      <h6>Fresh portfolio of designs that will keep you wanting more.</h6>
	      <div class="portfolioFilter">  
	        <ul class="Portfolio-nav wow fadeIn delay-02s">
	          <li><a href="#" data-filter="*" class="current" >All</a></li>
	            <li><a href="#" data-filter=".branding" >Branding</a></li>
	            <li><a href="#" data-filter=".webdesign" >Web design</a></li>
	            <li><a href="#" data-filter=".printdesign" >Print design</a></li>
	            <li><a href="#" data-filter=".photography" >Photography</a></li>
	        </ul>
	       </div> 
	        
	  </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
      <?php while ( have_posts() ) : the_post(); ?>
        
            <?php
              $args = array(
                'posts_per_page'   => 8,
                'post_type' => 'portfolio', 
                'orderby' => 'date',
                'order' => 'DESC',
              );

                  
              $loop = new WP_Query( $args );
              if( $loop->have_posts() ):
              while( $loop->have_posts() ): $loop->the_post(); global $post;
          	$taxs = get_post_taxonomies($post->ID);
			foreach ($taxs as $tax){
				echo $tax;
			}
          ?>
              <div class="Portfolio-box printdesign">
                  <a href="<?php echo get_post_permalink();?>"><?php echo get_the_post_thumbnail($id);?></a>
                  <h3><?php echo get_the_title();?></h3>
                  <p>Print Design</p>
              </div>
            <?php
              endwhile;
              endif;
            ?>
                    
        <?php endwhile;  ?>  
             
    </div>
</section>


<?php get_footer(); ?>