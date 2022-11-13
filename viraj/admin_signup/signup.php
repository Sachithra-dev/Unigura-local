<?php
    session_start();

    // if there is created session variabfle
    // (this means user is logged in)
    // so admin can't in the login page
    if(isset($_SESSION['session_email'])){
        header("location:http://localhost:8080/GP-Login%20Page%20Practice/adminDashboard/dashboard.php");
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP-Practice</title>
    <script src="https://kit.fontawesome.com/401cc96be7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav>
        <div class="nav-left">
            <img src="./images/logo.png" alt="logo">
        </div>
    </nav>


    <!-- login form -->

    <div class="container">
        
        <div class="form">
            <form action="../includes/register.inc.php" method="POST" class="login">
                <h2>Signup as a Admin User</h2><br><br>
    
                <label>User Name</label><span class="error" style="color:red; font-size: 16px; "> *
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "inputsEmpty"){
                                echo "Fill all the fields";
                            }
                            else if($_GET['error'] == "invalid_username"){
                                echo "Invalid User Name";
                            }
                        }
                    ?>
                </span><br>
                
                <div class="usernameFiled">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" name="username" placeholder="eg:Viraj Sandakelum">
                </div>
    
                <br>
                <label>Email</label><span class="error" style="color:red; font-size: 16px; "> *
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "inputsEmpty"){
                                echo "Fill all the fields";
                            }
                            else if($_GET['error'] == "invalid_email"){
                                echo "Invalid Email";
                            }
                            else if($_GET['error'] == "emailisalreadyexist"){
                                echo "Email is already exist";
                            }
                        }
                    ?>
                </span><br>
            
                <div class="emailField">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" placeholder="eg:example@gmail.com">
                </div>
    
                <br>
                <label>Password</label><span class="error" style="color:red; font-size: 16px; "> *
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "inputsEmpty"){
                                echo "Fill all the fields";
                            }
                            else if($_GET['error'] == "invalid_password"){
                                echo "Invalid Password";
                            }
                        }
                    ?>
                </span><br>
                
                <div class="passwordFiled">
                    <i class="fa fa-light fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter 6 character or more">
                </div>

                <br>
                <label>Confirm Password</label><span class="error" style="color:red; font-size: 16px; "> *
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "inputsEmpty"){
                                echo "Fill all the fields";
                            }
                            else if($_GET['error'] == "different_password"){
                                echo "Password not match";
                            }
                        }
                    ?>
                </span><br>

                <div class="passwordconfirmFiled">
                    <i class="fa a-regular fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Re-type Password">
                </div>
                

    
                <br>
                <button type="submit" name="register_btn">Sign Up</button>

                <br><br>
                <p>Already have an account? <a href="../admin_login/login.php">&nbsp;Login</a></p>
            </form>
        </div>
        
        <div class="image">
            <img src="./images/admin.webp" alt="admin">
        </div>
        

    </div>

</body>
</html>