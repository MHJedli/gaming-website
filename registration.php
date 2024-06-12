<?php

    session_start();
    if(isset($_POST["submit"]))
    {
        try
        {
            $user_name = $_POST["username"];
            $user_phone = $_POST["phone"];
            $user_email = $_POST["email"];
            $user_password = $_POST["password"];
            $requete = "INSERT INTO users (user_name, user_phone, user_email, user_password) VALUES('$user_name', '$user_phone', '$user_email', '$user_password')";
            $bdd = new PDO('mysql:host=localhost; dbname=db_users; charset=utf8', 'root', '');
            $r = $bdd -> query($requete);
            if($r -> rowCount() >0)
            {
                $_SESSION['username'] = $user_name;
                $_SESSION['password'] = $user_password;
                $_SESSION["message"] = "Accout succesfully created You can login Now :) ";
                header("Location: landing.php#this");
            }
            else
            {
                echo "
				<script>alert('Error while creating a new accout Try again')</script>
				<script>window.location = 'signup.html'</script>
			    ";
            }
        }catch(PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        
        
    }
    else
    {
        echo "
				<script>alert('Verify your source code !')</script>
				<script>window.location = 'signup.php'</script>
			";
    }
    
?>