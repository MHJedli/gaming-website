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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dashboard_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="box">
        <h2>THE DASHBOARD</h2>
            <a href="built_rig.php"><input type="button" value="Check Your Built RIG"></a>
            <a href="purchasedgames.php"><input type="button" value="Check Your Purchased Games"></a>
            <a href="#"><input type="button" value="Check Your Available Wallet"></a>
            <a href="home.php"><input type="button" value="Return To Main Menu"></a>
        <div class="banner">
            <i class="fas fa-gamepad"></i>
            <a href="landing.php">Game Hub</a>
        </div>
    </div>
</body>
</html>