<?php /* Template Name: Thank You */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/oshwacentre/mycss/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/oshwacentre/mycss/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/oshwacentre/mycss/style.css">
    <title>Oshawa Centre</title>
</head>
<body>
    <section class="banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/oshwacentre/image/banner-bg.png) ;">
        <div class="container">
           <div class="banner-content">
            <div class="game-box">
                <div class="button-box">
                    <table class="table">
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
                    </table>
                </div>
            </div>
         
           </div>
        </div>
    </section>
    <section class="enter-contest">
       <div class="container">
        <div class="banner-content">
        <h2>Thank You</h2>
        <?php echo do_shortcode('[contact-form-7 id="17" title="Thank You"]'); ?>
        </div>
       </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-box ">  
                <img src="<?php echo get_template_directory_uri(); ?>/oshwacentre/image/footer-logo.png" alt="">
                <div class="footer-detail">
                    <h3>Contact Us</h3>
                    <a href="mailto:support@theggmediagroup.com">support@theggmediagroup.com</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/oshwacentre/myjs/script.js"></script>
</body>
</html>

