<?php
    session_start();

    //Php code log the user out

    if (isset($_GET['logout'])){
        unset($_SESSION['id']);
        setcookie('id',"", time() - 60*60);
        $_COOKIE = "";
    }

    $error = "";

    if(array_key_exists('signup',$_POST)){
        include('linkdb.php');
        //taking data from user 
        $name = mysqli_real_escape_string($linkDB,$_POST['name']);
        $email = mysqli_real_escape_string($linkDB,$_POST['email']);
        $password = mysqli_real_escape_string($linkDB,$_POST['password']);
        $repeatpassword = mysqli_real_escape_string($linkDB,$_POST['repeatpassword']);

        //form validation
        if(!$name){
            $error .= "Name is required<br>";
        }
        if(!$email){
            $error .= "Email field is empty<br>";
        }
        if(!$password){
            $error .= "Password field is empty<br>";
        }
        if($password !== $repeatpassword){
            $error .= "Password did not matched!<br>";
        }
        if($error){
            $error = "<b>There was error(s)in your form".$error;
        }
        else{
            //check if email is already exists in database
            $query = "SELECT id FROM tutor  WHERE email = '$email'";
            $result = mysqli_query($linkDB,$query);
            if (mysqli_num_rows($result)>0){
                $error = "Your email was already exists<br>";
            }
            else{
                //password encryption
                $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
                $query = "INSERT INTO tutor (name,email,password) VALUES ('$name','$email','$hashedPassword')";
                $result = mysqli_query($linkDB,$query);
                if(!$result){
                    $error = "You are not logged in - Try again Later";
                }
                else{
                    //user sign in with session varible
                    $_SESSION['id'] = mysqli_insert_id($linkDB);
                    $_SESSION['name'] = $name;
                    if($_POST['stayLoggedIn'] == '1'){
                        setcookie('id',mysqli_insert_id($linkDB),time()+60*60*365);
                    }
                    //after sign up redirecting the user to loogedipage.php
                    header ('Location: loggedInpage.php' );
                }
            }
        }
        
    }
    //for user login

    $error2 = "";

    if(array_key_exists('Login',$_POST)){
        include('linkdb.php');
        //taking data from user 
        $email = mysqli_real_escape_string($linkDB,$_POST['email']);
        $password = mysqli_real_escape_string($linkDB,$_POST['password']);

        //form validation
    
        if(!$email){
            $error2 .= "Email field is empty<br>";
        }
        if(!$password){
            $error2 .= "Password field is empty<br>";
        }
    
        if($error2){
            $error2 = "<b>There was error(s)in your form".$error2;
        }
        else{
            //password and email matching
            $query = "SELECT * FROM tutor WHERE email = '$email'";
            $result = mysqli_query($linkDB,$query);
            $row = mysqli_fetch_array($result);//get user data from database

            if(isset($row)){
        
                if(password_verify($password, $row["password"])){ //If password matched
                    $_SESSION['id'] = mysqli_insert_id($linkDB);
                    $_SESSION['name'] = $name;
                    if($_POST['stayLoggedIn'] == '1'){
                        setcookie('id',mysqli_insert_id($linkDB),time()+60*60*365);
                    }
                    //after sign up redirecting the user to loogedipage.php
                    header ('Location: loggedInpage.php' );
                }else{
                    $error2 = "Combination of email/password doesn't matched";
                };

            }
        }
        
    }

    //create class

    $error3 = "";

    if(array_key_exists('createclass',$_POST)){
        include('linkdb.php');
        //taking data from user 
        $subject = mysqli_real_escape_string($linkDB,$_POST['subject']);
        $tutor = mysqli_real_escape_string($linkDB,$_SESSION['id']);
        $lesson = mysqli_real_escape_string($linkDB,$_POST['lesson']);
        $rate = mysqli_real_escape_string($linkDB,$_POST['rate']);
        $duration = mysqli_real_escape_string($linkDB,$_POST['duration']);
        


        //form validation
    
        if(!$subject){
            $error3 .= "subject field is empty<br>";
        }
        if(!$lesson){
            $error3 .= "lesson field is empty<br>";
        }
        if(!$rate){
            $error3 .= "rate field is empty<br>";
        }
        if(!$duration){
            $error3 .= "duration field is empty<br>";
        }
    
        if($error3){
            $error3 = "<b>There was error(s)in your form".$error3;
        }
        else{
            $query = "INSERT INTO classes (subject,lesson,rate,duration,tutorid) VALUES ('$subject','$lesson','$rate','$duration','$tutor')";
            $result = mysqli_query($linkDB,$query);
            if(!$result){
                $error3 = "You are not logged in - Try again Later";
            }
            else{
                header ('Location: loggedInpage.php' );
            }
        }
        
    }

    if(array_key_exists('uploadimg',$_POST)){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];


        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png');

        if (in_array($fileActualExt,$allowed)){
            if($fileError=== 0){
                if($fileSize < 500000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'upload_images/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    echo "file uploaded";
                }else{
                    echo "Your file is too big";
                }
            }else{
                echo "There was an error!";
            }

        }else{
            echo "Your cannot upload files of this type ";
        }
    }

// tutor details
    $error4 = "";

    if(array_key_exists('next',$_POST)){
        include('linkdb.php');
        //taking data from user 
        $firstName = mysqli_real_escape_string($linkDB,$_POST['FirstName']);
        $lastName = mysqli_real_escape_string($linkDB,$_POST['LastName']);
        $telephone = mysqli_real_escape_string($linkDB,$_POST['telephone']);
        $letterboxnumber = mysqli_real_escape_string($linkDB,$_POST['letterboxnumber']);
        $street = mysqli_real_escape_string($linkDB,$_POST['street']);
        $city = mysqli_real_escape_string($linkDB,$_POST['city']);
        $subject = mysqli_real_escape_string($linkDB,$_POST['subjects']);
        $modes = mysqli_real_escape_string($linkDB,$_POST['modes']);
        $medium = mysqli_real_escape_string($linkDB,$_POST['medium']);


        //form validation
    
        if(!$FirstName){
            $error4 .= "First Name field is empty<br>";
        }
        if(!$LastName){
            $error4 .= "Last Name field is empty<br>";
        }
        if(!$telephone){
            $error4 .= "Telephone field is empty<br>";
        }
        if(!$letterboxnumber){
            $error4 .= "LetterBox Number field is empty<br>";
        }
        if(!$street){
            $error4 .= "Street field is empty<br>";
        }
        if(!$city){
            $error4 .= "City field is empty<br>";
        }
        if(!$subject){
            $error4 .= "Subject field is empty<br>";
        }
        if(!$modes){
            $error4 .= "Modes field is empty<br>";
        }
        if(!$medium){
            $error4 .= "Medium field is empty<br>";
        }
    
        if($error4){
            $error4 = "<b>There was error(s)in your form".$error4;
        }
        else{
            $query = "INSERT INTO tutor (First_Name,Last_Name,Telephone,LetterBox_Number,Street,City,Subjects,Modes,Medium) VALUES ('$firstName','$lastName','$telephone','$letterboxnumber','$street','$city','$subject','$modes','$medium')";
            $result = mysqli_query($linkDB,$query);
            if(!$result){
                $error4 = "You are not logged in - Try again Later";
            }
            else{
                echo("  Tutor details are successfully added");
            }
        }
        
    }
?>

