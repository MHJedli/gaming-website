<?php
    session_start();
    if (isset($_POST['submit']))
    {
        try
        {
            $user_name = $_POST['username'];
            $user_password = $_POST['password'];
            $bdd = new PDO('mysql:host=localhost; dbname=db_users; charset=utf8', 'root', '');
            $query = "SELECT * FROM users WHERE user_name='$user_name' AND user_password='$user_password' ";
            $r = $bdd -> query($query);
            if ($r -> rowCount() > 0)
            {
                $_SESSION['user_name'] = $user_name;
                header("Location: home.php");
            }
            else
            {
                $_SESSION['message'] = "User Name or Password is incorrect !";
                header("Location: landing.php#this");
            }
        }
        catch(PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    else
    {
        echo "
				<script>alert('Verify your source code !')</script>
				<script>window.location = 'landing.php'</script>
			    ";
    }
?>