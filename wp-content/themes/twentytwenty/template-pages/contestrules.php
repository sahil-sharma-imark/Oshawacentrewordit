<?php /* Template Name: Contest Rules */  
get_header();
?>

    <section class="banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/oshwacentre/image/banner-bg.png) ;">
        <div class="container">
           <div class="banner-content">
            <div class="game-box">
                <div class="button-box">
                <a href="/">
                     <img src="<?php echo get_template_directory_uri(); ?>/oshwacentre/image/footer-logo-new.png" alt="" class="home-logo">
                     </a>
                     
                </div>
            </div>
          
           </div>
        </div>
    </section>
    
    
     <section class="play" id="howtoplay">
        <div class="container">
           <div class="play-content">
                <?php the_content(); ?>
            </div>
       </div>
    </section>
    
    
   
        
      


<?php get_footer(); ?>