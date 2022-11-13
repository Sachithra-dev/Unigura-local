<?php

    if(isset($_POST['add_subject'])){

        require './dbf.inc.php';

        $subjectName = $_POST['subjectName'];
    
        if (!$connection) {
            die("connection Failed: " . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO `subject`(`subject_name`) VALUES ('$subjectName')";

            if ($connection->query($sql) == TRUE) {
                header("location: ../addNewSubject/newSubject.php?add=success");
                
            }
            else{
                header("location: ../addNewSubject/newSubject.php?add=failed");
            }
        
            $connection->close();
        
        }

        
    }


?>
    
