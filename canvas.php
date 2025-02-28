<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Draw | Art-Empire</title>
    <link rel="stylesheet" href="css/stylepaint.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/scriptpaint.js" defer></script>

    <link rel="stylesheet" href="css/typenav.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->

<!-- <link rel="stylesheet" href="css/themify-icons.css"> -->

<!-- Bootstrap + Creative Design main styles -->
<!-- <link rel="stylesheet" href="css/creative-design.css"> -->
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
/* body{
    background: plum;
} */
.main{
    background-color:#242526;
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* padding: 20px 50px; */
    /* padding-top: 10px;
    padding-bottom: 10px; */
}
/* .logo h1{
    font-size: 38px;
    color: white;
} */
.nav{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.nav ul{
    display: flex;
    justify-content: center;
    align-items: center;
}
.nav ul li{
    color: white;
    /* margin: 0px 10px; */
    list-style: none;
}
.ig{
    margin-left: 20px;

}
.ig img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
}
.float{
    position: absolute;
    width: 250px;
    background-color: white;
    top: 70px;
    right: 0px;
    border-radius: 3px;
    max-height: 0px;
    transition: max-height 1s;
    overflow: hidden;
}
/* Create one class not linked to html */
.fin{
    max-height: 500px;
}
.float hr{
    background-color: rgb(150, 165, 165);
}
.profile{
    display: flex;
    align-items: center;
    padding: 15px 10px 5px 10px;
}
.profile h4{
    font-size: 14px;
    margin-left: 10px;
}
.profile img{
    width: 50x;
    height: 50px;
    border-radius: 50%;
}
.ic{
    padding: 5px 10px;
    display: flex;
    align-items: center;
}
.ic p a{
    font-size: 18px;
    margin-left: 15px;
    cursor: pointer;
    transition: font-weight 1s;
    color: black;
}
.ic:hover p a{
    font-weight: 700;
    font-size: 24px;
    background-color: #ffff99;
    /* color: #ff6666; */
}
.ic i{
    font-size: 22px;
    width: 18;
    /* background-color: rgb(128, 128, 128, 0.573); */
    padding: 5px;
    border-radius: 50%;
    color: rgb(27, 16, 87);
}




    </style>
    <script
    src="https://kit.fontawesome.com/3e0ba4391f.js"
    crossorigin="anonymous"
  ></script>

    <!-- <style>
.nav1 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.nav1 li {
  float: left;
}

.nav1 li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.nav1 li a:hover:not(.active) {
  background-color: #111;
}

.nav1 .active {
  background-color: #04AA6D;
}
</style> -->
  </head>
  <body>

  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#">Art-Empire</a>
        <!-- <div class="logo"><a href="#">!!Dressing Cultures!!</a> -->
    </div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="home.php">Home</a></li>
       
        <li>
            <a href="#" class="desktop-item">Explore_More</a>
            <input type="checkbox" id="showDrop">
            <label for="showDrop" class="mobile-item">Arts</label>
            <ul class="drop-menu">
              <!-- <li><a href="dress.html">Dressing Culture</a></li> -->
              <li><a href="typesOfBasicArt.php">Types of arts</a></li>

              <li><a href="typesOfArtTool.php">Types_of_arts_Tools</a></li>
              <li><a href="artstutorial.php">Tutorials</a></li>
              <li><a href="canvas.php">Let's Draw</a></li>

              <li><a href="quiz.php">Arts Quiz</a></li>

           
               </ul>
        </li>
        <!-- <li>
        <a href="#" class="#">Let's Do Shoping</a>

        </li> -->
        <li>
          <a href="#" class="desktop-item">Select_Languages</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Select_Languages</label>
          <ul class="drop-menu">
           
            <a href="">languages</a>
           

            <div id="google_translate_element"></div>
            
            <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>
            
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </ul>
        </li>
        
        <li>

             <a href="#" class="desktop-item"><?php echo $fetch_info['name'] ?></a>
             

        </li>
      <li> <div class="main">
          <!-- <div class="logo">
            <h1>DOOM</h1>
          </div> -->
          <div class="nav">
           
            <div class="ig">
              <img src="image/profile3.png" id="navbar" alt="" />
              <!-- <i class="fa-sharp fa-solid fa-bars"></i> -->
            </div>
            <div class="float" id="flow">
              <div class="profile">
                <img src="image/profile.jpg" alt="" />
        <h1 style="color: black;"><?php echo $fetch_info['name'] ?></h1>  
            </div>
              <hr />
              <!-- <div class="ic">
                <i class="fa-solid fa-table-columns"></i>
                <p>Dashboard</p>
              </div> -->
              <div class="ic">
                <i class="fa-regular fa-user"></i>
                <p><a class="glow-on-hover" href="#">Edit Profile</a></p>
              </div>
              <!-- <div class="ic">
                <i class="fa-solid fa-address-card"></i>
                <p><a href="aboutus.php">About Us</a></p>
              </div> -->
            <div class="ic">
                <!-- <i class="fa-solid fa-table-columns"></i> -->
                <i class="fa-solid fa-address-book"></i>
                <p><a href="contact1.php">Contact Us</a></p>
              </div> 
              
              <div class="ic">
                <!-- <i class="fa-solid fa-table-columns"></i> -->
                <i class="fa-solid fa-comments"></i>
                <p><a href="indexfeedback.php">Feedback</a></p>
              </div>
              <div class="ic">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p><a href="logout-user.php">Logout</a></p>
              </div>
            </div>
          </div>
        </div>
        <script src="js/navdropdown.js"></script>      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</li> 
 

        <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
          <div class="container text-center py-5">
              <h3 class="text-white display-3 mb-4">Let's Practice to Drawing</h3>
              <div class="d-inline-flex align-items-center text-white">
                  <p class="m-0"><a class="text-white" href="">Home</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Explore More</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Let's Draw</a></p>
              </div>
          </div>
      </div>



<div class="box2">

    <div class="containerpaint">
      <section class="tools-board">
        <div class="row1">
          <label class="title">Shapes</label>
          <ul class="options">
            <li class="option tool" id="rectangle">
              <img src="iconspaint/rectangle.svg" alt="">
              <span>Rectangle</span>
            </li>
            <li class="option tool" id="circle">
              <img src="iconspaint/circle.svg" alt="">
              <span>Circle</span>
            </li>
            <li class="option tool" id="triangle">
              <img src="iconspaint/triangle.svg" alt="">
              <span>Triangle</span>
            </li>
            <li class="option">
              <input type="checkbox" id="fill-color">
              <label for="fill-color">Fill color</label>
            </li>
          </ul>
        </div>
        <div class="row1">
          <label class="title">Options</label>
          <ul class="options">
            <li class="option active tool" id="brush">
              <img src="iconspaint/brush.svg" alt="">
              <span>Brush</span>
            </li>
            <li class="option tool" id="eraser">
              <img src="iconspaint/eraser.svg" alt="">
              <span>Eraser</span>
            </li>
            <li class="option">
              <input type="range" id="size-slider" min="1" max="30" value="5">
            </li>
          </ul>
        </div>
        <div class="row1 colors">
          <label class="title">Colors</label>
          <ul class="options">
            <li class="option"></li>
            <li class="option selected"></li>
            <li class="option"></li>
            <li class="option"></li>
            <li class="option">
              <input type="color" id="color-picker" value="#4A98F7">
            </li>
          </ul>
        </div>
        <div class="row1 buttons">
          <button class="clear-canvas">Clear Canvas</button>
          <button class="save-img">Save As Image</button>
        </div>
      </section>
      <section class="drawing-board">
        <canvas></canvas>
      </section>
    </div>
    </div>

  </body>
</html>