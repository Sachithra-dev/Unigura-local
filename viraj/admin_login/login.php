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
    <link rel="stylesheet" href="./style.css">
    <script defer src="./login.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <div class="nav-left">
            <img src="./images/logo.png" alt="logo">
        </div>
    </nav>

    <div class="error_msg">
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "Invalid_login_please_try_again"){
                    echo "<h3>Invalid login please try again !</h3>";
                }
            }
        ?>
    </div>


    <!-- login form -->

    <div class="container">
        <div class="image">
            <img src="./images/admin.png" alt="admin">
        </div>
        <div class="form">
            <form action="../includes/login.inc.php" method="POST" class="login">
                <h2>Login as a Admin User</h2><br><br><br>
    
                <label>Email</label>
                <span class="error" style="color:red; font-size: 16px; "> *
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "inputsEmpty"){
                                echo "Fill all the fields";
                            }
                            else if($_GET['error'] == "invalid_email"){
                                echo "Enter a valid email";
                            }
                        }
                    ?>
                </span><br>
                <div class="emailFeild">
                    <i class="fa fa-regular fa-user"></i>
                    <input type="text" name="email" placeholder="you@example.com" value="<?php 
                        if(isset($_COOKIE['emailcookie'])){
                            echo $_COOKIE['emailcookie'];
                        }
                    ?>">
                </div>
    


    
                <br>
                <label>Password</label>
                <span class="error" style="color:red; font-size: 16px; "> *
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "inputsEmpty"){
                                echo "Fill all the fields";
                            }
                            else if($_GET['error'] == "wrongpassword"){
                                echo "Enter a valid password";
                            }
                            else if($_GET['error'] == "invalid_paassword"){
                                echo "Enter a valid password";
                            }
                        }
                    ?>
                </span><br>

                <div class="passwordFeild">
                    <i class="fa fa-thin fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Enter 6 character or more" value="<?php
                        if(isset($_COOKIE['passwordcookie'])){
                            echo $_COOKIE['passwordcookie'];
                        }
                    ?>">
                    <i class="fa-sharp fa-solid fa-eye" id="eye"></i>
                </div>
                



    
                <br>
                <div class="rememberMe">
                    <input type="checkbox" name="remberMe_check" id="remberMe_check"
                        <?php
                            if(isset($_COOKIE['emailcookie'])){ 
                                ?> checked <?php }?>
                            }
                    
                    >
                    <label for="remberMe_check">Remember Me</label>
                </div>
    
                <br>

                
    
                <br>
                <button type="submit" name="login_btn">Login</button>

                <div class="addtional_options">
                    <!-- <div class="forgetPassword">
                        <a href="#">Forget your passwaord?</a>
                    </div> -->
                    <div class="createAccount">
                        <p>Doesn't have a account?<a href="../admin_signup/signup.php">&nbsp;&nbsp;Register</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

