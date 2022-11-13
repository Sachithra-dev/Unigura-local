<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./newSubject.css">
    <title>Document</title>
</head>

<body>

    <nav>
        <div class="nav-left">
            <a href="../adminDashboard/dashboard.php"><img src="./images/logo.png" alt="logo"></a>
        </div>

        <div class="nav-right">
            <div class="profile">
                <img src="./images/profile.png" alt="profile">
            </div>
            <div class="notifiaction">
                <img src="./images/notification.png" alt="notification">
            </div>
        </div>
    </nav>


    <div class="container">
        <h2>Add New Subject</h2><br><br>

        <div class="form">
            <form action="../includes/newSubjectAdd.inc.php" method="POST">
                <label for="">Subject Name</label><br>
                <input type="text" name="subjectName" >
                <br><br>
                <button type="submit" name="add_subject">Add Subject</button>
            </form>
        </div>

        <!-- <div class="subjects">
            
            <?php
                require '../includes/dbf.inc.php';
                $sql = "SELECT * FROM `subject`";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div>";
                        echo "<h3>" . $row['subject_name'] . "</h3>";
                        echo "</div>";
                    }
                }
            ?> -->

            <table class="subject_tables">
                <tr>
                    <th>Subject Name</th>
                    <th>Delete</th>
                </tr>
                <?php
                require '../includes/dbf.inc.php';
                $sql = "SELECT * FROM `subject`";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['subject_name'] . "</td>";
                        echo "<td><a href='../includes/deleteSubject.inc.php?subject_id=" . $row['subject_id'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>

                
            </table>

        <!-- </div> -->
    </div>


</body>

</html>