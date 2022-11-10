<?php
    include('server.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
        <form action = "" method = "post">
            <div class="error"><?php echo $error; ?></div>
            <input class = "username" type="text" name = "name" placeholder="user name"><br><br>
            <input class = "email" type="email" name = "email" placeholder="email"><br><br>
            <input class = "password" type="password" name = "password" placeholder="password"><br><br>
            <input class = "repeatpassword" type="password" name = "repeatpassword" placeholder="Repeat Password"><br><br>
            <label class ="checkboxlabel" for="checkbox">Keep me logged in</label>
            <input class ="checkbox" type="checkbox" name = "stayLoggedIn" value= "1"><br><br>
            <input class="submit" type="submit" name = "signup" value="Sign Up"><br><br>
            <p>Have account already?<a href='login.php'>login</a></p>
        </form>
    </div>
</body>
</html>
