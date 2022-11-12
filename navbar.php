

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Navbar</title>
      <link rel="stylesheet" href="Assets\stylenav.css?v=3.6">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body>
      <nav>
         <div class="logo">
            Welcome ! <?php echo $_SESSION['name']?>
         </div>
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="loggedInPage.php">Dashboard</a></li>
            <li><a href="addclass.php">Add Class</a></li>
            <li><a href="Notification">Active Classes</a></li>
            <li><a href="Profile">Profile</a></li>
            <li><a href="signup.php?logout=1">Logout</a></li>
         </ul>
      </nav>
   </body>
</html>
