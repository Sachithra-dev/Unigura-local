<?php
    // logout

    session_start(); // without starting the session, we can't destroy session

    session_unset(); // unset all the session variables

    session_destroy(); // destroy the session

    header("location:../admin_login/login.php"); // redirect to the login page

?>