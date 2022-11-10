<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Navbar</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
             @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            } 
            nav{
            display: flex;
            height: 80px;
            width: 100%;
            background: #FFFFFF;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px 0 100px;
            flex-wrap: wrap;
            }
            nav .logo{
            color: #1D1C1C;
            font-size: 35px;
            font-weight: 600;
            }
            nav ul{
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            }
            nav ul li{
            margin: 0 5px;
            }
            nav ul li a{
            color: #1D1C1C;
;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            }
            nav ul li a.active,
            nav ul li a:hover{
            color: #111;
            background: #fff;
            }
            nav .menu-btn i{
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            display: none;
            }
      </style>

   </head>

   <body>
      <nav>
         <div class="logo">
            Uniගුරා
         </div>
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="loggedInPage.php">Dashboard</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Student</a></li>
            <li><a href="#">Feedback</a></li>
         </ul>
      </nav>
   </body>
</html>