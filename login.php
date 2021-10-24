<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Login</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
        
    <body class="loginpg">
        <div class="center">
            <h1>Login</h1>
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="txtfield">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txtfield">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" name="login_user" value="Login">
                <div class="signup_link">
                    Not a member? <a href="signup.php">Sign Up</a>
                </div>
            </form>

        </div>
    </body>



</html>