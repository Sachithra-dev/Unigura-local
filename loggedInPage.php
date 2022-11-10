<?php
    session_start();
    //user can switch between the webpages unless they didnt logout

    if(array_key_exists('id',$_COOKIE)){
        $_SESSION['id'] = $_COOKIE['id'];//stay logged in for long time
        echo "<h3>Welcome Dear,".$_SESSION['name']."</h3>";
    }
    if(array_key_exists('id',$_COOKIE) OR array_key_exists('id',$_SESSION)){
        echo "<h2>congratulations,You are a registered User:<a href = index.php?logout=1>
        Log out</a></h2>";
    }
    else{
        header('Location: index.php');
    }

?>

<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Awesome Product Card Design | CodingNepal</title>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
  background: #456ABD;
  width: 100%;
  transition: background 0.3s ease;
}
.container{
  position: relative;
  height: 500px;
  width: 380px;
  background: #fff;
  overflow: hidden;
  box-shadow: 0 0 8px 0 rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.container:hover{
  box-shadow: 0 0 15px 0 rgba(0,0,0,0.2);
}
.container .image{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}


.container .card-content{
  position: relative;
  height: 100%;
  width: 100%;
}
.card-content .wrapper{
  position: absolute;
  bottom: 100%;
  width: 100%;
  background: #fff;
  padding: 10px 25px;
  box-shadow: -1px -1px 6px rgba(0,0,0,0.1);
  transition: bottom 0.3s ease;
}
.container:hover .card-content .wrapper{
  bottom: 0px;
}
.wrapper .title{
  font-size: 22px;
  font-weight: 500;
}
.wrapper p{
  font-size: 17px;
  color: grey;
}
.wrapper .price{
  position: absolute;
  top: 10px;
  right: 30px;
  font-size: 23px;
  font-weight: 600;
  color: #456ABD;
}
.wrapper .content{
  margin: 10px 0;
}
.wrapper .content .name{
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 500;
}
.wrapper .content .size-value{
  width: 50%;
  display: flex;
  margin: 5px 0;
  justify-content: space-between;
}
.content .size-value span{
  display: block;
  height: 28px;
  width: 28px;
  text-align: center;
  line-height: 28px;
  border-radius: 50%;
  font-size: 15px;
  font-weight: 500;
  cursor: pointer;
  color: #456ABD;
}
.content .size-value span.active{
  background: #456ABD;
  color: #fff;
}
.content .colour-value{
  width: 30%;
  display: flex;
  margin: 10px 0;
  justify-content: space-between;
}
.content .colour-value span{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  position: relative;
}
.content .colour-value span.white{
  background: lightgrey;
}
.content .colour-value span.blue{
  background: #456ABD;
}
.content .colour-value span.yellow{
  background: #EAA523;
}
.content .colour-value span.active:after{
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: -4px;
  top: -4px;
  box-sizing: border-box;
  border: 2px solid #456ABD;
  border-radius: 50%;
}
.content .colour-value span.white.active:after{
  border-color: lightgrey;
}
.content .colour-value span.yellow.active:after{
  border-color: #EAA523;
}
.wrapper .btns{
  display: flex;
  height: 80px;
  width: 100%;
  align-items: center;
  justify-content: center;
}
.wrapper .btns button{
  height: 40px;
  width: 100%;
  margin: 0 10px;
  border: 2px solid #456ABD;
  background: #456ABD;
  outline: none;
  color: #fff;
  font-size: 15px;
  font-weight: 500;
  text-transform: uppercase;
  cursor: pointer;
}
      </style>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   </head>
   <body>
    <h3><a href = "addclass.php">Add class</a></h3>;
      <div class="container">
         <div class="card-content">
            <div class="wrapper">
               <div class="title">
                  Adidas Originals
               </div>
               <p>
                  Men's running tshirt
               </p>
               <span class="price">$29.99</span>
               <div class="content size">
                  <div class="name size-name">
                     Size
                  </div>
                  <div class="size-value">
                     <span class="color">XS</span>
                     <span class="color">S</span>
                     <span class="active">M</span>
                     <span class="color">L</span>
                     <span class="color">XL</span>
                  </div>
               </div>
               <div class="content colour">
                  <div class="name colour-name">
                     Colour
                  </div>
                  <div class="colour-value">
                     <span class="white" data-color="lightgrey" data-img="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png"></span>
                     <span class="blue active" data-color="#456ABD" data-img="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png"></span>
                     <span class="yellow" data-color="#EAA523" data-img="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png"></span>
                  </div>
               </div>
               <div class="btns">
                  <button>Buy now</button>
                  <button>Add to cart</button>
               </div>
            </div>
         </div>
      </div>
    
   </body>
</html>

    <?php 
        include("linkdb.php");
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM classes WHERE tutorid = $id";
        $result = mysqli_query($linkDB,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div> Subject -" .$row["Subject"] ."Module" .$row["Lesson"];
            }
        }
        else{
            echo '<div>No Classes</div>';
        }
        ?>
</html>