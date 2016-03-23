<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
<footer class="footer">
    <div class="container">
        <?php
          $id=69; 
          $post = get_post($id); 
          $content = apply_filters('the_content', $post->post_content);
          $thumb = get_the_post_thumbnail( $post, 'post-thumbnail' );
          $fb = get_post_custom_values($key = 'facebook');
          $ig = get_post_custom_values($key = 'instgram');
              //echo $content;
        ?>
        <!--<div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>-->
        <span class="copyright">Copyright © 2015 | <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</span>
    </div>
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Knight
    -->
</footer>

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/css/slick.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.isotope.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/wow.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/classie.js"></script>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        $('.single-item').slick();
        
    });
</script>

  <script>
    function initMap() {
    var latitude = parseInt($('.latitude').text());
    var longitude = parseInt($('.longitude').text());
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat:  latitude, lng:  longitude},
      zoom: 8
    });
  }
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
 
  </script>


<script type="text/javascript">
  $(window).load(function(){
    
    $('.main-nav li a').bind('click',function(event){
      var $anchor = $(this);
      
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 102
      }, 1500,'easeInOutExpo');
      /*
      if you don't want to use the easing effects:
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1000);
      */
      event.preventDefault();
    });
  })
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
      
            filter: selector,
         });
         return false;
    });
  
});

</script>
</body>
</html>

   