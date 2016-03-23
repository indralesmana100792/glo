<?php
/*
 * Template Name: About Template
 * Description: Page template to display portfolio custom post types 
 * underneath the page content
 */

get_header(); ?>
	<div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>About Us</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
     <!-- Start Content -->
    <div id="content">
      <div class="container">
      		<div class="page-content">
      			<?php
      				$id=50; 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content; 
      			?>

      			<!-- Divider -->
          		<div class="hr1" style="margin-bottom:50px;"></div>

	      		<!-- Classic Heading -->
	          	<h4 class="classic-title"><span>Our Creative Team</span></h4>

	          	<!-- Start Team Members -->
	          	<div class="row">

	          		<?php while ( have_posts() ) : the_post(); ?>
		     
		        <?php
		          $args = array(
		            'post_type' => 'team', // enter custom post type
		            'orderby' => 'date',
		            'order' => 'DESC',
		          );
		              
		          $loop = new WP_Query( $args );
		          if( $loop->have_posts() ):
		          while( $loop->have_posts() ): $loop->the_post(); global $post;
		     	?>
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="team-member">
		                <!-- Memebr Photo, Name & Position -->
		                <div class="member-photo">
		                   	<?php echo get_the_post_thumbnail($id);?>
		                	<div class="member-name"><?php echo get_the_title();?> <span>Developer</span></div>
		                </div>
		                <!-- Memebr Words -->
		                <div class="member-info">
		                	<p><?php echo get_the_content();?></p>
		                </div>
		                <!-- Memebr Social Links -->
		                <!--<div class="member-socail">
		                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
		                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
		                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
		                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
		                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
		                </div>-->
		              </div>
		            </div>
		            <?php
			          endwhile;
			          endif;
			        ?>
		                
		    		<?php endwhile; // end of the loop. ?>  

	          	</div>
	         	<!-- End Team Members -->

	         	<!-- Divider -->
          		<div class="hr1" style="margin-bottom:50px;"></div>

          		<!-- Start Clients Carousel -->
          		<div class="our-clients">

		            <!-- Classic Heading -->
		            <h4 class="classic-title"><span>Our Happy Clients</span></h4>
		            <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">
		            	<?php while ( have_posts() ) : the_post(); ?>
		     
				        <?php
				          $args = array(
				            'post_type' => 'client', // enter custom post type
				            'orderby' => 'date',
				            'order' => 'DESC',
				          );
				              
				          $loop = new WP_Query( $args );
				          if( $loop->have_posts() ):
				          while( $loop->have_posts() ): $loop->the_post(); global $post;
				     	?>

				     	<div class="client-item item">
			                <a href="#"><?php echo get_the_post_thumbnail($id);?></a>
			            </div>
				     		
				        <?php
				          endwhile;
				          endif;
				        ?>
				                
				    <?php endwhile; // end of the loop. ?>  

			        </div>
		        </div>		

      		</div>
      </div>
    </div>
    <!-- End Content -->


<?php get_footer(); ?>