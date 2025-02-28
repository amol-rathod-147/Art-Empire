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

              <li><a href="typesOfArtTool.php">Types of arts Tools </a></li>
              <li><a href="artstutorial.php">Tutorials</a></li>
              <li><a href="quiz.php">Arts Quiz</a></li>
              <li><a href="canvas.php">Let's Draw</a></li>



           
               </ul>
        </li>
        <!-- <li>
        <a href="#" class="#">Let's Do Shoping</a>

        </li> -->
        <li><a href="canvas.php">Let's Draw</a></li>

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
          <a href="#" class="desktop-item" onclick="btnToggle()" >Go To Art</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Go To States</label>
          <div class="mega-box">
            <div class="content" id="Dropdown">
                <div class="row" style="padding-left:30px;">
                   
                    <ul class="mega-links" >
                        <li><a href="#abstract_art">Abstract Art</a></li>
                        <li><a href="#cartoon_art">Cartoon Art</a></li>
                        <li><a href="#drawing">Drawing</a></li>
                        <li><a href="#doodling">Doodling</a></li>
                      
                    </ul>
                </div>
              <div class="row">
               
                <ul class="mega-links">
                    <li><a href="#digital_painting">Digital Painting</a></li>
                    <li><a href="#mandala_art">Mandala Art </a></li>
                    <li><a href="#painting">Painting</a></li>
                    <li><a href="#sand_painting">Sand Painting </a></li>
                    <!-- <li><a href="#kerala">Kerala </a></li>
                    <li><a href="#madhayapradesh">Madhya Pradesh </a></li>
                    <li><a href="#maharashtra">Maharashtra </a></li>
                    <li><a href="#manipur">Manipur </a></li> -->
                </ul>
              </div>
              <div class="row">
               
                <ul class="mega-links">
                    <li><a href="#spray_painting">Spray Painting </a></li>
                    <li><a href="#zental_art">Zental Art</a></li>
                    <!-- <li><a href="#rajput">Rajput Painting! </a></li>
                    <li><a href="#cheriyal">Cheriyal Scrolls </a></li> -->
                    
                </ul>
              </div>
              <!-- <div class="row">
               
                <ul class="mega-links">
                    <li><a href="#mughal">Mughal Painting</a></li>
                    <li><a href="#pichwai">Pichwai Painting </a></li>
                    <li><a href="#kerala">Kerala Mural</a></li>
                    <li><a href="#bhil">Bhil Painting </a></li>
                </ul>
              </div> -->
            </div>
          </div>
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
              <h3 class="text-white display-3 mb-4">Different Types of Basic Arts</h3>
              <div class="d-inline-flex align-items-center text-white">
                  <p class="m-0"><a class="text-white" href="">Home</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Explore More</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Types of Arts</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href="">Basic Arts</a></p>
              </div>
          </div>
          
      </div>
<div class="midalnav">
            <style>
                .ulnew {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    padding-left:35%;

}

#liID {
    float: left;
}

#liID a {
    display: block;
    color: white;
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
}

#liID a:hover:not(.active) {
    background-color: #111;
}

.active1 {
    background-color: #4CAF50;
}

            </style>
                        <h1 style="text-align:center;">There are two types of Arts, as shown below.</h1>

            <ul class="ulnew">
  <li id="liID"><a class="active1" href="typesOfBasicArt.php">Types Of Basic Arts</a></li>
  <li id="liID"><a href="typesofart.php">Types of Traditional Arts</a></li>

</ul>
        </div>
      <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
        
    <style>
      .slider{
    width: 500px;
    max-width: 100vw;
    height: 500px;
    margin: auto;
    position: relative;
    overflow: hidden;
}
.slider .list{
    position: absolute;
    width: max-content;
    height: 100%;
    left: 0;
    top: 0;
    display: flex;
    transition: 1s;
}
.slider .list img{
    width: 500px;
    max-width: 100vw;
    height: 500px;
    object-fit: cover;
    
}
.slider .buttons{
    position: absolute;
    top: 45%;
    left: 5%;
    width: 90%;
    display: flex;
    justify-content: space-between;
}
.slider .buttons button{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #fff5;
    color: #fff;
    border: none;
    font-family: monospace;
    font-weight: bold;
}
.slider .dots{
    position: absolute;
    bottom: 10px;
    left: 0;
    color: #fff;
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}
.slider .dots li{
    list-style: none;
    width: 10px;
    height: 10px;
    background-color: #fff;
    margin: 10px;
    border-radius: 20px;
    transition: 0.5s;
}
.slider .dots li.active{
    width: 30px;
}
@media screen and (max-width: 768px){
    .slider{
        height: 400px;
    }
}


    </style>
    

   
    <section id="abstract_art">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <!-- <img src="assets copy/imgs/img-1.jpg" class="w-100" alt="About Us"> -->
                        <div class="slider">
        <div class="list">
            <div class="item">
                <img src="images/BTofArtImages/a1.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/BTofArtImages/a2.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/BTofArtImages/a3.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/BTofArtImages/a4.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/BTofArtImages/a5.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- <script src="js/app.js"></script> -->

                    </div>
                </div>
                <div class="col-md-5" >
                    <h1 class="title mb-3">1. # Abstract Art  !!!</h1>
                    
                    <p style="text-align:justify; font-size:18px;">Drawing, or sketching, is one of the fundamental types of art. Drawing is one of the oldest forms of human expression within the visual arts. It is generally concerned with the marking of lines and areas of tone onto paper/other material, where the accurate representation of the visual world is expressed upon a plane surface. </p>
                    <p style="text-align:justify; font-size:18px;">There are several categories of drawing, including figure drawing, cartooning, doodling, and freehand. There are also many drawing methods, such as line drawing, stippling, shading, the surrealist method of entopic graphomania (in which dots are made at the sites of impurities in a blank sheet of paper, and lines are then made between the dots), and tracing (drawing on a translucent paper, such as tracing paper, around the outline of preexisting shapes that show through the paper).</p>
                    <!-- <button class="btn btn-outline-primary btn-sm">Learn More</button> -->
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section -->   

    <!-- section -->
    <section id="cartoon_art">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                    <h1 class="title mb-3">2. # Cartoon Art !!!</h1>
                    <p style="text-align:justify; font-size:18px;">Cartoon, originally, and still, a full-size sketch or drawing used as a pattern for a tapestry, painting, mosaic, or other graphic art form, but also, since the early 1840s, a pictorial parody utilizing caricature, satire, and usually humour.</p>
                    <p style="text-align:justify; font-size:18px;">Cartoons are used today primarily for conveying political commentary and editorial opinion in newspapers and for social comedy and visual wit in magazines.</p>
                 

                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="images/BTofArtImages/c1.jpg" class="w-100" style="height:500px;" alt="About Us">
                        
                    </div>    
                                      
        
            </div><!-- End of Row -->     
                  
        </div><!-- End of Container-->   
     
    </section><!-- End of Section -->
    

  

    <!-- Section -->
    <section id="drawing">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="images/BTofArtImages/D3.jpg" class="w-100"  alt="About us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h1 class="title mb-3">3. # Drawing  !!!</h1>
                    
                    <p style="text-align:justify; font-size:18px;">Drawing, or sketching, is one of the fundamental types of art. Drawing is one of the oldest forms of human expression within the visual arts. </p>
                    <p style="text-align:justify; font-size:18px;"> It is generally concerned with the marking of lines and areas of tone onto paper/other material, where the accurate representation of the visual world is expressed upon a plane surface.</p>
                    <p style="text-align:justify; font-size:18px;"> There are several categories of drawing, including figure drawing, cartooning, doodling, and freehand. </p>
                    <p style="text-align:justify; font-size:18px;"> There are also many drawing methods, such as line drawing, stippling, shading, the surrealist method of entopic graphomania (in which dots are made at the sites of impurities in a blank sheet of paper, and lines are then made between the dots), and tracing (drawing on a translucent paper, such as tracing paper, around the outline of preexisting shapes that show through the paper).</p>
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->   

    <!-- section -->
    <section id="doodling">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                    <h1 class="title mb-3">4. # Doodling !!!</h1>
                    <p style="text-align:justify; font-size:18px;">A doodle is a drawing made while a person's attention is otherwise occupied.</p>
                    <p style="text-align:justify; font-size:18px;"> Doodles are simple drawings that can have concrete representational meaning or may just be composed of random and abstract lines or shapes, generally without ever lifting the drawing device from the paper, in which case it is usually called a scribble.</p>
                    <p style="text-align:justify; font-size:18px;"> Doodling and scribbling are most often associated with young children and toddlers, because their lack of hand–eye coordination and lower mental development often make it very difficult for any young child to keep their coloring attempts within the line art of the subject.</p>

                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="images/BTofArtImages/doo1.jpg" style="height:450px;" class="w-100" alt="About us">                        
                    </div>                      
                </div>
            </div><!-- End of Row -->     
                  
        </div><!-- End of Container-->      
    </section><!-- End of Section -->
    

  

    <!-- Section -->
    <section id="digital_painting">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="images/BTofArtImages/dg5.jpg" style="height:550px;" class="w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h1 class="title mb-3">5. # Digital Painting !!!</h1>
                    
                    <p style="text-align:justify; font-size:18px;">Digital painting is an established art medium that typically combines a computer, a graphics tablet, and software of choice.[1]</p>
                    <p style="text-align:justify; font-size:18px;"> The artist uses painting and drawing with the stylus that comes with the graphics tablet to create 2D paintings within a digital art software.</p>
                    <p style="text-align:justify; font-size:18px;"> Digital artists utilize multiple techniques and tools, the main one being digital brushes.[2] These come standard with all digital art programs, but users can create their own by altering their shape, texture, size, and transfer.</p>
                    <p style="text-align:justify; font-size:18px;"> Many of these brushes are created to represent traditional styles like oils, acrylics, pastels, charcoal, and airbrushing, but not all.[4] Other effective tools include layers, lasso tools, shapes, and masks. Digital painting has evolved to not just mimic traditional art styles but fully become its technique.</p>
                

                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->   

    <!-- section -->
    <section id="mandala_art">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                    <h1 class="title mb-3">6. # Mandala Art !!!</h1>
                    <p style="text-align:justify; font-size:18px;">The word Mandala comes from the ancient Indian language (Sanskrit), which means a Circle or Center.  </p>
                    <p style="text-align:justify; font-size:18px;">Mandala is drawn from the central point and is surrounded by beautiful patterns and decorations that are connected and interrelated. </p>
                    <p style="text-align:justify; font-size:18px;">An image of a Mandala can symbolize everything in life that is interconnected and never-ending.</p>
                    <p style="text-align:justify; font-size:18px;">A circle is a great symbol to illustrate that life has no end and spirits never disappear, and everything is just a part of nature, the world, and the universe. </p>
                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="images/BTofArtImages/m4.jpg" style="height:450px;" class="w-100" alt="About Us">
                        
                    </div>                      
                </div>
            </div><!-- End of Row -->     
                  
        </div><!-- End of Container-->      
    </section><!-- End of Section -->
    

  

    <!-- Section -->
    <section id="painting">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="images/BTofArtImages/P5.jpeg" style="height:450px;" class="w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h1 class="title mb-3">7. # Painting  !!!</h1>
                    
                    <p style="text-align:justify; font-size:18px;">Painting, the expression of ideas and emotions, with the creation of certain aesthetic qualities, in a two-dimensional visual language. </p>
                    <p style="text-align:justify; font-size:18px;"> The elements of this language—its shapes, lines, colours, tones, and textures—are used in various ways to produce sensations of volume, space, movement, and light on a flat surface. </p>
                    <p style="text-align:justify; font-size:18px;"> These elements are combined into expressive patterns in order to represent real or supernatural phenomena, to interpret a narrative theme, or to create wholly abstract visual relationships. </p>
                  

                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->   

    <!-- section -->
    <section id="sand_painting">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                    <h1 class="title mb-3">8. # Sand Painting !!!</h1>
                    <p style="text-align:justify; font-size:18px;">Sand paintings are stylized, symbolic pictures prepared by trickling small quantities of crushed, coloured sandstone, charcoal, pollen, or other dry materials in white, blue, yellow, black, and red hues on a background of clean, smoothed sand.  </p>
                    <p style="text-align:justify; font-size:18px;">Sand painting, also called dry painting, type of art that exists in highly developed forms among the Navajo and Pueblo Indians of the American Southwest and in simpler forms among several Plains and California Indian tribes.</p>


                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="images/BTofArtImages/sp2.jpg" class="w-100" alt="About Us">
                        
                    </div>                      
                </div>
            </div><!-- End of Row -->     
                  
        </div><!-- End of Container-->      
    </section><!-- End of Section -->
    

  

    <!-- Section -->
    <section id="spray_painting">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="images/BTofArtImages/spp1.jpg" class="w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h1 class="title mb-3">9. # Spray Painting !!!</h1>
                    
                    <p style="text-align:justify; font-size:18px;">Spray painting is a painting technique in which a device sprays coating material (paint, ink, varnish, etc.) through the air onto a surface. The most common types employ compressed gas—usually air—to atomize and direct the paint particles.</p>
                    <p style="text-align:justify; font-size:18px;"> Spray guns evolved from airbrushes, and the two are usually distinguished by their size and the size of the spray pattern they produce.</p>
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->   

    <section id="zental_art">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                    <h1 class="title mb-3">10. # Zental Art !!!</h1>
                    <p style="text-align:justify; font-size:18px;">The Zentangle Method is an easy-to-learn, relaxing, and fun way to create beautiful images by drawing structured patterns.     </p>
                    <p style="text-align:justify; font-size:18px;">We call these patterns, tangles.</p>
                    <p style="text-align:justify; font-size:18px;">You create tangles with combinations of dots, lines, simple curves, S-curves and orbs.</p>
                    <p style="text-align:justify; font-size:18px;">These simple shapes are the "Elemental Strokes" in all Zentangle art.</p>
                    <p style="text-align:justify; font-size:18px;"> These patterns are drawn on small pieces of paper called "tiles." We call them tiles because you can assemble them into mosaics.</p>



                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="images/BTofArtImages/z3.jpg" style="height:500px;" class="w-100" alt="About Us">
                        
                    </div>                      
                </div>
            </div><!-- End of Row -->     
                  
        </div><!-- End of Container-->      
    </section><!-- End of Section -->

    <script src="js/app.js"></script>

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Creative Design js -->
    <script src="assets/js/creative-design.js"></script>

</body>
</html>

