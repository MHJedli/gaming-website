<?php 
    session_start(); 
    if(isset($_SESSION['user_name']))
    {
        $username=$_SESSION['user_name'];
    } 
    else 
    {
        $username = '';
    }
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <div class="container-1">
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
            <button type="button" id="btn"><a href="dashboard.php" target="_self"><i class="fas fa-play"></i></a><?php echo $username ?></button>
        </header>
        <div class="content-wrapper">
            <div class="content-desc">
                <h1>OUR LATEST NEWS</h1>
                <ul>
                    <li><a href="#">-NVIDIA launches its latest RTX 4070 but is it worth it ?</a></li>
                    <li><a href="#">-AMD latest 7000 X3D CPUs started melting on its own !</a></li>
                    <li><a href="#">-You can actually play Star Wars Jedi: Survivor in higher FPS with this trick</a></li>
                    <li><a href="#">-Can my GTX 1080Ti still be used in the era of 2023 games ?</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="container-2">
        <div class="content-wrapper">
            <div class="content-desc">
                <h1>OUR LATEST COMPONENTS</h1>
                <ul>
                    <li><a href="#">-You want a Desktop-like performance on your laptop? Behold the MSI TITAN GT series</a></li>
                    <li><a href="#">-You build your RIG or We build it for you. It's your choice</a></li>
                    <li><a href="#">-INTEL I9 13TH GEN 13900K or AMD RYZEN 9 7950K ? Check out our benchmarking</a></li>
                    <li><a href="#">-Don't Have the bucks and want to game in dignity? This is your place</a></li>
                    <li><a href="#">-Want to join the <span>Cool</span> guys Club? Check our our merch</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="container-3">
        <div class="game-categories">
            <h1>OUR TOP GAME SALES</h1>
            <div class="game-wrapper">
                <a href="#"><div class="gw gw-1"></div></a>
                <a href="#"><div class="gw gw-2"></div></a>
                <a href="#"><div class="gw gw-3"></div></a>
                <a href="#"><div class="gw gw-4"></div></a>
                <a href="#"><div class="gw gw-5"></div></a>
            </div>
    
            <div class="game-wrapper left">
                <a href="#"><div class="gw gw-6"></div></a>
                <a href="#"><div class="gw gw-7"></div></a>
                <a href="#"><div class="gw gw-8"></div></a>
                <a href="#"><div class="gw gw-9"></div></a>
                <a href="#"><div class="gw gw-10"></div></a>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-body">
            <div class="logo footer-logo">
                <i class="fas fa-gamepad"></i>
                <h1>The Game Zone</h1>
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