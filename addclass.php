<?php
    include('server.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Assets\styleaddclass.css?v=3.6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class</title>
</head>
<body>
<div class="login-container">
        <div class="form-container">
            <div class="login_name">Add Class</div>
            <form action = "" method = "post">
            <div class="error"><?php echo $error; ?></div>
            <select name="subject" placeholder="Subject" >
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="biology">Biology</option>
                <option value="Infomation Tech">Infomation Tech</option>
            </select><br><br>
            <input type="text" name = "lesson" placeholder="Lesson"><br><br>
            <input type="number" name = "rate" placeholder="Rate(Per Session)"><br><br>
            <select name="duration" placeholder="Duration(per session)" >
                <option value="1">1 Hour</option>
                <option value="2">2 Hour</option>
                <option value="3">3 Hour</option>
                <option value="4">4 Hour</option>
            </select><br><br>
            <select name="mode" placeholder="Conduct Mode" >
                <option value="Online">Online</option>
                <option value="Physical">Physical</option>
                <option value="Both">Both</option>
            </select><br><br>
            <input class="submit" type="submit" name = "createclass" value="Add Class"><br><br>
    </form>
        </div>
</div>
    
</body>
</html>