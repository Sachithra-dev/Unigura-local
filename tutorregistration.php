<?php
    include('server.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Details</title>
    <style>
        .container{
            text-align :center;
            justify-content : center;
            align-items:center;
        }
        input{
            padding:5px
        }
        .error{
            background-color : pink;
            color : red;
            width : 300px;
            margin: 0 auto:
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Registration System</h1>
        <h2><a href="loggedInPage.php">Home Page</a></h2>
        <form action = "" method = "post">
            <div class="error"><?php echo $error; ?></div>
            <input type="text" name = "name" placeholder="user name"><br><br>
            <input type="email" name = "email" placeholder="email"><br><br>
            <input type="password" name = "password" placeholder="password"><br><br>
            <input type="password" name = "repeatpassword" placeholder="Repeat Password"><br><br>
            <label for="checkbox">Keep me logged in</label>
            <input type="checkbox" name = "stayLoggedIn" value= "1"><br><br>
            <input type="submit" name = "signup" value="Sign Up"><br><br>
            <p>Have account already?<a href='login.php'>login</a></p>
        </form>
    </div>
</body>
</html>