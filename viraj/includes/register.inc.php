<?php

    // ---- Add dbh file ----
    require_once './dbf.inc.php';

    // --- Add validation file ---
    require_once './validation.inc.php';


    // if user click the register button
    if(isset($_POST["register_btn"])){

        // Get form input date
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Input validation
        if(inputsEmptyRegister($username,$email,$password,$confirm_password)){
            header("location:../admin_signup/signup.php?error=inputsEmpty");
            die();
        }
        else if(usernameInvalid($username)){
            // if fname & lname is defined by using the numbers not letters
            header("location:../admin_signup/signup.php?error=invalid_username");
            die();
        }
        else if(emailAvaiable($email)){
            header("location:../admin_signup/signup.php?error=emailisalreadyexist");
            die();
        }
        else if(emailInvalid($email)){
            header("location:../admin_signup/signup.php?error=invalid_email");
            die();
        }
        else if(passwordInvalid($password)){
            header("location:../admin_signup/signup.php?error=invalid_password");
            die();
        }
        else if(passwordNotMatch($password,$confirm_password)){
            header("location:../admin_signup/signup.php?error=different_password");
            die();
        }
        else{
            // if all validation are error free
            registerNewUser($username,$email,$password); 
        }
    }
    else{
        header("location:../admin_signup/signup.php?ee");
        exit();
    }
?>


