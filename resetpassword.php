<?php
    session_start();
    if (isset($_POST['submit']))
    {
        try
        {
            $user_name = $_POST['username'];
            $user_email = $_POST['email'];
            $bdd = new PDO('mysql:host=localhost; dbname=db_users; charset=utf8', 'root', '');
            $query = "SELECT * FROM users WHERE user_name='$user_name' AND user_email='$user_email' ";
            $r = $bdd -> query($query);
            if ($r -> rowCount() > 0)
            {
                $_SESSION['message'] = "Check your email inbox to reset your password";
                header("Location: landing.php#this");
            }
            else
            {
                echo "
				<script>alert('Verify your source code !')</script>
				<script>window.location = 'forgotpassword.html'</script>
			    ";
            }
        }
        catch(PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
?>