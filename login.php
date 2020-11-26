<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>‘орма логина</title>  
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
    
    <body>
        <form action="">
            <div class="container">
                
                <label for="user_name"><b>UserName</b></label>
                <input type="text" placeholder="Enter username" name="First_name" required>
                
                <label for="Password"><b>Password</b></label>
                <input type="text" placeholder="Enter password" name="Password" required>
                
              <button type="submit" class="registerbtn">Submit</button>
            </div>

            <div class="container signin">
                <p>Do you need an account? <a href="index.php">Sign up here!</a>.</p>
            </div>
        </form>
    </body>
</html>