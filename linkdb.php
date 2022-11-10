<?php
    //connect mysql to phpmyadmin database
    $hostName = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'unigura';

    $linkDB = mysqli_connect($hostName,$user,$pass,$dbname);

    if (mysqli_connect_error()){
        die('There was an error while connecting to database');
    }else{
        //
    }
?>