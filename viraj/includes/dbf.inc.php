<?php 

    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "unigura";

    $connection = mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
    
    // if(!$connection){
    //     die("connection Failed: ".mysqli_connect_error());
    // }

?>
