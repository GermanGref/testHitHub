<?php
require_once("config.php");
require_once("Account.php");

$account = new Account($con);
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Документ без названия</title>
        
        <style>
            * {box-sizing: border-box}
            
            .container {
              padding: 16px;
            }

            input[type=text], input[type=password] {
              width: 100%;
              padding: 15px;
              margin: 5px 0 22px 0;
              display: inline-block;
              border: none;
              background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
              background-color: #ddd;
              outline: none;
            }

            hr {
              border: 1px solid #f1f1f1;
              margin-bottom: 25px;
            }

            .registerbtn {
              background-color: #4CAF50;
              color: white;
              padding: 16px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
              opacity: 0.9;
            }

            .registerbtn:hover {
              opacity:1;
            }

            a {
              color: dodgerblue;
            }


        </style>
    </head>
    
    <?php 
    if(isset($_POST["submitButton"])) {
        
        $firstname=$_POST["First_name"];
       echo "Hello ".$firstname;
       
       if ($_POST["email"] != $_POST["Confirm_Email"])
           echo '<br/>Введенные Email адреса не совпадают<br/>';
       if ($_POST["Password"] != $_POST["Confirm_pasword"])
           echo 'введенные пароли не совпадают';
    }   
    ?>
    
    <body>
        <form action="" method="POST">
            <div class="container">
                
                <label for="First_name"><b>First name</b></label>
                <input type="text" placeholder="Enter First name" name="First_name" required>
                
                <label for="Last_name"><b>Last name</b></label>
                <input type="text" placeholder="Enter Last name" name="Last_name" required>
                
                <label for="Username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="Username" required>
                
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                
                <label for="Confirm_Email"><b>Confirm Email</b></label>
                <input type="text" placeholder="Enter Confirm Email" name="Confirm_Email" required>
                
                <label for="Password"><b>Password</b></label>
                <input type="text" placeholder="Enter password" name="Password" required>
                
                <label for="Confirm_pasword"><b>Confirm pasword</b></label>
                <input type="text" placeholder="Enter confirm pasword" name="Confirm_pasword" required>
                
                <button type="submit" class="registerbtn" name="submitButton">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
        </form>
    </body>
</html>