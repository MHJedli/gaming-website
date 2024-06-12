<?php 
    session_start(); 
    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $username = $_SESSION['username'];
        $userpassword = $_SESSION['password'];
        
    } 
    else 
    {
        $username = '';
        $userpassword = '';
    }

    if(isset($_SESSION['message']))
    {
        $message = $_SESSION['message'];
    }
    else
    {
        $message = '';
    }
    unset($_SESSION['message']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/landing_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="script/landing_script.js"></script>
    <title>The Game Hub</title>
</head>
<body>
    <section class="container-1">
        <header>
            <div class="logo">
                <i class="fas fa-gamepad"></i>
                <p>THE GAME HUB</p>
            </div>
            <ul class="navbar">
                <li><a href="#" >FPS</a></li>
                <li><a href="#">ARCADE</a></li>
                <li><a href="#">E-SPORTS</a></li>
                <li><a href="#">GAMING PC</a></li>
                <li><a href="#">NINTENDO</a></li>
                <li><a href="#" class="active">LIVE MATCH</a></li>
            </ul>
            <button type="button" id="btn"><i class="fas fa-play"></i>PLAY NOW</button>
        </header>
        <div class="content-wrapper">
            <div class="content-desc">
                <h1>WELCOMETHE GAME HUB</h1>
                <p>A warm place to enjoy the vibes and meet the pros</p>
                <p>An all-in-one experience</p>

                <button id="btn2">Challenge Rakuto Now</button>
            </div>
            <div class="ghost"></div>
        </div>
    </section>

    <div class="logo-section">
        <i class="fas fa-gamepad"></i>
        <h1>The Game Hub</h1>
    </div>

    <section class="container-2">
        <div class="content-wrapper">
            <div class="content-desc">
                <h1>YOU CAN FIND ANYTHING YOU WANT WITH US</h1>
                <p>Gaming PC, New High-End components, The Newest Games</p>
                <p>And You can even trade with us or others gamers</p>

                <button id="btn2">It is an AIO experience</button>
            </div>
            <div class="pc"></div>
        </div>
    </section>

    <div class="logo-section">
        <i class="fas fa-gamepad"></i>
        <h1>The Game Hub</h1>
    </div>
    <section class="container-3">
        <div class="section-1-wrapper">
            <br>  
            <h1>WE HAVE THE GAMES YOU WANT</h1>
            <br>
            <!-- Start of Image Slider -->
            <div class="slider">
                <div class="slides">
                    <!-- Start of radio buttons -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <!-- End of radio buttons -->
                    <!-- Start of Sliding images -->
                    <div class="slide first">
                        <img src="img/gtav-cover1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/wz2-cover2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/jedi-cover3.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/forza5-cover4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/lol-cover5.jpg" alt="">
                    </div>
                    <!-- End of Sliding images -->
                    <!-- Start of auto navigation -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                    </div>
                    <!-- End of auto navigation -->
                </div>
                <!-- Start of manual navigation -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                </div>
                <!-- End of manual navigation -->
            </div>
            <!-- Start of Image Slider -->
            <script text="text/JavaScript">
                var counter = 1;
                setInterval(function(){
                    document.getElementById("radio" + counter).checked = true;
                    counter++;
                    if(counter >5){
                        counter = 1;
                    }
                }, 5000);
            </script>
        </div>
    </section>

    <div class="logo-section">
        <i class="fas fa-gamepad"></i>
        <h1>WHAT ARE YOU WAINTING FOR ?</h1>
    </div>
    <a name="this"></a>
    <section class="container-4">
        <video autoplay loop muted plays-inline>
            <source src="img/video-cover.mp4" type="video/mp4">
        </video>
        
        <div class="box">    
            <div class="form-wrapper">
                <span class="borderLine"></span>
                <form name="login_form" action="signin.php" method="POST">
                    <h2>Sign up</h2>
                   
                    <div class="inputBox">
                        <input type="text" required="required" name="username" value="<?php echo $username ?>">
                        <span>Username</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" required="required" name="password" value="<?php echo $userpassword ?>">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <div class="links">
                        <a href="forgotpassword.html">Forgot Password</a>
                        <a href="signup.html" target="_self">Sign Up</a>
                    </div>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
            <div class="msg"> <?php echo $message ?> </div>
		    <script>
		    	(function() {
		    		// removing the message 3 seconds after the page load
		    		setTimeout(function(){
		    			document.querySelector('.msg').remove();
		    		},3000)
		    	})();
		    </script>
        </div> 
        
    </section>
    
    <footer>
        <div class="footer-body">
            <div class="logo footer-logo">
                <i class="fas fa-gamepad"></i>
                <h1>The Game Hub</h1>
            </div>
            <ul>
                <h3>Short Links</h3>
                <li><a href="#">Arcade</a></li>
                <li><a href="#">War Zone</a></li>
                <li><a href="#">Fifa Game</a></li>
                <li><a href="#">Pes 2020</a></li>
                <li><a href="#">Xbox Game</a></li>
            </ul>

            <ul>
                <h3>Action Games</h3>
                <li><a href="#">Anpar</a></li>
                <li><a href="#">BattleField</a></li>
                <li><a href="#">The Ghost</a></li>
                <li><a href="#">Fortnite</a></li>
                <li><a href="#">Cold War</a></li>
            </ul>
            <ul>
                <h3>Get In Touch</h3>
                <li><a href="#"><i class="fab fa-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i>Linkedin</a></li>
            </ul>
        </div>
    </footer>
    
</body>
</html>
    
