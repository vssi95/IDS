<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Sign Up</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
        
    <body class="loginpg">
        <div class="center">
            <h1>Sign Up</h1>
            <form method="post" action="signup.php">

                <br>

                <span style="text-align: center; color: red;"><?php include('errors.php'); ?></span>
                
                <div class="txtfield">
                    <input type="text" name="username" value="<?php echo $username; ?>" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txtfield">
                    <input type="email" name="email" value="<?php echo $email; ?>" required>
                    <span></span>
                    <label>Email Address</label>
                </div>
                <div class="txtfield">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="txtfield">
                    <input type="password" name="c_password" required>
                    <span></span>
                    <label>Confirm Password</label>
                </div>

            

                <input type="submit" value="Sign Up" name="reg_user">
                <div class="signin_link">
                    Already a member? <a href="login.php">Log In</a>
                </div>
            </form>

        </div>
    </body>



</html>