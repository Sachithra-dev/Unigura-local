<?php
    session_start();

    // user not logged in
    // (this is means, user is not logged in)
    if(!isset($_SESSION['session_email'])){
        header("location:http://localhost:8080/GP-Login%20Page%20Practice/admin_login/login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <title>Document</title>
</head>

<body>

    <nav>
        <div class="nav-left">
            <img src="./images/logo.png" alt="logo">
        </div>

        <div class="nav-middle">
            <h4>Hello!   <span class="admin_name"><?php 
                if(isset($_SESSION['session_username'])){
                    echo $_SESSION['session_username'];
                }
            ?></span></h4>
        </div>

        <div class="nav-right">
            <div class="profile">
                <img src="./images/profile.png" alt="profile" class="dropdownBtn">
                <div class="dropdown_content">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <a href="../includes/logout.inc.php">Logout</a>
                </div>
            </div>
            <div class="notifiaction">
                <img src="./images/notification.png" alt="notification">
            </div>
        </div>
    </nav>



    <div class="container">

        <div class="add-subject">
            <a href="../addNewSubject/newSubject.php">Add Subject</a>
        </div>


        <div class="tutors">
            <h2>TUTORS</h2>
            <h2>14</h2>
        </div>

        <div class="students">
            <h2>STUDENTS</h2>
            <h2>20</h2>
        </div>

        <div class="classes">
            <h2>CLASSES</h2>
            <h2>10</h2>
        </div>

        
        <div class="new-approvals">
            <h2>New Approvals</h2>

            <div class="name">
                <h3>Name</h3>
            </div>
        </div>

        <div class="current-classes">
            <div class="selectDate">
                <input type="date">
                <h3>5</h3>
            </div>

            <div class="name">
                <h3>Name</h3>
            </div>
        </div>

        <div class="payment"> 
            <h2>sfsf</h2>
            <div class="name">
                <h3>Name</h3>
            </div>

        </div>

        <div class="complaints">
            <h2>COMPLAINTS</h2>
            <div class="name">
                <h3>Name</h3>
            </div>

        </div>

    </div>



</body>

</html>