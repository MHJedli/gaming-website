<?php
    session_start();
    if (isset($_SESSION['user_name']))
    {
        try
        {
            $username = $_SESSION['user_name'];  
            $bdd = new PDO('mysql:host=localhost; dbname=db_users; charset=utf8', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/built_rig_style.css">
    <link rel="stylesheet" href="style/purchasedgames_style.css">
    <title>Your Games</title>
</head>
<body>
    <div class="box">
        <h2>Your Games</h2>
        <h1><?php echo $username ?></h1>;
        <table>
            <tr> <td>Name</td>  <td>Release</td> <td>Price</td> </tr>
            <?php
                $requete = "SELECT game_name, game_release, game_price
                            FROM puchased_games pg, users u, games g
                            WHERE pg.user_id=u.user_id AND u.user_name='$username' AND g.game_id=pg.game_id";
                
                $statement = $bdd -> prepare($requete);
                $statement->execute(); 
                $r = $statement->fetchAll(PDO::FETCH_OBJ);
                if ($r)
                {
                    foreach($r as $row)
                    {
                        
                        ?>
                            <tr>
                            <td> <?=$row->game_name ?></td>
                            <td> <?=$row->game_release ?></td>
                            <td> <?=$row->game_price ?></td>
                            </tr>
                        <?php

                    }
                }
            ?>  
        </table>
    </div>
</body>
</html>