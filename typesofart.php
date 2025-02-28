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
    <link rel="stylesheet" href="css/typesofartcss.css">
    <!-- <link rel="stylesheet" href="dresscss.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
      <div class="logo"><a href="#">!!Type of Arts!!</a>
        <!-- <div class="logo"><a href="#">!!Dressing Cultures!!</a> -->
    </div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="home.php">Home</a></li>
        <!-- <li><a href="food.html">Food</a></li>

        <li><a href="wonders.html">Wonders</a></li>
        <li><a href="festival.html">Festival</a></li>
        <li><a href="art.html">Arts</a></li> -->
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

              <!-- <li><a href="dance.html">Dance Cultures</a></li>

              <li><a href="map.html">Map</a></li> -->
              <!-- <a href="">languages</a> -->
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
            <!-- <li><a href="dress.html">Dressing Culture</a></li>
            <li><a href="food.html">Food Culture</a></li>
            <li><a href="wonders.html">Wonders Culture</a></li>
            <li><a href="#">Drop menu 4</a></li> -->
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
                <div class="row">
                   
                    <ul class="mega-links" >
                        <li><a href="#madhubani">Madhubani Painting</a></li>
                        <li><a href="#miniature">Miniature Painting</a></li>
                        <li><a href="#warli">Warli Painting</a></li>
                        <li><a href="#pattachitra">Pattachitra Painting</a></li>
                        <!-- <li><a href="#chhattisgarh">Chhattisgarh </a></li>
                        <li><a href="#goa">Goa </a></li>
                        <li><a href="#gujarat">Gujarat </a></li>
                        <li><a href="#haryana">Haryana </a></li> -->
                    </ul>
                </div>
              <div class="row">
               
                <ul class="mega-links">
                    <li><a href="#kalamkari">Kalamkari Painting </a></li>
                    <li><a href="#phad">Phad Painting </a></li>
                    <li><a href="#tanjore">Tanjore Painting</a></li>
                    <li><a href="#kalighat">Kalighat Painting </a></li>
                    <!-- <li><a href="#kerala">Kerala </a></li>
                    <li><a href="#madhayapradesh">Madhya Pradesh </a></li>
                    <li><a href="#maharashtra">Maharashtra </a></li>
                    <li><a href="#manipur">Manipur </a></li> -->
                </ul>
              </div>
              <div class="row">
               
                <ul class="mega-links">
                    <li><a href="#gond">Gond Painting </a></li>
                    <li><a href="#mysore">Mysore Painting </a></li>
                    <li><a href="#rajput">Rajput Painting! </a></li>
                    <li><a href="#cheriyal">Cheriyal Scrolls </a></li>
                    <!-- <li><a href="#punjab">Punjab </a></li>
                    <li><a href="#rajasthan">Rajasthan </a></li>
                    <li><a href="#sikkim">Sikkim </a></li>
                    <li><a href="#tamilnadu">Tamil Nadu </a></li> -->
                </ul>
              </div>
              <div class="row">
               
                <ul class="mega-links">
                    <li><a href="#mughal">Mughal Painting</a></li>
                    <li><a href="#pichwai">Pichwai Painting </a></li>
                    <li><a href="#kerala">Kerala Mural</a></li>
                    <li><a href="#bhil">Bhil Painting </a></li>
                    <!-- <li><a href="#westbengal">West Bengal </a></li> -->
                </ul>
              </div>
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
              <h3 class="text-white display-3 mb-4">Different Types of Traditional Arts</h3>
              <div class="d-inline-flex align-items-center text-white">
                  <p class="m-0"><a class="text-white" href="">Home</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Explore More</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0">Types of Arts</p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> traditional arts</a></p>
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
  <li id="liID"><a  href="typesOfBasicArt.php">Types Of Basic Arts</a></li>
  <li id="liID"><a class="active1" href="typesofart.php">Types of Traditional Arts</a></li>

</ul>
        </div>
 
        
    <!-- copypaste -->
        <div class="section-container" id="madhubani">
            <div class="columns image" style="background-image:url('images/madhubani\ painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Madhubani Painting!!</h5>
                    <p><br>
                        Also known as Mithila Painting, Madhubani is an art form that originated in the Madhubani district of Bihar. 
                    </p>
                    <p><br>
                        It is not a modern art form, Madhubani Paintings have been in practice since Satya Yuga (in Hinduism there are four yugas, and Satya Yuga is the first of all four and lasted for 1,728,000 years).<br>
    
                    </p><br>
                    <p>
                        These paintings are mostly practiced by women and they use geometrical shapes in the paintings. Madhubani paintings are devoted to god, flora, and fauna.
                    </p><br>
                    <p>
                        There is often a representation of god surrounded by women, trees, and nature in this art. 
This illustrates their desire to be one with the god self.</p>
                </div>
            </div>
        </div>

        <div class="section-container" id="miniature">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Miniature Painting!!</h5>
                    <p><br>
                        This art form originated around the 16th and 17th centuries during the Mughal era, but Miniature Paintings’ history can be traced a long time back to the 7th century.
                    </p>
                    <p><br>
                        The name miniature is because of its size, and the components of this art form are mainly the scenes of courts, hunting, battlegrounds, receptions, etc.<br>
    
                    </p><br>
                    <p>
                        The paintings include three different art styles: Indian, Persian, and Islamic. 
                    </p>
                </div>
            </div>
            <div class="columns image" style="background-image:url('images/miniature\ painting.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

        <!-- copypaste -->
        <div class="section-container" id="warli">
            <div class="columns image" style="background-image:url('images/warli-painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Warli Painting!!</h5>
                    <p><br>
                        Warli Painting is considered one of the oldest Indian art forms as it originated in 2500 BCE by the Warli tribe – a tribe that lives in the region of western ghats of India, mainly in the district of Nasik and Thane of Maharashtra state.
                    </p>
                    <p><br>
                        The tribal people show the day-to-day activities in their paintings like weddings, farming, praying, hunting, dancing, etc.<br>
    
                    </p><br>
                    <p>
                        The minimalism of Warli Paintings tells everything about this art form as you will see the usage of squares and triangles in white color over the yellow, brown, or red sheet. 
                    </p>
                </div>
            </div>
        </div>

        <div class="section-container" id="pattachitra">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Pattachitra Painting!!</h5>
                    <p><br>
                        Pattachitra in Sanskrit means ‘image on canvas’ as Patta implies canvas and Chitra implies image or painting.
                    </p>
                    <p><br>
                        Pattachitra or Patachitra originated in the Indian states of Orissa and West Bengal and dated back around the 5th or 7th century.<br>
    
                    </p><br>
                    <p>
                        The main theme of this art form is mythology and another fact is that most of the paintings are influenced by the Vaishnava cult. And this is the reason why you see Lord Krishna in them.
                    </p>
                </div>
            </div>

            <div class="columns image" style="background-image:url('images/pattachitra-painting.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

        <!-- copypaste -->
        <div class="section-container" id="kalamkari">
            <div class="columns image" style="background-image:url('images/kalamkari-painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Kalamkari Painting!!</h5>
                    <p><br>
                        ‘Drawings with the pen’ or ‘pen-art’ is what Kalamkari means. This art form originated in the state of Andhra Pradesh.
                    </p>
                    <p><br>
                        Kalamkari paintings can be made in two different styles: Machilipatnam style and Srikalahasti style.<br>
    
                    </p><br>
                    <p>
                        Both styles originated in Andhra Pradesh, but from different states; the former is from Machilipatnam (and hence the nomenclature) and the latter from the Chittoor district.
                    </p><br>
                    <p>
                        Machilipatnam style is a block-printed art form while the Srikalahasti style is all about using the pen freely on a fabric.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-container" id="phad">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Phad Painting!!</h5>
                    <p><br>
                        The 30 or 15 feet-long piece of canvas or fabric on which the painting is made is called the ‘phad’ hence the name of the art form is Phad.
                    </p>
                    <p><br>
                        It originated thousands of years ago in the state of Rajasthan. The stories of the battles, hunting, and adventures are used to paint with colors like red, yellow, and orange.<br>
    
                    </p><br>
                    <p>
                        Phad also depicted the folk deities Pabuji and Devnarayan.
                    </p>
                </div>
            </div>
            <div class="columns image" style="background-image:url('images/phad-painting.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

        <!-- copypaste -->
        <div class="section-container" id="tanjore">
            <div class="columns image" style="background-image:url('images/tanjore-painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Tanjore Painting!!</h5>
                    <p><br>
                        Tanjore or Thanjavur Painting originated in the Thanjavur district of Tamil Nadu back in 1600 AD.
                    </p>
                    <p><br>
                        This traditional Indian art form was first painted under the Chola regime and flourished by the Nayakas of Thanjavur.<br>
    
                    </p><br>
                    <p>
                        Tanjore paintings’ style is similar to the Maratha, Deccani, and European styles. The painting is made on Palagai Padam, a colloquial for the wooden plank, on which the gold foil is used in a manner that makes this art form opulent.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-container" id="kalighat">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Kalighat Painting!!</h5>
                    <p><br>
                        Also known as Bengal Pat, Kalighat Painting originated around the 19th century in the Kalighat in Kolkata, West Bengal.
                    </p>
                    <p><br>
                        The paintings are made on the cloth or patta and at first, themed as mythology where gods and goddesses were depicted, but then the artisans started to use this form of art for social reform. 
                    </p><br>
                    <p>
                        Kalighat paintings were used to raise awareness among the public by creating art pieces like a priest with an unchaste woman or a cop taking bribes.
                    </p>
                </div>
            </div>

            <div class="columns image" style="background-image:url('images/kalighat-painting.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

        <!-- copypaste -->
        <div class="section-container" id="gond">
            <div class="columns image" style="background-image:url('images/gond-painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Gond Painting!!</h5>
                    <p><br>
                        One of the largest tribes in India, the Gond tribe which lives in Madhya Pradesh, originated the Gond painting 1400 years ago.
                    </p>
                    <p><br>
                        This traditional art form looks like it is a gift by the Gonds to mother nature as these paintings depicted only the flora and fauna.<br>
    
                    </p><br>
                    <p>
                        The components are made using acrylic paints but earlier the artisans would use colors derived from leaves, cow dung, plant sap, colored soil, etc. 
                    </p>
                </div>
            </div>
        </div>

        <div class="section-container" id="mysore">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Mysore Painting!!</h5>
                    <p><br>
                        Mysore painting is an invaluable style of traditional South Indian painting that developed in and around the city of Mysore in the state of Karnataka.
                    </p>
                    <p><br>
                        This art form was encouraged and favored by the Mysore emperors. Mysore paintings often include stories from Hindu gods and goddesses and Indian mythology, as do many other ancient and classical forms of art in India.
                    </p><br>
                    <p>
                        Mysore paintings stand out from other art forms because of their beauty, texture, and subtlety.
                    </p>
                </div>
            </div>
            <div class="columns image" style="background-image:url('images/mysore-painting.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

        <!-- copypaste -->
        <div class="section-container" id="rajput">
            <div class="columns image" style="background-image:url('images/rajput-painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Rajput Painting!!</h5>
                    <p><br>
                        Rajput painting, also known as Rajasthan art, was particularly popular in the 17th century in Rajputana, a region in northern India.
                    </p>
                    <p><br>
                        Artists educated in the Mughal miniature tradition, who had been expelled from the royal Mughal court, created styles that drew inspiration from regional painting traditions, particularly those depicting the Hindu sacred epics Mahabharata and Ramayana.<br>
    
                    </p><br>
                    <p>
                        It covered a variety of subjects but featured portraits of the royal family—often hunting or of their everyday lives—from epics or stories from Hindu mythology, as well as particular stylized depictions of unknown persons, which were generally well-liked.
                    </p>
                    <p>
                        Processing of certain minerals, plant sources, shellfish, and even valuable stones were used to extract the color. Silver and gold were used.   
                    </p>
                </div>
            </div>
        </div>

        <div class="section-container" id="cheriyal">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Cheriyal Scrolls!!</h5>
                    <p><br>
                        The Nakashi family has been practicing this extinct art form for many generations, and it has origins in the former Telangana.
                    </p>
                    <p><br>
                        The long scroll tradition and Kalamkari art both had an impact on the Cheriyal scrolls, a far more stylized form of Nakashi art.<br>
                    </p><br>
                    <p>
                        Each scroll has about 50 of them, similar to modern comic panels. Their use of vivid colors and colorful imagination stands in sharp contrast to the traditional rigor of Tanjore or Mysore paintings.
                    </p><br>
                    <p>
                        Saints traveled the region singing or reading the epics, and these 40–45 foot scrolls, which show the Puranas and epics, provided the required visual support.
                    </p>
                </div>
            </div>
            <div class="columns image" style="background-image:url('images/cheriyal-painting.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

        <!-- copypaste -->
        <div class="section-container" id="mughal">
            <div class="columns image" style="background-image:url('images/mughal-painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Mughal Painting!!</h5>
                    <p><br>
                        It is exclusively made as miniatures for book illustrations or as solitary pieces to be stored in albums. Mughal painting, a distinctly South Asian art form, is mostly North Indian painting (more precisely, modern-day India and Pakistan).
                    </p>
                    <p><br>
                        The origin of this art style during the 16th and 18th centuries at the court of the Mughal Empire was a Persian miniature painting, which also had some Chinese influences.<br>
    
                    </p><br>
                    <p>
                        Paintings have regularly depicted battles, tales, hunting scenes, animals, royal life, mythology, and other subjects.
                    </p><br>
                    <p>
                        The Muslim Mughal monarchs are credited with spreading Muslim (and notably Persian) arts and traditions throughout South Asia.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-container" id="pichwai">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Pichwai Painting!!</h5>
                    <p><br>
                        The term “Pichwai,” which is derived from the Sanskrit words “Pichh” for “back” and “wais” for “hanging,” refers to large holy Hindu painted paintings, generally on fabric, that portray Krishna.
                    </p>
                    <p><br>
                        It translates as “that which hangs from the back.” The Shrinathji Temple in Nathdwara, Rajasthan, is one of several Pushtimarg-style Hindu temples where they are most commonly made to hang.<br>
    
                    </p><br>
                    <p>
                        They hang behind Shrinathji, a localized representation of Krishna who serves as the center of Pushtimarg devotion, to symbolize his activities. Aurangabad was another location related to them.
                    </p><br>
                    <p>
                        Pichwais are written for a purpose other than aesthetics: to communicate Krishna tales to those who cannot read or write.
                    </p><br>
                    <p>
                        The collections of diverse images in temples are updated in line with the calendar of god-honoring feasts.
                    </p>
                </div>
            </div>
            <div class="columns image" style="background-image:url('images/pichwai-painting.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

        <!-- copypaste -->
        <div class="section-container" id="kerala">
            <div class="columns image" style="background-image:url('images/kerala-mural-painting.jpg')">
                &nbsp;
            </div>
            <div class="columns content" >
                <div class="content-container">
                    <h5 >!!Kerala Mural!!</h5>
                    <p><br>
                        Murals refer to the Hindu mythology-themed frescoes in Kerala. Mural painting traditions are prevalent across Kerala, home to many of India’s ancient temples and palaces.
                    </p>
                    <p><br>
                        The majority of them date to the ninth through the twelfth century CE, when this style of art was supported by the royal class.<br>
    
                    </p><br>
                    <p>
                        Despite receiving the support of several monarchs, Kerala’s native mural artists endured extreme hardship and even faced extinction under British control.
                    </p><br>
                    <p>
                        It is believed that the paintings of Tiruvanchikulam and the Thirunanthikarai Cave Temple, which is now a part of Tamil Nadu, are the earliest known examples of Kerala’s unique mural style.
                    </p>
    
                </div>
            </div>
        </div>
        <div class="section-container" id="bhil">
            <div class="columns content">
                <div class="content-container">
                    <h5 >!!Bhil Painting!!</h5>
                    <p><br>
                        Art is an important part of the Bhil community. They take part in all kinds of art forms and activities, one of which is their striking paintings.
                    </p>
                    <p><br>
                        Art is an important part of the Bhil community. They take part in all kinds of art forms and activities, one of which is their striking paintings. What makes Bhil painting unique is the presence of numerous dots, spreading skillfully throughout the artwork. <br>
    
                    </p><br>
                    <p>
                        The chosen bright, natural colours and the uniform pattern and dots fill the artwork with life, They showcase the peacefulness and beauty of mother nature through the art form.
                    </p>
                </div>
            </div>
            <div class="columns image" style="background-image:url('images/bhil\ paintaing.jpg')">
                &nbsp;
            </div>
        </div>
       <!-- copypaste -->

 
    </body>
    </html>