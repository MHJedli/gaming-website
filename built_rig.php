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
    <title>Your Rig</title>
</head>
<body>
    <div class="box">
        <h2>Your RIG</h2>
        <table>
            <tr> <td>CPU</td>  <td>GPU</td> <td>MOTHERBOARD</td> <td>PSU</td> <td>SCREEN</td> </tr>
            <?php
                $requete = "SELECT cpu_model, gpu_model, board_model, psu_model, screen_model 
                FROM rig, cpu c, gpu g, motherboard m, psu p, screen s, users u 
                WHERE u.user_name='$username' AND u.user_id=rig.user_id
                AND rig.cpu_id= c.cpu_id AND rig.gpu_id=g.gpu_id AND rig.screen_id=s.screen_id
                AND rig.board_id=m.board_id AND rig.psu_id=p.psu_id";
                
                $statement = $bdd -> prepare($requete);
                $statement->execute(); 
                $r = $statement->fetchAll(PDO::FETCH_OBJ);
                if ($r)
                {
                    foreach($r as $row)
                    {
                        ?>
                            <tr>
                                <td> <?=$row->cpu_model ?></td>
                                <td> <?=$row->gpu_model ?></td>
                                <td> <?=$row->board_model ?></td>
                                <td> <?=$row->psu_model ?></td>
                                <td> <?=$row->screen_model ?></td>
                            </tr>
                        <?php

                    }
                }
            ?>  
        </table>
    </div>
</body>
</html>