<?php
/*
 * Template Name: Photobooth  Template
 */

get_header(); ?>
	<div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Photobooth</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Photobooth</li>
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
      				$id=63; 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content; 
      			?>

      		</div>
      </div>
    </div>
    <!-- End Content -->


<?php get_footer(); ?>