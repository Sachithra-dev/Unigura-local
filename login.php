<?php
    include('server.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Assets\style.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php
    include('navbar.php');
    ?>
    <div class="login-container">
        <div class="img">
            <img src="Assets\siteimages\login.png">
        </div>
        <div class="form-container">
            <div class="login_name">User Login</div>
            <div class="login_alias">New to Site !  <a href='index.php'>Register as a Tutor</a></div>  
            <form action = "" method = "post">
                <div class="error"><?php echo $error2; ?></div>
                <input class="input-email" type="email" name = "email" placeholder="email"><br><br>
                <input class="input-password" type="password" name = "password" placeholder="password"><br><br>
                <label class="checkbox-label" for="checkbox">Keep me logged in</label>
                <input class="checkbox" type="checkbox" name = "stayLoggedIn" value= "1"><br><br>
                <input class="submit" type="submit" name = "Login" value="Login"><br><br>
            
            </form>
            
        </div>
    </div>
</body>
</html>
