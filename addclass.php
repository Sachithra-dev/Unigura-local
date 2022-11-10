<?php
    include('server.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class</title>
</head>
<body>
    <form action = "" method = "post">
        <div class="error"><?php echo $error; ?></div>
        <input type="text" name = "subject" placeholder="subject"><br><br>
        <input type="text" name = "lesson" placeholder="lesson"><br><br>
        <input type="number" name = "rate" placeholder="rate"><br><br>
        <input type="number" name = "duration" placeholder="duration"><br><br>

        <input type="submit" name = "createclass" value="Add Class"><br><br>
    </form>

    <div class="allclasses">
        
    </div>
    
</body>
</html>