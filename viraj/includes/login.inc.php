<?php  

    // ---- Add dbh file ----
    // require_once './dbf.inc.php';

    // --- Add validation file ---
    require_once './validation.inc.php';


    if(isset($_POST['login_btn'])){

        // Get login form input data

        $email = $_POST['email'];
        $password = $_POST['password'];
        $rememberME = $_POST['remberMe_check'];

        // Input validation

        if(inputsEmptyLogin($email,$password)){
            header("location: ../admin_login/login.php?error=inputsEmpty");
            die();
        }
        else if(emailInvalid($email)){
            header("location: ../admin_login/login.php?error=invalid_email");
            die();
        }
        else if(passwordInvalid($password)){
            header("location: ../admin_login/login.php?error=invalid_paassword");
            die();
        }
        else{
            // if the inputs are valid
            loginUser($email,$password,$rememberME);
        }


    }

    

?>


