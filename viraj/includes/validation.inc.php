<?php

// --- Functions to check the inputs validations ---

// check the register inputs are empty
function  inputsEmptyRegister($username, $email, $password, $confirm_password)
{
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        return true;
    } else {
        return false;
    }
}


// check the name is valid
function usernameInvalid($username)
{
    if (!preg_match("/^[a-zA-Z]+$/", $username)) {
        return true;
    } else {
        return false;
    }
}


// check email is valid 
function emailInvalid($email)
{
    if (!preg_match("/^[a-zA-Z\d\.-_]+[@][a-zA-Z\d\.-_]+[\.][a-zA-Z\d]{2,}$/", $email)) {
        return true;
    } else {
        return false;
    }
}



// check the password is valid
function passwordInvalid($passwd)
{
    if (!preg_match("/^.{5,}$/", $passwd)) {
        return true;
    } else {
        return false;
    }
}


// check the password is match
function passwordNotMatch($passwd, $confirm_password)
{
    if ($passwd != $confirm_password) {
        return true;
    } else {
        return false;
    }
}


// check the mobile number & email is already availble in th{e DB
function emailAvaiable($email)
{
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "unigura";

    $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

    // Query selection
    $sql = "SELECT * FROM `admin` WHERE email='$email';";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }

    $connection->close();
}


// add the new user into the DB
function registerNewUser($username, $email, $password)
{


    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "unigura";

    $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

    if (!$connection) {
        die("connection Failed: " . mysqli_connect_error());
    }

    $hashedPasswd = md5($password);


    $sql = "INSERT INTO `admin`(`username`, `email`, `password`) VALUES ('$username','$email','$hashedPasswd');";

    if ($connection->query($sql) == TRUE) {
        echo "New record created succssfully";
    }

    $connection->close();

    header("location:../admin_signup/signup.php?error=no_error");
}





// ------------------------------------ Functions to check the LOGIN FORM inputs validations -----------------------------------------


// check the login inputs are empty
function inputsEmptyLogin($email, $password)
{
    if (empty($email || $password))
        return true;
    else
        return false;
}

function  loginUser($email, $password, $rememberME)
{

    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "unigura";

    $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);


    $matchedResult =  "SELECT * FROM `admin` WHERE email='$email' ;";

    $result = $connection->query($matchedResult);

    $encrypedPassword = md5($password);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['password'] == $encrypedPassword) {
                session_start();
                $_SESSION['session_username'] = $row['username'];
                $_SESSION['session_email'] = $row['email'];



                if(isset($rememberME)) {
                    setcookie('emailcookie', $email, time() + 3600 * 24 * 365, "/");
                    setcookie('passwordcookie', $password, time() + 3600 * 24 * 365, "/");
                }
                else{
                    if(isset($_COOKIE['emailcookie'])){
                        setcookie('emailcookie',"", time() - 3600, "/");
                    }
                    if(isset($_COOKIE['passwordcookie'])){
                        setcookie('passwordcookie', "", time() - 3600, "/");
                    }
                }



                header("location:http://localhost:8080/GP-Login%20Page%20Practice/adminDashboard/dashboard.php");
                die();
            } else {
                header("location: ../admin_login/login.php?error=wrongpassword");
                die();
            }
        }
    } else {
        header("location: ../admin_login/login.php?error=Invalid_login_please_try_again");
        die();
    }

    $connection->close();
}
