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
    <meta charset="utf-8">
    <title>Art Empire</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
    font-family: 'poppins', sans-serif;
    box-sizing: border-box;
}
.hero{
    width: 100%;
    /* min-height: 100vh; */
    background: #eceaff;
    color: #525252; 
}
nav{
    background: #1a1a1a;
    width: 100%;
    padding: 10px 10%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position:relative;
}
.logo{
   width: 120px; 
}
.user-pic{
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    margin-left: 30px;
}
nav ul{
    width: 100%;
    text-align: right;
}
nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 20px;
}
nav ul li a{
    color: #fff;
    text-decoration: none;
}
.sub-menu-wrap{
    position: absolute;
    top: 100%;
    right: 10%;
    width: 320px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
}
.sub-menu-wrap.open-menu{
    max-height: 400px;
    
}
.sub-menu{
    background: #fff;
    padding: 20px;
    margin: 10px;
}
.user-info{
    display: flex;
    align-items: center;
}
.user-info h3{
    font-weight: 500;
}
.user-info img{
    width: 60%;
    border-radius: 50%;
    margin-right: 15px; 
}
.sub-menu hr{
    border: 0;
    height: 1px;
    width: 100%;
    background: #ccc;
    margin: 15px 0 10px ;
}
.sub-menu-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #525252;
    margin: 12px 0 ;
}
.sub-menu-link p{
    width: 100%;
}
.sub-menu-link img{
    width: 40px;
    background: #e5e5e5;
    border-radius: 50%;
    padding: 8px;
    margin-right: 15px;
}
.sub-menu-link span{
    font-size: 22px;
    transition: transform 0.5s;
}
.sub-menu-link:hover span{
    transform: translateX(5px);
}
.sub-menu-link p{
    font-weight: 600;
}

    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>artempire2324@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
             
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5" style="background-color: black;">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">ART</span> Empire</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <a href="typesOfBasicArt.php" class="nav-item nav-link">Types</a>
                    <a href="typesOfArtTool.php" class="nav-item nav-link">Tools</a>
                    <a href="artstutorial.php" class="nav-item nav-link">Tutorials</a>
                    <a href="quiz.php" class="nav-item nav-link">Let's Draw</a>
                    <a href="canvas.php" class="nav-item nav-link">Art Quiz</a>


                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="aboutUs_afterLogin.php" class="dropdown-item">About us</a>
                            <a href="contactUs_afterLogin.php" class="dropdown-item">Contact Us</a>
                            <a href="feedback_afterLogin.php" class="dropdown-item">Feedback</a>
                        </div>
                    </div> -->
                    <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                </div>
                <!-- <a href="" class="btn btn-primary d-none d-lg-block">Get Started</a> -->

                
              
                        <a href="#" style="color: black;"><?php echo $fetch_info['name'] ?></a>
                        <img src="image/profile.jpg" class="user-pic" onclick="toggleMenu()">
                        <a href="logout-user.php"> <button class="btn">Log Out</button> </a>
            
                        <div class="sub-menu-wrap" id="subMenu">
                            <div class="sub-menu">
                                <div class="user-info">
                                    <img src="images/profile.png">
                                    <h3>                        <a href="#" style="color: black;"><?php echo $fetch_info['name'] ?></a>
</h3>
                                </div>
                                <hr>
            
                                <a href="#" class="sub-menu-link">
                                    <!-- <img src="images/update.png"> -->
                                    <p>Update profile</p>
                                    <spam></spam>
                                </a>
                                <a href="#" class="sub-menu-link">
                                    <!-- <img src="images/edit.png"> -->
                                    <p>Edit profile</p>
                                    <spam></spam>
                                </a>
                                <a href="#" class="sub-menu-link">
                                    <!-- <img src="images/change password.jpeg"> -->
                                    <p>Change profile</p>
                                    <spam></spam>
                                </a>
                                <a href="#" class="sub-menu-link">
                                    <!-- <img src="images/password reset.jpg"> -->
                                    <p>Password Reset</p>
                                    <spam></spam>
                                </a>
                                <a href="#" class="sub-menu-link">
                                    <!-- <img src="images/order.png"> -->
                                    <p>My Orders</p>
                                    <spam></spam>
                                </a>
                                <a href="logout-user.php" class="sub-menu-link">
                                    <!-- <img src="images/logout.jpg"> -->
                                    <p>Log out</p>
                                    <spam></spam>
                                </a>
            
                            </div>
                        </div>
                        <script>
                            let subMenu = document.getElementById("subMenu");
                    
                            function toggleMenu(){
                                subMenu.classList.toggle("open-menu");
                            }
                    
                        </script>
                    
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
                <li data-target="#header-carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="image/hp1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"></h6>
                            <h3 class="display-3 text-capitalize text-white mb-3"></h3>
                            <p class="mx-md-5 px-5"></p>
                            <!-- <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#"></a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="image/hp2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Art-Empire : Your All-in-one art hub</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">!! Art Tools !!</h3>
                            <p class="mx-md-5 px-5">Here you can explore all types of art tools.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="typesOfArtTool.php">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="image/hp3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Art-Empire : Your All-in-one art hub</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">!! Art Information !!</h3>
                            <p class="mx-md-5 px-5">Here you can explore all kinds of arts.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="typesOfBasicArt.php">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="image/hp4.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Art-Empire : Your All-in-one art hub</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">!! Art Online Shop !!</h3>
                            <p class="mx-md-5 px-5">Here you can buy piece of arts.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="image/hp5.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Art-Empire : Your All-in-one art hub</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">!! Art Tutorial !!</h3>
                            <p class="mx-md-5 px-5">Here you can learn virtually.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="artstutorial.php">Read More</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
                <h1>Art-Empire Services</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="image/sv1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Online Learning</h4>
                    <p class="text-white px-3 mb-3">It can 
                        hosts a variety of art tutorials,ranging from beginner to advanced levels.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="artstutorial.php">Know More</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="image/sv2.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Online Shopping</h4>
                    <p class="text-white px-3 mb-3">Artists can also able to buy a art accessories through this app</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Know More</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="image/sv3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Art Tools</h4>
                    <p class="text-white px-3 mb-3">It is a platform in which you can explore all types of art tools</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="typesOfArtTool.php">Know More</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="image/sv4.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Types of Arts</h4>
                    <p class="text-white px-3 mb-3">it is a platform which has information about variety 
                        of art forms.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="typesOfBasicArt.php">Know More</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="image/aboutus1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">About Us</h4>
                    <p class="text-white px-3 mb-3">Know more about as.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="image/feedback.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Feedback</h4>
                    <p class="text-white px-3 mb-3">Give your valuable feedback.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="image/contactus1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Contact Us</h4>
                    <p class="text-white px-3 mb-3">Contact with us.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="contact1.php">Click Here</a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Service End -->


    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="image/art.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">About This</h6>
                        <h1 class="mb-4">ART THERAPY PROFESSION</h1>
                        <p>Art therapy is a mental health profession that enriches the lives of individuals, families, and communities through active art-making, creative process, applied psychological theory, and human experience within a psychotherapeutic relationship.</p>
                        <p>Art therapy, facilitated by a professional art therapist, effectively supports personal and relational treatment goals as well as community concerns.</p>
                       <p>Art therapy is used to improve cognitive and sensorimotor functions, foster self-esteem and self-awareness, cultivate emotional resilience, promote insight, enhance social skills, reduce and resolve conflicts and distress, and advance societal and ecological change.</p>
                        <!-- <a href="" class="btn btn-primary mt-2">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->




    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Famous Artist</h6>
                    <h1 class="mb-5">Inspirational Quotes </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="image/art q1.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Pablo Picasso</h5>
                                <p class="m-0"></p>
                            </div>
                            <div class="team-social bg-dark text-center">
                               <a href="#">Pablo Picasso</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="image/art q2.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Albert Einstein</h5>
                            </div>
                            <div class="team-social bg-dark text-center">
                          <a href="#">Albert Einstein</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="image/art q3.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Ralph Waldo Emerson</h5>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <a href="#">Ralph Waldo Emerson</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="image/art q4.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Jerzy Kosinski</h5>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a href="#">Jerzy Kosinski</a>
                                <!-- <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/testimonial.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>