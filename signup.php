<?php
    include('server.php');
      //user can switch between the webpages unless they didnt logout
    if(array_key_exists('id',$_COOKIE)){
        $_SESSION['id'] = $_COOKIE['id'];//stay logged in for long time
    }
    if(array_key_exists('id',$_SESSION)){
        header('Location: index.php');
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Assets\styleindex.css?v=2.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="Assets\siteimages\signup.png">
        </div>
        <div class='form-container'>
                <h1>Sign Up</h1>
                <p>Have account already?<a href='login.php'>login</a></p>
                <form class='form' action = "" method = "post">
                    <div class="error"><?php echo $error; ?></div>
                    <input class = "username" type="text" name = "name" placeholder="Username"><br><br>
                    <input class = "email" type="email" name = "email" placeholder="Email"><br><br>
                    <input class = "password" type="password" name = "password" placeholder="Password"><br><br>
                    <input class = "repeatpassword" type="password" name = "repeatpassword" placeholder="Repeat Password"><br><br>
                    <label class ="checkboxlabel" for="checkbox">Keep me logged in</label>
                    <input class ="checkbox" type="checkbox" name = "stayLoggedIn" value= "1"><br><br>
                    <input class="submit" type="submit" name = "signup" value="Sign Up"><br><br>
                   
                </form>
        </div>
    </div>
</body>
</html>