<?php /* Template Name: Home */  
get_header();
?>
 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js'></script>
<div class="modal complete-modal" id="myModal">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
        <h2 class="modal-title">Thank You</h2>
        </div>
        
        <div class="modal-body">
        We have received your entry for today. You can play again tomorrow
        </div>
        
       
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 
  </div> 


    <section class="banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/oshwacentre/image/banner-bg.png) ;">
        <div class="container">
           <div class="banner-content">
            <div class="game-box">
                <div class="button-box">
                   <!-- <table class="table">
                        <tr class="button-line">
                            <td> <button type="button" class="btn1">O</button></td>
                            <td> <button type="button" class="btn2">S</button></td>
                            <td> <button type="button" class="btn3">H</button></td>
                            <td> <button type="button" class="btn4">A</button></td>
                            <td> <button type="button" class="btn5">W</button></td>
                            <td> <button type="button" class="btn6">A</button></td>
                        
                        </tr>
                        <tr class="button-line">
                            <td> <button type="button" class="btn1">C</button></td>
                            <td> <button type="button" class="btn2">E</button></td>
                            <td> <button type="button" class="btn3">N</button></td>
                            <td> <button type="button" class="btn4">T</button></td>
                            <td> <button type="button" class="btn5">R</button></td>
                            <td> <button type="button" class="btn6">E</button></td>
                        </tr>
                        <tr class="button-line">
                            <td> <button type="button" class="btn1">W</button></td>
                            <td> <button type="button" class="btn2">O</button></td>
                            <td> <button type="button" class="btn3">R</button></td>
                            <td> <button type="button" class="btn4">D</button></td>
                            <td> <button type="button" class="btn5">I</button></td>
                            <td> <button type="button" class="btn6">T</button></td>
                        </tr>
                    </table>-->
                     <img src="<?php echo get_template_directory_uri(); ?>/oshwacentre/image/footer-logo-new.png" alt="" class="home-logo">
                </div>
            </div>
            <div class="banner-details">
                <p><?php  echo get_field( "logo_home_section_text" ); ?></p>
                <div class="play-btn">
                    <!-- <button class="banner-buttton"><a href="<?php //echo get_site_url(); ?>/game" >PLAY NOW</a></button> -->
                    <?php 
                     $gamecomplete = $_COOKIE['gamecomplete'];
                    //if(isset($gamecomplete)){

                     if($gamecomplete == 'complete'){
                            echo "<button type='button' class='banner-buttton' data-toggle='modal' data-target='#myModal'>PLAY NOW</button>";       
                        } else {
                         echo "<a href='#playgame' ><button class='banner-buttton'>PLAY NOW</button></a>";       
                        } 

                  //  }
                    ?>
                </div>
                <div class="play-rule">
                 <!-- <a href="<?php  //echo get_field( "how_to_play_button_link" ); ?>" class="banner-anchor"><?php  //echo get_field( "how_to_play_button_text" ); ?></a>-->
                   <a href="#howtoplay" class="banner-anchor"><?php  echo get_field( "how_to_play_button_text" ); ?></a>
                </div>
                <div class="play-rule">
                    <a href="<?php  echo get_field( "contest_rules_link" ); ?>" class="banner-anchor"><?php  echo get_field( "contest_rules_text" ); ?></a>
                </div>
    
            </div>
           </div>
        </div>
    </section>
    <section class="enter-contest">
       <div class="container">
        <div class="banner-content" id="playgame">
            <h2>Enter Contest</h2>
        
              
              <?php echo do_shortcode('[contact-form-7 id="16" title="Contact form 1"]'); ?>
        </div>
       </div>
    </section>
    <section class="play" id="howtoplay">
        <div class="container">
            <div class="play-content">
                <div class="head"><h2>How To Play</h2>
                    <p>GAME INSTRUCTIONS</p></div>
                    
                    <?php  echo get_field( "game_instructions" ); ?>
              
            </div>
           
            <div class="play-card">
               
                    
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 mt-5 ">
                            <div class="card-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/oshwacentre/image/card-img-1.png" alt="">
                                <div class="card-body">
                                  <p class="card-text">The letter S is in the word and in the correct spot.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4  mt-5">
                            <div class="card-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/oshwacentre/image/card-img-2.png" alt="">
                                <div class="card-body">
                                  <p class="card-text">The letter E is in the word but in the wrong spot.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-sm-4  col-md-4 mt-5 ">
                            <div class="card-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/oshwacentre/image/card-img-3.png" alt="">
                                <div class="card-body">
                                  <p class="card-text">The letter Y is not in the word in any spot.</p>
                                </div>
                              </div>
                        </div>
        
                    </div>
                    
                  
            </div>
        </div>
    </section>
<?php get_footer(); ?>

<script>
/*     function checkCookie() {
  var gamecomplete = getCookie("gamecomplete");
  // checking whether user is null or not
  if (gamecomplete == "complete") {
    //if user is not null then alert
    alert("Already Played" + gamecomplete);
  }
  else {
     user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}

checkCookie(); */
</script>