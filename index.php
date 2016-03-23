<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
        <ul class="single-item">
                  <?php
                    $args = array(
                      'posts_per_page'   => 4,
                      'post_type' => 'slider', // enter custom post type
                      'orderby' => 'date',
                      'order' => 'ASC',
                    );
                        
                    $loop = new WP_Query( $args );
                    if( $loop->have_posts() ):
                    while( $loop->have_posts() ): $loop->the_post(); global $post;
                  $src = wp_get_attachment_image_src( get_post_thumbnail_id($id), array( 720,405 ), false, '' );
                
                ?>
                  

<li><header class="header " id="header" style="background-image:url(<?php echo $src[0];?>)"><!--header-start-->
    <div class="container">
        <h1 class="animated fadeInDown delay-07s"><?php echo get_the_title();?></h1>
        <p class="we-create animated fadeInUp delay-1s" style="color:#fff">
            <?php echo get_the_content();?>
        </p>
            <a class="link animated fadeInUp delay-1s" href="#">Get Started</a>
    </div>
</header><!--header-end-->
</li>
<?php
  endwhile;
  endif;
?>
<?php endwhile;  ?> 
</ul>
<section class="main-section" id="service"><!--main-section-start-->
  <div class="container">
      <h2>Services</h2>
      <h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
          <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
              

                <?php while ( have_posts() ) : the_post(); ?>
        
                  <?php
                    $args = array(
                      'posts_per_page'   => 4,
                      'post_type' => 'service', // enter custom post type
                      'orderby' => 'date',
                      'order' => 'ASC',
                    );
                        
                    $loop = new WP_Query( $args );
                    if( $loop->have_posts() ):
                    while( $loop->have_posts() ): $loop->the_post(); global $post;
                ?>
                  <div class="service-list">
                    <div class="service-list-col1">
                      <i class="<?php echo the_field('service-icon');?>"></i>
                    </div>
                  <div class="service-list-col2">
                        <h3><?php echo get_the_title();?></h3>
                        <p><?php echo get_the_content();?></p>
                    </div>
                    </div>
                  <?php
                    endwhile;
                    endif;
                  ?>
                          
              <?php endwhile;  ?> 
                  
                
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
              <img src="<?php bloginfo('template_directory')?>/img/macbook-pro.png" alt="">
            </figure>
        
        </div>
  </div>
</section><!--main-section-end-->





<section class="main-section alabaster" id="blog"><!--main-section alabaster-start-->
  <div class="container">
     <h2>Our Latest News</h2>
     <br>
     <br>
    <div class="row">
       <?php while ( have_posts() ) : the_post(); ?>
        
            <?php
              $args = array(
                'posts_per_page'   => 4,
                'post_type' => 'blog', // enter custom post type
                'orderby' => 'date',
                'order' => 'DESC',
              );
                  
              $loop = new WP_Query( $args );
              if( $loop->have_posts() ):
              while( $loop->have_posts() ): $loop->the_post(); global $post;
          ?>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft featured-work">
                <?php 
                  $content = strip_tags( strip_shortcodes( get_the_content() ) );
                ?>

                <?php echo get_the_post_thumbnail($id);?>
                <h2><?php echo get_the_title();?></h2>
                <p class="padding-b"><?php echo $content;?></p>  
                 <a class="main-button" href="<?php echo get_post_permalink();?>">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            <?php
              endwhile;
              endif;
            ?>
                    
        <?php endwhile;  ?> 
  </div>
   <div class="row">
      <div class="col-md-12">
      <br>
      <br>
     <p class="text-center"><a class="link animated fadeInUp delay-1s" href="<?php echo get_page_link(33); ?>">More News</a></p>
     </div>
    </div>
</section><!--main-section alabaster-end-->


<section class="main-section paddind" id="gallery"><!--main-section-start-->
  <div class="container">
      <h2>Gallery</h2>
      <h6>Fresh portfolio of designs that will keep you wanting more.</h6>
  
        
  </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
      <?php while ( have_posts() ) : the_post(); ?>
        
            <?php
              $args = array(
                'posts_per_page'   => 8,
                'post_type' => 'portfolio', // enter custom post type
                'orderby' => 'date',
                'order' => 'DESC',
              );
                  
              $loop = new WP_Query( $args );
              if( $loop->have_posts() ):
              while( $loop->have_posts() ): $loop->the_post(); global $post;
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
                    
        <?php endwhile; // end of the loop. ?>  
             
    </div>
      <br>
      <br>
     <p class="text-center"><a class="link animated fadeInUp delay-1s" href="<?php echo get_page_link(22); ?>">More Galleries</a></p>
  
</section><!--main-section-end-->


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
    <div class="c-logo-part"><!--c-logo-part-start-->
      <div class="container">
        <h2 style="color:#fff">Our Clients</h2>
        <br>
        <br>

          <ul>
             <?php while ( have_posts() ) : the_post(); ?>
        
            <?php
              $args = array(
                'posts_per_page'   => 1000,
                'post_type' => 'client', // enter custom post type
                'orderby' => 'date',
                'order' => 'DESC',
              );
                  
              $loop = new WP_Query( $args );
              if( $loop->have_posts() ):
              while( $loop->have_posts() ): $loop->the_post(); global $post;
          ?>
              <li><a href="#"><?php echo get_the_post_thumbnail($id);?></a></li>
            <?php
              endwhile;
              endif;
            ?>
                    
        <?php endwhile; ?>  
          </ul>
      </div>
    </div><!--c-logo-part-end-->
</section><!--main-section client-part-end-->

<section class="main-section team" id="team"><!--main-section team-start-->
  <div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
          <?php while ( have_posts() ) : the_post(); ?>
        
            <?php
              $args = array(
                'posts_per_page'   => 8,
                'post_type' => 'team', // enter custom post type
                'orderby' => 'date',
                'order' => 'DESC',
              );
                  
              $loop = new WP_Query( $args );
              if( $loop->have_posts() ):
              while( $loop->have_posts() ): $loop->the_post(); global $post;
          ?>
               <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                   <?php echo get_the_post_thumbnail($id);?>
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s"><?php echo get_the_title();?></h3>
                <span class="wow fadeInDown delay-03s"><?php the_field('job-title');?></span>
                <p class="wow fadeInDown delay-03s"><?php echo get_the_content();?></p>
            </div>
            <?php
              endwhile;
              endif;
            ?>
                    
        <?php endwhile; ?>  
        </div>
    </div>
</section><!--main-section team-end-->

<div id="map"></div>
<?php while ( have_posts() ) : the_post(); 
                    $args = array(
                      'posts_per_page'   => 1,
                      'post_type' => 'map', // enter custom post type
                    );
                  
                      $loop = new WP_Query( $args );
                      if( $loop->have_posts() ):
                      while( $loop->have_posts() ): $loop->the_post(); global $post;
                  ?>
                      <p class="latitude"><?php echo the_field('latitude');?></p>
                      <p class="longitude"><?php echo the_field('longitude');?></p>

                  <?php
                    endwhile;
                    endif;
                  ?>
                          
                  <?php endwhile; ?>

<div class="container">
<section class="main-section contact" id="contact">
        <div class="row">
          <div class="col-lg-6 col-sm-7 wow fadeInLeft">
            <h3>CONTACT US</h3>
                 <?php while ( have_posts() ) : the_post(); 
                    $args = array(
                      'posts_per_page'   => 1,
                      'post_type' => 'contact', // enter custom post type
                    );
                  
                      $loop = new WP_Query( $args );
                      if( $loop->have_posts() ):
                      while( $loop->have_posts() ): $loop->the_post(); global $post;
                  ?>
                      
                <div class="contact-info-box address clearfix" style="margin:0;padding:35px 0">
                  <?php echo get_the_content();?>
                </div>
            </div>
          <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
              <h3>SOCIAL</h3>
              <ul class="social-link" style="margin:0">
                  
                      <li class="facebook"><a href="<?php echo the_field('facebook-url');?>"><i class="fa-facebook"></i></a></li>
                      <li class="twitter"><a href="<?php echo the_field('twitter-url');?>"><i class="fa-twitter"></i></a></li>
                      <li class="gplus"><a href="<?php echo the_field('google-plus-url');?>"><i class="fa-google-plus"></i></a></li>
                      <li class="instagram"><a href="<?php echo the_field('instagram-url');?>"><i class="fa-instagram"></i></a></li>                       
                      <li class="pinterest"><a href="<?php echo the_field('pinterest-url');?>"><i class="fa-pinterest"></i></a></li> 
                      <li class="youtube"><a href="<?php echo the_field('youtube-url');?>"> <i class="fa fa-youtube-square"></i></a></li>
                  <?php
                    endwhile;
                    endif;
                  ?>
                          
                  <?php endwhile; ?>
                </ul>
            </div>
        </div>
</section>
</div>




<?php get_footer(); ?>
