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
        <div class="form-container">
            <form action = "" method = "post">
                <div class="error"><?php echo $error; ?></div>
                <input class = "firstname" type="text" name = "FirstName" placeholder="FirstName"><br><br>
                <input class = "telephone" type="number" name = "telephone" placeholder="Telephone"><br><br>
                <input class = "street" type="text" name = "street" placeholder="Street"><br><br>
                <input class = "subjects" type="text" name = "subjects" placeholder="Subjects"><br><br>
                <input class = "medium" type="text" name = "medium" placeholder="Medium"><br><br>
                <input class = "submit" type="submit" name = "next" value="Next"><br><br>
                <div class="form-container2">
                    <input class = "lastname" type="text" name = "LastName" placeholder="LastName"><br><br>
                    <input class = "letterboxnumber" type="number" name = "letterboxnumber" placeholder="Letterboxnumber"><br><br>
                    <input class = "city" type="text" name = "city" placeholder="City"><br><br>
                    <input class = "modes" type="text" name = "modes" placeholder="Modes"><br><br>
                    
                </div>
               
            </form>
        </div>
    </div>
</body>
</html>
