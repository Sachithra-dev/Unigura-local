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
        <h1>Tutor Details</h1>
            <form action = "" method = "post">
                <div class="error"><?php echo $error; ?></div>
                <input type="text" name = "FirstName" placeholder="FirstName"><br><br>
                <input type="text" name = "LastName" placeholder="LastName"><br><br>
                <input type="number" name = "telephone" placeholder="telephone"><br><br>
                <input type="number" name = "homenumber" placeholder="homenumber"><br><br>
                <input type="text" name = "street" placeholder="street"><br><br>
                <input type="text" name = "city" placeholder="city"><br><br>
                <input type="text" name = "subjects" placeholder="subjects"><br><br>
                <input type="text" name = "modes" placeholder="modes"><br><br>
                <input type="text" name = "medium" placeholder="medium"><br><br>
                
                <input type="submit" name = "next" value="Next"><br><br>
        </form>
    </div>
</body>
</html>
