<?php /* Template Name: Game */
get_header('game');
?>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js'></script>
<?php
$gamecomplete = $_COOKIE['gamecomplete'];
if ($gamecomplete == 'complete') {
?>


     <div class="modal complete-modal" id="myModala">
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
    <button type="button" class="btn" data-dismiss="modal">X</button>
</div>
</div>
</div>
</div> 
</div> 
  
<script type="text/javascript">
jQuery('#myModala').modal('show');
    $(".modal").on("hidden.bs.modal", function () {
    window.location = "/";
}); 
</script>

<?php } ?>

<style>
    .head h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .play-card .card-box {
        margin-bottom: 20px;
    }

    .play-card .card-box .card-body {
        padding: 0px;
    }

    .complete-modal .btn {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 0;
        line-height: 1;
    }

    .play-content ul {
        padding-left: 15px;
        margin-bottom: 20px;
        list-style: none;
    }

    .play-content ul li {
        position: relative;
    }

    .play-content ul li::before {
        content: "";
        height: 5px;
        width: 5px;
        background-color: #000;
        position: absolute;
        left: -15px;
        top: 10px;
    }

    .play-card .card-box figure {
    margin-bottom: 5px;
    max-width: 350px;
    width: 100%;
}

.play-card .card-box figure img {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    height: 100%;
    width: 100%;
    object-fit: contain;
}

    #canvasHolder .banner-buttton {
        position: absolute;
        left: 0px;
        top: 20px;
        z-index: 10;
        background-color: #000;
        color: #fff;
        border: 4px solid #000;
        border-radius: 4px;
        font-size: 20px;
        line-height: 1;
        padding: 2px 5px;
    }

    #canvasHolder .banner-buttton .game-icon {
        height: 24px;
        width: 24px;
    }

    @media only screen and (max-width:1366px) {
        #canvasHolder .banner-buttton {
            left: 20px;
        }
    }
</style>
<div class="modal complete-modal" id="myhelpModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn" data-dismiss="modal">X</button>
                    <div class="play-content">
                        <div class="head">
                            <h2>How To Play</h2>
                            <p>GAME INSTRUCTIONS</p>
                        </div>
                        <ul>
                            <li> You have 6 tries to guess the WordIt</li>
                            <li> Each guess must be a 5 letter word </li>
                            <li> After each guess, the colour of the tiles will change to show you how close you are to guessing the word</li>
                        </ul>
                    </div>

                    <div class="play-card">


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <figure>
                                        <img src="/wp-content/themes/twentytwenty/oshwacentre/image/card-img-1.png" alt="image">
                                    </figure>
                                    <div class="card-body">
                                        <p class="card-text">The letter S is in the word and in the correct spot.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <figure>
                                        <img src="/wp-content/themes/twentytwenty/oshwacentre/image/card-img-2.png" alt="image">
                                    </figure>
                                    <div class="card-body">
                                        <p class="card-text">The letter E is in the word but in the wrong spot.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <figure>
                                        <img src="/wp-content/themes/twentytwenty/oshwacentre/image/card-img-3.png" alt="image">
                                    </figure>
                                    <div class="card-body">
                                        <p class="card-text">The letter U is not in the word in any spot.</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="word-header">
    <h4>
        Oshawacentrewordle 
    </h4>
</div> -->
<!-- PERCENT LOADER START-->
<div id="mainLoader"><img src="../wordgame/assets/loader.png" /><br /><span>0</span></div>
<!-- PERCENT LOADER END-->

<!-- CONTENT START-->
<div id="mainHolder">

    <!-- BROWSER NOT SUPPORT START-->
    <div id="notSupportHolder">
        <div class="notSupport">Your browser isn't supported.<br />Please update your browser in order to run the game.</div>
    </div>
    <!-- BROWSER NOT SUPPORT END-->
<input type="hidden" value="<?php echo the_field('daily_word'); ?>" name="daily_word" id="daily_word">
    <!-- CANVAS START-->
    <div id="canvasHolder">
        <button type='button' class='banner-buttton' data-toggle='modal' data-target='#myhelpModal'>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="4 4 24 24" class="game-icon" data-testid="icon-help">
                <path fill="#fff" d="M14.8333 23H17.1666V20.6667H14.8333V23ZM15.9999 4.33334C9.55992 4.33334 4.33325 9.56001 4.33325 16C4.33325 22.44 9.55992 27.6667 15.9999 27.6667C22.4399 27.6667 27.6666 22.44 27.6666 16C27.6666 9.56001 22.4399 4.33334 15.9999 4.33334ZM15.9999 25.3333C10.8549 25.3333 6.66659 21.145 6.66659 16C6.66659 10.855 10.8549 6.66668 15.9999 6.66668C21.1449 6.66668 25.3333 10.855 25.3333 16C25.3333 21.145 21.1449 25.3333 15.9999 25.3333ZM15.9999 9.00001C13.4216 9.00001 11.3333 11.0883 11.3333 13.6667H13.6666C13.6666 12.3833 14.7166 11.3333 15.9999 11.3333C17.2833 11.3333 18.3333 12.3833 18.3333 13.6667C18.3333 16 14.8333 15.7083 14.8333 19.5H17.1666C17.1666 16.875 20.6666 16.5833 20.6666 13.6667C20.6666 11.0883 18.5783 9.00001 15.9999 9.00001Z"></path>
            </svg>
        </button>
        <canvas id="gameCanvas" width="1280" height="768">

        </canvas>
    </div>
    <!-- CANVAS END-->

</div>
<!-- CONTENT END-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/oshwacentre/js/vendor/jquery.min.js"><\/script>')
</script>

<script src="<?php echo get_template_directory_uri(); ?>/oshwacentre/js/vendor/detectmobilebrowser.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/oshwacentre/js/vendor/createjs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/oshwacentre/js/vendor/TweenMax.min.js"></script>

<script src="../wordgame/js/plugins.js"></script>
<script src="../wordgame/js/sound.js"></script>
<script src="../wordgame/js/canvas.js"></script>
<script src="../wordgame/js/game.js"></script>
<script src="../wordgame/js/mobile.js"></script>
<script src="../wordgame/js/main.js"></script>
<script src="../wordgame/js/loader.js"></script>
<script src="../wordgame/js/init.js"></script>
<script>
    /* var getCookies = function(){
  var pairs = document.cookie.split(";");
  var cookies = {};
  for (var i=0; i<pairs.length; i++){
    var pair = pairs[i].split("=");
    cookies[(pair[0]+'').trim()] = unescape(pair.slice(1).join('='));
  }
  return cookies;
}

var myCookies = getCookies();
console.log(myCookies);
 */


    function get_cookies_array() {

        var cookies = {};

        if (document.cookie && document.cookie != '') {
            var split = document.cookie.split(';');
            for (var i = 0; i < split.length; i++) {
                var name_value = split[i].split("=");
                name_value[0] = name_value[0].replace(/^ /, '');
                cookies[decodeURIComponent(name_value[0])] = decodeURIComponent(name_value[1]);
            }
        }

        return cookies;

    }

    var cookies = get_cookies_array();
    for (var name in cookies) {
        var q = name + " : " + cookies[name];
        console.log(q);
    }
</script>
</body>

</html>