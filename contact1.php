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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page Design using Html CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="css/styleContactUs.css">

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

    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
body{
    background-color: darkblue;
}
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
              <h3 class="text-white display-3 mb-4">Keep in Touch</h3>
              <div class="d-inline-flex align-items-center text-white">
                  <p class="m-0"><a class="text-white" href="">Home</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Profile</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> contact us</a></p>
              </div>
          </div>
      </div>


    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="#">+91 9876543210</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Gmail:</span> <a href="#">artempire2324@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">artempire.com</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="sendcontactemail.php" method="post">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" id="name" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="address" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="phone" id="phoneno" id="phoneno" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="subject" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" placeholder="Write your message" required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>
</html>