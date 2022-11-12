<?php

    include('server.php');

    
    //user can switch between the webpages unless they didnt logout
    if(array_key_exists('id',$_COOKIE)){
        $_SESSION['id'] = $_COOKIE['id'];//stay logged in for long time
    }
    if(array_key_exists('id',$_SESSION)){
        //
    }
    else{
        header('Location: index.php');
    }

  
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Assets\styletutor.css?v=3.6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Details</title>

</head>

<body>
   <div class="container">
        <h1>Tutor Details</h1>
        <div class="error"><?php echo $error; ?></div>
        <div class="form-container">
            <form action = "" method = "post">
                <input class = "firstname" type="text" name = "FirstName" placeholder="FirstName"><br><br>
                <input class = "telephone" type="number" name = "telephone" placeholder="Telephone"><br><br>
                <input class = "street" type="text" name = "Street" placeholder="Street"><br><br>
                <input class = "subjects" type="text" name = "District" placeholder="District"><br><br>
                <input class = "submit" type="submit" name = "next" value="Next"><br><br>
                <div class="form-container2">
                    <input class = "lastname" type="text" name = "LastName" placeholder="LastName"><br><br>
                    <input class = "letterboxnumber" type="text" name = "address" placeholder="Address"><br><br>
                    <input class = "city" type="text" name = "city" placeholder="City"><br><br>
                    <input class = "modes" type="text" name = "gender" placeholder="Gender"><br><br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>