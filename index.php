<?php

session_start();

    
    //user can switch between the webpages unless they didnt logout
    if(array_key_exists('id',$_COOKIE)){
        $_SESSION['id'] = $_COOKIE['id'];//stay logged in for long time
    }
    if(array_key_exists('id',$_SESSION)){
        //
    }
    else{
        header('Location: signup.php');
    }

    ?>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Class Dashboard</title>

      <link rel="stylesheet" href="Assets\styleclass.css?v=3.6">
   </head>
   <?php
    include('navbar.php');
        include("linkdb.php");
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM classes WHERE tutorid = $id";
        $result = mysqli_query($linkDB,$sql);
        if(mysqli_num_rows($result)>0){
          echo "<div class='container'>";
          while($row = mysqli_fetch_assoc($result)){
              echo "<div class='card'><div class='box'><div class='content'><h3>".$row['Lesson'] ."<h3>
              <p>".$row['Subject']
              ."</p> <p>Rate(Per Session): LKR <b>"
              .$row['Rate']
              ."</b></p><p>Mode of Conducting : "
              .$row['Mode']
              ."</p><a>View</a><a>Delete</a></div></div></div>";
          }
          echo "</div>";
      }
      
      ?>
    
   </body>
</html>

   