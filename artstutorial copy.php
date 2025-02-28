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
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Empire</title>
    <link rel="stylesheet" href="css/typenav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
    <!-- <link rel="stylesheet" href="typesofartcss.css"> -->
    <!-- <link rel="stylesheet" href="dresscss.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link rel="stylesheet" href="css/themify-icons.css">

<!-- Bootstrap + Creative Design main styles -->
<link rel="stylesheet" href="css/creative-design.css">

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
</head>

<body>
    
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#">!!Art Tutorials!!</a>
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

              <li><a href="typesOfArtTool.php">Types of arts Tools</a></li>
              <li><a href="artstutorial.php">Tutorials</a></li>
              <li><a href="quiz.php">Arts Quiz</a></li>
              <li><a href="canvas.php">Let's Draw</a></li>


           
               </ul>
        </li>
        <li>
        <a href="#" class="#">Let's Do Shoping</a>

        </li>              <li><a href="canvas.php">Let's Draw</a></li>

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
       
        <li></li>
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
                <p><a href="#">Contact Us</a></p>
              </div> 
              
              <div class="ic">
                <!-- <i class="fa-solid fa-table-columns"></i> -->
                <i class="fa-solid fa-comments"></i>
                <p><a href="#">Feedback</a></p>
              </div>
              <div class="ic">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p><a href="logout.php">Logout</a></p>
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
              <h3 class="text-white display-3 mb-4">Let's Start To Learn</h3>
              <div class="d-inline-flex align-items-center text-white">
                  <p class="m-0"><a class="text-white" href="">Home</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Explore More</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Art Tutirial</a></p>
              </div>
          </div>
          
      </div>



<!-- 
Source Code:  https://github.com/PrisonBreak8/CODEPEN/tree/main/responsive-video
-->

<!-- <title>Responsive Video</title> -->
<style>
  /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");
* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
}

body {
  background-color: coral;
  padding: 20px;
} */

.containervideo {
  max-width: 1200px;
  margin: 100px auto;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  gap: 20px;
}
@media (max-width: 1200px) {
  .containervideo {
    margin: 0;
  }
}

.main-video-containervideo {
  flex: 1 1 700px;
  border-radius: 5px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 15px;
}

.main-video {
  margin-bottom: 7px;
  border-radius: 5px;
  width: 100%;
}
.main-video__title {
  font-size: 20px;
  color: #444;
}
@media (max-width: 450px) {
  .main-video__title {
    font-size: 15px;
    text-align: center;
  }
}

.video-list1-containervideo {
  flex: 1 1 350px;
  height: 485px;
  overflow-y: scroll;
  border-radius: 5px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 15px;
}
.video-list1-containervideo::-webkit-scrollbar {
  width: 10px;
}
.video-list1-containervideo::-webkit-scrollbar-track {
  background-color: #fff;
  border-radius: 5px;
}
.video-list1-containervideo::-webkit-scrollbar-thumb {
  background-color: #444;
  border-radius: 5px;
}

.list1 {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 10px;
  background-color: #eee;
  cursor: pointer;
  border-radius: 5px;
  margin-bottom: 10px;
}
.list1:last-child {
  margin-bottom: 0;
}
.list1.active {
  background-color: #444;
}
.list1.active .list1__title {
  color: #fff;
}
@media (max-width: 450px) {
  .list1 {
    flex-flow: column;
    gap: 10px;
  }
}
.list1__video {
  width: 100px;
  border-radius: 5px;
}
@media (max-width: 450px) {
  .list1__video {
    width: 100%;
  }
}
.list1__title {
  font-size: 17px;
  color: #444;
}
@media (max-width: 450px) {
  .list1__title {
    font-size: 15px;
    text-align: center;
  }
}

</style>
<div class="containervideo">

  <div class="main-video-containervideo">
    <video class="main-video" src="img/vid-1.mkv" loop controls autoplay="false"></video>
    <h3 class="main-video__title">How to draw pictures using numbers 1 to 10</h3>
  </div>

  <div class="video-list1-containervideo">

    <div class="list1 active">
      <video class="list1__video" src="img/vid-1.mkv"></video>
      <h3 class="list1__title">How to draw pictures using numbers 1 to 10</h3>
    </div>

    <div class="list1">
      <video class="list1__video" src="img/vid-2.mkv"></video>
      <h3 class="list1__title">How to draw with alphabet</h3>
    </div>

    <div class="list1">
      <video class="list1__video" src="img/vid-3.mp4"></video>
      <h3 class="list1__title">How To draw a butterfly</h3>
    </div>

    <div class="list1">
      <video class="list1__video" src="img/vid-4.mp4"></video>
      <h3 class="list1__title">Easy drawing tricks for beginners</h3>
    </div>

    <div class="list1">
      <video class="list1__video" src="img/vid-5.mp4"></video>
      <h3 class="list1__title">cute drawing tricks for kids</h3>
    </div>

    <div class="list1">
      <video class="list1__video" src="img/vid-6.mp4"></video>
      <h3 class="list1__title">drawing tricks from words</h3>
    </div>

    <div class="list1">
      <video class="list1__video" src="img/vid-7.mp4"></video>
      <h3 class="list1__title">cool art tricks and drawing hacks</h3>
    </div>

    <div class="list1">
      <video class="list1__video" src="img/vid-8.mp4"></video>
      <h3 class="list1__title">Drawing tricks for beginners</h3>
    </div>

 

  </div>

</div>

<script>
  let videoList1 = document.querySelectorAll(".video-list1-containervideo .list1");

videoList1.forEach((vid) => {
  vid.onclick = () => {
    videoList1.forEach((remove) => {
      remove.classList.remove("active");
    });
    vid.classList.add("active");

    let src = vid.querySelector(".list1__video").src;
    let title = vid.querySelector(".list1__title").innerHTML;

    document.querySelector(".main-video-containervideo .main-video").src = src;
    document.querySelector(".main-video-containervideo .main-video").play();
    document.querySelector(
      ".main-video-containervideo .main-video__title"
    ).innerHTML = title;
  };
});

</script>
<div style="height:50px; width:100%; background-color:black;">
<marquee behavior="scroll" direction="left" scrollamount="10" style="color:white; padding:15px">Let's Start To Learn</marquee>
</div>

      <style>
      body {
        font-family: Arial;
        margin: 0;
      }
      
      * {
        box-sizing: border-box;
      }
      
      img {
        vertical-align: middle;
      }
      
      /* Position the image container (needed to position the left and right arrows) */
      .containerslide {
        position: relative;
      }
      
      /* Hide the images by default */
      .mySlides {
        display: none;
      }
      
      /* Add a pointer when hovering over the thumbnail images */
      .cursor {
        cursor: pointer;
      }
      
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: 90%;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }
      
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      .prev {
        left: 0;
        border-radius: 3px 0 0 3px;
      }
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
      
      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      
      /* Container for image text */
      .caption-containerslide {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
      }
      
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      /* Six columns side by side */
      .column {
        float: left;
        width: 16.66%;
      }
      
      /* Add a transparency effect for thumnbail images */
      .demo {
        opacity: 0.6;
      }
      
      .active,
      .demo:hover {
        opacity: 1;
      }
    


    </style>
    <script
    src="https://kit.fontawesome.com/3e0ba4391f.js"
    crossorigin="anonymous"
  ></script>
    
  </style>
</head>

<body>
    
 
  
<style>
body {
  font-family: Arial;
  margin: 0;
  background-color: rgb(95, 20, 156);
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;

}

/* Position the image container (needed to position the left and right arrows) */
.containerslide {
  position: relative;
  padding-top: 2cm;
 
}

/* Hide the images by default */
.mySlides {
  display: none;
  text-align: center;


}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 60%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  position: fixed;
  background-color: black;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgb(0, 183, 255);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.mySlides .numbertext img{
  height: 10cm;
}

/* Container for image text */
.caption-containerslide {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  /* float: left; */
  width: 20%;
  padding: 20px;
}
.column img{
  height: 8cm;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>

<!-- <h2 style="text-align:center">Slideshow Gallery</h2> -->

<div class="containerslide">
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B1.jpg" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B2.jpg" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B3.jpg" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B4.jpg" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B5.png" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B6.png" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B7.png" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B8.png" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B9.jpg"style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/drawimage/B10.png" style="width: 20cm; height: 20cm; align-self: center;" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-containerslide">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B5.png" style="width:100%" onclick="currentSlide(5)" alt="Let's Try to Draw the above Content">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B6.png" style="width:100%" onclick="currentSlide(6)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B7.png" style="width:100%" onclick="currentSlide(7)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B8.png" style="width:100%" onclick="currentSlide(8)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B9.jpg" style="width:100%" onclick="currentSlide(9)" alt="Let's Try to Draw the above Content">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/drawimage/B10.png" style="width:100%" onclick="currentSlide(10)" alt="Let's Try to Draw the above Content">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    

    </body>
    </html>