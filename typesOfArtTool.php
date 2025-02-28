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
            <a href="#" class="desktop-item">Go To Tools</a>
            <input type="checkbox" id="showDrop">
            <label for="showDrop" class="mobile-item">Arts</label>
            <ul class="drop-menu">
              <!-- <li><a href="dress.html">Dressing Culture</a></li> -->
              <li><a href="#typesofbrushes">Types of Brushes</a></li>

              <li><a href="#typesofpencils">Types of Pencils</a></li>
              <li><a href="#typesofpaints">Types of Paints</a></li>
              <li><a href="#typesofpens">Types of Pens</a></li>

           
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
              <h3 class="text-white display-3 mb-4">Differents Types of Arts Tools</h3>
              <div class="d-inline-flex align-items-center text-white">
                  <p class="m-0"><a class="text-white" href="">Home</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Explore More</a></p>
                  <i class="far fa-circle px-3"></i>
                  <p class="m-0"><a class="text-white" href=""> Types of Arts Tools</a></p>
              </div>
          </div>
          <!-- <p id="typesofbrushes"></p> -->
          <i id="typesofbrushes"></i>

      </div>
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;

  color: white;
}
h1 {
  text-align: center;
  margin: 2rem 0;
  font-size: 2.5rem;
}
.tool{
    width: 90%;
    padding-top: 0.5cm;
    padding-bottom: 0.5cm;
    margin-left: 2cm;
    margin-right: 2cm;
    background-color: #34495e;
    border-radius: 1rem;
}
.accordion {
  width: 90%;
  max-width: 1000px;
  margin: 2rem auto;
}
.accordion-item {
  background-color: #fff;
  color: #111;
  margin: 1rem 0;
  border-radius: 0.5rem;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.25);
}
.accordion-item-header {
  padding: 0.5rem 3rem 0.5rem 1rem;
  min-height: 3.5rem;
  line-height: 1.25rem;
  font-weight: bold;
  display: flex;
  align-items: center;
  position: relative;
  cursor: pointer;
}
.accordion-item-header::after {
  content: "\002B";
  font-size: 2rem;
  position: absolute;
  right: 1rem;
  background-color: pink;
}
.accordion-item-header.active::after {
  content: "\2212";
}
.accordion-item-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.accordion-item-body-content {
  padding: 1rem;
  line-height: 1.5rem;
  border-top: 1px solid;
  border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
  background-color:lightgoldenrodyellow;
}
ul{
    padding-left: 20px;
    
    text-align: justify;
    
}
ul li p{
    font-weight: 500;padding: 5px;
    margin-right: 1cm;
}
.img1 {
    float: right;
    width: 300px;
    height: 300px;
    overflow: hidden;
    margin: 0 auto;
    padding: 30px;
    
}

.img1 img {
    width: 100%;
    transition: 0.5s all ease-in-out;
    border-radius: 1rem;
    
}

.img1:hover img {
    transform: scale(1.5);
    border-radius: 1rem;
}
@media(max-width:767px) {
  html {
    font-size: 14px;
  }
}

    </style>
    

</head>


    <h1 style="color: black;" > Types of Brushes</h1>
    <div  class="tool">
<div class="accordion">
  <div class="accordion-item">
    <div class="accordion-item-header">
      1.  Round Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/round brush.jpg" alt="imground" />
        </div>
       <ul>
        <li>
            <p>In round paintbrushes, both the handle and the bristles are rounded (hence the name). When holding a round paintbrush, it feels like a pencil and fits nicely in your hand. </p>
        </li>
        <li><p>Most round paintbrushes tend to be narrow, perfect for making thin lines. You can use them for adding detail over washes of color or for smaller areas where you need accuracy.</p> </li>
       
       <li>
    <p>Round paintbrushes can have a round or slightly pointed tip. The pointed tip allows for even more precision. That can also come in handy when outlining your painting. </p>
       </li></ul>
       
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
      2.  Pointed Round Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/pointed round brush.jpg" alt="imground" />
        </div>
        <ul>
            <li><p>The pointed round paintbrush is ideal for your most intricate details or fine lines. The handle and tip are circular like a pencil but taper down to a very pointed finish. </p></li>
            <li><p>Many artists rely on pointed round brushes for touching up their finished artwork. It provides the precision you need to add or alter tiny details.  </p></li>
            <li><p>With both the round and pointed round brush, you’ll want to use thinner paint. They don’t work well with thick paint.  </p></li>
            
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
       3.  Flat Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/flat brush.jpg" alt="imground" />
        </div>
       <ul>
        <li><p>The flat artist paint brush is the little brother of the wash brush. It has a similar shape but is smaller, making it more versatile. </p></li>
        <li><p>A flat brush looks square, and most tend to have medium or long hairs. It’s perfect when you need to cover a lot of space and more control than a wash brush provides. </p></li>
        <li><p>You’ll find that flat brushes are easy to maneuver and manipulate. It’s easy to create straight lines, and they apply color smoothly and consistently.</p></li>
        <li><p>Plus, you can turn them on their side to create fine lines. But they are equally useful for bold, vivid strokes. So, they provide the best of both worlds.</p></li>

       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        4. Bright Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/bright brush.jpg" alt="imground" />
        </div>
        <ul>
            <li><p>The bright is an alternative to the flat brush with its unique uses and style. </p></li>
            <li><p>Compared to flat brushes, the bright paintbrush tends to have shorter hairs. That allows for more control and shorter, less swooping strokes. </p></li>
            <li><p>It may have slightly more curved bristles, creating a shape that tapers towards the tip. But you’ll still get those straight lines and clean edges like with a flat brush. </p></li>
            <li><p>The bright is ideal when working with thick paint or applying heavy color on the page. It’s best to work up close with this kind of paintbrush. </p></li>
    
           </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        5. Filbert Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/filbert brush.jpg" alt="imground" />
        </div>
        <ul>
            <li><p>The filbert is another long bristled brush, this time with an oval tip. The bristles are arranged to be flat rather than round. It’s like the perfect mix of a round and a flat paintbrush. </p></li>
            <li><p>It’s one of the more versatile brushes with many different uses. The filbert is popular with abstract painters who don’t work in clean, defined lines.</p></li>
            <li><p>If you want a solid block of color without clear brush strokes, you can turn the filbert on its side. But it’s just as helpful for creating linear or broad strokes and filling large areas.</p></li>
            <li><p>You’ll also find the filbert comes in handy when you need to blend areas. The best way to discover all the uses of the filbert brush is to pick one up and have a go! </p></li>
    
           </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        6. Egbert Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/egbert brush.jpg" alt="imground" />
        </div>
       <ul>
        <li><p>A less common brush, it’s still worth knowing about the Egbert. It looks like a filbert brush but with much longer bristles. </p></li>
        <li><p>These brushes work best with a thin layer of paint rather than thick paint. You can use it to apply washes over large areas. But it’s also very flexible depending on how you hold it and whether you use a light or heavy touch. </p></li>
        <li><p>It does take some skill to use an Egbert paint brush, but the best way to learn is through practice.</p></li>
        <li><p>The Egbert is not an essential paintbrush. But it can make a nice addition to your toolbox as you become more confident and skilled. </p></li>

       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        7. Angular Flat Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/angular flat brush.jpg" alt="imground" />
        </div>
       <ul>
        <li><p>Here we have another flat brush. But what differs in this brush is that the bristles are cut at an angle. </p></li>
        <li><p>The angular flat is your brush when you want to make smooth, curved strokes. </p></li>
        <li><p>That small tip is perfect when you need to be precise. For example, you can use it to get into finicky corners and for fine details. </p></li>
        <li><p>But it’s another multipurpose brush that can cover wide areas with large brush strokes. It’s versatile and deserves a spot in your painting toolbox. </p></li>

       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        8. Fan Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/fan brush.jpg" alt="imground" />
        </div>
       <ul>
        <li><p>As the name suggests, the bristles of this brush are spread out like a fan. That makes it a unique brush with specific uses. </p></li>
        <li><p>You won’t use this brush for large areas, but it can come in handy at times. Especially if you want to create some special effects, lines, or dots on your painting.</p></li>
        <li><p>If you have a natural fan brush, you can use it to blend different colors. It also comes in handy for feathering effects.</p></li>
        <li><p>In contrast, synthetic brushes work best if you want to create patterns and textures. Some examples include clouds, leaves, water, trees, pebbles, and grass.</p></li>

       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        9. Detail Round Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/detail round brush.jpg" alt="imground" />
        </div>
       <ul>
        <li><p>The detail round brush is a variation of the regular round brush. It has a shorter handle, allowing you even more control over the brush. As a result, you should pick this one up for the most intricate sections or tiny details. </p></li>
        <li><p>The detailed round is all about control and accuracy. As you can see, it’s no use for thicker lines or washes. But it’s still very handy, so you should definitely invest in one of these brushes! </p></li>
        

       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        10. Wash Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/wash brush.jpg" alt="imground" />
        </div>
       <ul>
        <li><p>You’ll notice the wash brush as it’s the biggest paintbrush of them all. That’s because (as the name hints) it’s designed for large washes.  </p></li>
        <li><p>The wash brush is large, with longish bristles and a square tip. You can use it with thick or thin paper to cover huge areas of the canvas at a go.  </p></li>
        <li><p>While it’s most often used for large strokes, you can turn it on its side. Then, it’s possible to use the edge for thinner lines. That can also come in useful if you want straight, clean edges without any flaws. </p></li>

       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
        11. Liner Brush
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <div class="img1">
            <img src="arttoolsimages/brushes/liner brush.jpg" alt="imground" />
        </div>
       <ul>
        <li><p>If you want an even thinner brush than the detailed round, go for a liner. </p></li>
        <li><p>Liner brushes are the most pointed, thin brushes out there. They have long natural or synthetic bristles and are made for fine lines and little details. </p></li>
        <li><p>Other names for liners include rigger brushes or sword brushes if the tip is angled.</p></li>
        <li><p>When you’re working on a painting that calls for intricacy, you’ll be glad to have a liner brush at hand. It’s even possible to create fine lettering with a liner brush.</p></li>

       </ul>
       <i id="typesofpencils"></i>
      </div >
    </div>
  </div>
  
</div>
</div>

<h1 style="color: black;" > Types of Pencils</h1>
<div  class="tool">
  <div class="accordion">
    <div class="accordion-item">
      <div class="accordion-item-header">
        1.Graphite Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/Graphite Pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                The graphite pencil is the most common of all the different pencil types and is what most of us are all familiar with. Lead or graphite is made from a mixture of clay and graphite, and depending on the amount of these two materials, it will determine the darkness and hardness of the pencil.
              </p>
          </li>
          <li>
              <p>
                graphite lead embedded in a wooden shaft. It is mainly used for artistic sketching and drawing, for stenography or notes. Its benefits are the simple usage as well as being able to remove what you've drawn with an eraser.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        2.Solid Graphite Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/solid graphite pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                The solid graphite pencil also referred to as a woodless pencil, is a pencil that consists of solid graphite without the wooden casing like a normal pencil. The diameter is similar to an ordinary pencil with a wooden casing. The advantage of this pencil is that it can cover a larger area in a lot quicker time. The pencil can also create different effects and is more economical as you use the entire pencil. These pencils are also available in the same hardness and grades as the ordinary graphite pencil and are used mainly by artists for drawing and art.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        3.Liquid Graphite Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/liquid graphite pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Liquid graphite pencils were first invented in 1955 and are also referred to as “Liquid Lead” as they can write like a pen. The liquid graphite pencils come in different shades like yellow, red, blue, and gray. You can use a nib, brush, or any other type of art tool to apply it. The liquid graphite pencil is used by artists to create pencil sketches and genuine graphite pencil effects using a liquid. 
              </p>
          </li>
          <li>
              <p>
                Liquid graphite pencils are pencils that write like pens.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        4.Charcoal Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/charcoal pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                The charcoal pencil is made entirely of charcoal and can create high contrast and rich tones, better than the graphite pencil. However, it smudges fairly easily and is a lot more abrasive on your paper than the graphite pencil, and is a lot more brittle. This type of pencil is perfect for writing as it is very easy just to wipe off the charcoal from your paper if you make a mistake. 
              </p>
          </li>
          <li>
              <p>
                Charcoal pencils can be used for drawing, sketching or smudging. Because of their point, charcoal pencils are best used for detailed drawings and showcasing the highlights and shadows of your subjects.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        5.Carbon Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/carbon pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                The carbon pencil is made from a mixture of lamp black and clay, or a blend of graphite and charcoal, and has a uniform and reliable softness that has exceptional texture and blending capabilities. The carbon pencil produces thick and deeper black lines than the graphite pencil, which are difficult to erase. 
              </p>
          </li>
          <li>
              <p>
                The carbon pencil is the perfect combination of charcoal and graphite. It has a fine grain, and goes on smoothly and precisely in rich, velvety, matte black lines. Carbon pencils have a consistent softness, for superior blending and texture.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        6.Colored Pencils or Crayons
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/colored or crayons pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Colored pencils are made from colored pastels, chalk, and charcoal with an oil or wax-based core that contains binding agents, additives, and pigments. There is also a water-soluble pastel or colored pencil available. They come in a wide range of colors including white, which is perfect for giving shadow or lightening darker colors when creating a drawing. These pencils are often used by architects and children for drawing and coloring, as they are easy to use and are non-toxic.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        7.Watercolor Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/watercolour pencils.JPG" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                The watercolor pencil also referred to as “The Water-soluble Pencil” is a very versatile pencil as it can be used in a dry state like a normal pencil, and produces bold sharp lines. However, it can also be used in a wet state, where it will produce a watercolor effect, and can be spread by using a brush
              </p>
          </li>
          <li>
              <p>
                They are used to draw and colour in the same way as conventional pencils, but their colours bloom when passed over with a wet brush. They can be used dry or wet, yielding both precise lines and light, airy textures.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 
 
    <div class="accordion-item">
      <div class="accordion-item-header">
        8.Mechanical Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/mechanical pencils.JPG" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                The mechanical pencil is similar to the ballpoint pen and comes with a metal or plastic frame. The lead is then pushed through a hole at the point of the pencil frame when you click the pencil. They are manufactured with two different types of mechanisms; the propelling pencil where the internal mechanism forces the lead out of the frame.
              </p>
          </li>
          <li>
              <p>
                A mechanical pencil, also clutch pencil, is a pencil with a replaceable and mechanically extendable solid pigment core called a "lead" /ˈlɛd/. The lead, often made of graphite, is not bonded to the outer casing, and can be mechanically extended as its point is worn away as it is being used.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        9.Erasable Coloring Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/erasable coloring pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
            <p>
              Crayola Erasable Colored Pencils are made with thick, soft lead, so they won't break easily under pressure. Kids will love to use these durable, vibrant pencils. Small enough to fit in a book bag, this portable box holds a variety of colors.  
            </p>
          </li>
          <li>
              <p>
                Unlike wax pencils, erasable colored pencils can be erased. They are also useful as their markings stand out, and for this reason, copy-editors prefer them. They can be used to create an outline, and then later you can use colored wax-based pencils or watercolor paints to fill in, making this pencil perfect for sketching.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        10.Golf Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/golf pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                The golf pencil is also referred to as a library pencil, as libraries offer them to students as a disposable and leak-proof writing instrument. As its name implies, it is used for keeping score in a game of golf and is a very cheap and short pencil at about 3.5 inches long. Since they are so short and cheap, they are ideal for use by small children as they can use them to practice writing figures and letters. 
              </p>
          </li>
          <li>
              <p>
                The golf pencil is also commonly known as a short pencil, mini pencil, or hotel pencil and refers to a short-sized pencil, which is about three and a half inches long.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 
 
    <div class="accordion-item">
      <div class="accordion-item-header">
        11.Carpenter Pencils
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pencils/carpenter pencils.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                A carpenter pencil that was used by German carpenters dates back to the 17th century and is now the oldest pencil that Faber-Castell has in their collection. This pencil has two main properties, its shape that it has and the strength of the graphite. The pencil is rectangular, which makes it easy to grasp and stops the pencil from rolling around. The tough strong lead allows you to draw easily on stucco or cement-based colored plaster, rough wood as well as sheets of wood like plywood. The lead is easy to sharpen by using a razor-edged tool or box cutter. 
              </p>
          </li>
          <li>
              <p>
                
              </p>
          </li>
          </ul>
          <i id="typesofpaints"></i>

        </div>
      </div>
    </div> 
  </div>
</div>
</div>

<h1 style="color: black;"> Types of Paints</h1>
<div  class="tool">
  <div class="accordion">
    <div class="accordion-item">
      <div class="accordion-item-header">
        1.Acrylic Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/acrylic paint 1.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Acrylic paint is a fast-drying paint made with a synthetic polymer binder. It is known for its versatility and ability to mimic the appearance of oil paints, making it a popular choice for artists working in various styles and techniques. It is also water-soluble, which means it can be thinned with water and easily cleaned up with soap and water.
              </p>
          </li>
          <li>
              <p>
                Acrylic paint is also highly pigmented, meaning it has an intense, vibrant color when applied to a surface. It can be thinned with water to create a translucent wash or used in a thick, opaque manner to create texture and impasto effects. 
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        2.Blacklight Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/blacklight paint 2.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Blacklight paint is a type of paint that glows under black light, making it a popular choice for light art installations, murals, and other works that are intended to be viewed in low-light conditions. It is available in various colors, from neon hues to more muted shades, allowing artists to create a wide range of effects.
              </p>
          </li>
          <li>
            <p>
              One of the main advantages of blacklight paint is that it creates a unique visual effect that cannot be achieved with regular paint. When viewed under a black light, the paint appears to glow and emit a bright, radiant color, adding an otherworldly, surreal quality to the artwork.
            </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        3.Body Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/body paint1.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Body paint is a thick, opaque paint with a heavy pigment load. It is often used for texture and impasto effects in painting techniques, as well as for body painting style, costume design, and special effects makeup. Body paint is available in various colors and can be used with other materials, such as glitter or rhinestones, to create more complex effects.
              </p>
          </li>
          <li>
              <p>
                Performance art, body art, and special effects makeup are the styles associated with body paint. Prominent artists and some examples of art pieces showcasing body paint’s unique qualities 
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        4.Encaustic Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/encaustic paint1.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Encaustic paint is a type of paint made with pigments mixed into hot beeswax. It has a luminous, translucent quality and a slow drying time, making it a unique and challenging medium for artists to work with.
              </p>
          </li>
          <li>
              <p>
                One of the main advantages of encaustic painting is its luminous, glowing quality, which creates a sense of depth and dimension in the artwork. It is also highly malleable, allowing artists to carve, scrape, and texture the paint while it is still liquid. However, encaustic painting requires specialized tools and equipment, such as a heated palette or encaustic iron, to work with it, and it can be challenging to achieve a consistent result due to its slow drying time.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        5.Fabric Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/fabric paint1.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Fabric paint is a type of paint specifically formulated for use on fabric. It is often used to decorate clothing, accessories, and other textile items and is available in a wide range of colors and finishes, including matte, satin, and metallic. 
              </p>
          </li>
          <li>
              <p>
                One of the main advantages of fabric paint is that it allows artists to create custom designs and patterns on fabric items, adding a personal touch to their wardrobe or home decor. However, it is essential to note that fabric paint is not as permanent as regular paint and may fade or crack over time, exceptionally if it is not cared for properly.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        6.Gouache Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/Gouache paint1.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Gouache paint is an opaque watercolor with a higher pigment load and a matte finish. It is often used for illustrations, design work, and more traditionally acceptable art applications. 
              </p>
          </li>
          <li>
            <p>
              One of the main advantages of gouache paint is its opacity, which allows artists to create solid, vibrant colors that are not transparent like watercolor. However, gouache paint can be challenging to achieve subtle gradations and washes of color, as it tends to produce more solid, flat areas of color. It is also not as flexible as watercolor, as it cannot be reactivated with water once it has dried.
            </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        7.Ink Wash Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/ink wash paint1.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Ink wash painting is a type of paint made with water and ink. It is known for its ability to create delicate, transparent washes of color, making it a popular choice for calligraphy and other brushwork techniques.
              </p>
          </li>
          <li>
              <p>
                One of the main advantages of ink wash painting is its ability to create a wide range of tones and values with just a single color. However, ink wash painting is not as vibrant or pigmented as other paints and can be challenging to control, as it can quickly spread and feather when applied to a wet surface
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        8.Oil Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/oil paint2.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Oil paint is a slow-drying paint made with pigments suspended in a medium of drying oil, such as linseed or poppyseed oil. It is known for its ability to create rich, luminous colors and its versatility in various art styles and techniques. 
              </p>
          </li>
          <li>
              <p>
                One of the main advantages of oil painting is its ability to create a wide range of effects, from smooth, glossy surfaces to thick, textured impasto. However, oil painting has a slow drying time, which can be frustrating for artists who prefer to work quickly or layer their paintings rapidly.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        9.Pastel Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/pastal paint1.jpg" alt="imground" />
          </div>
         <ul>
          <li>
            <p>
              Pastel paint is a soft, powdery paint with a high concentration of pigment and minimal binder. It is available in a wide range of colors and is known for its delicate, luminous quality and ability to create subtle gradations of color. 
            </p>
          </li>
          <li>
              <p>
                Pastel paint can create a wide range of tones and values with just a single color. By layering and blending different pastel sticks, artists can create complex, nuanced compositions. However, pastel paint is not as permanent as oil or acrylic paint and is prone to smudging, fading, and discoloration.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        10.Spray Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/spray paint1.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Spray paint is a type of paint that is applied to a surface using a can fitted with a spray nozzle. It is known for its quick drying and even application, making it a popular choice for murals, graffiti, and other types of street art.
              </p>
          </li>
          <li>
              <p>
                Spray paint’s advantages are its speed and ease of use. It can be applied quickly and evenly to a large surface, making it a good choice for artists working on a tight deadline or who need to cover a large area with a single color. However, spray paint is not as permanent as oil or acrylic paints and is prone to fading and discoloration over time.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 
 
    <div class="accordion-item">
      <div class="accordion-item-header">
        11.Tempera Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/tempera paint2.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Tempera paint is a fast-drying paint made with pigments mixed with a water-soluble binder, such as egg yolk or casein. It has a matte finish and is known for its ability to create bright, flat areas of color. 
              </p>
          </li>
          <li>
              <p>
                Tempera paint is relatively non-toxic and easy to clean up, making it a popular choice for educational and children’s art activities. Tempera paint is also relatively inexpensive and widely available, making it a good choice for artists on a budget. However, tempera paint is not as versatile as other paints, as it cannot be thinned with water or used to create thick, textured effects. 
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-item-header">
        12.Watercolor Paint
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/paints/watercolour paint1.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Watercolor paint is a transparent paint made with pigments suspended in a medium of water and a binder, such as gum arabic. It is known for its delicate, luminous quality and ability to create subtle gradations of color.
              </p>
          </li>
          <li>
              <p>
                Watercolor paint can create a wide range of tones and values with just a single color. By layering and blending different washes of color, artists can create complex, nuanced compositions. But, watercolor paint is not as permanent as oil or acrylic paints and is prone to fading and discoloration over time. It is also not as versatile as other paints, as it cannot create thick, textured effects or cover large areas with a single color. 
              </p>
          </li>
          </ul>
          <i id="typesofpens"></i>

        </div>
      </div>
    </div>
  </div>
</div>

<h1 style="color: black;" id="typesofpens"> Types of Pens</h1>
<div  class="tool">
  <div class="accordion">
    <div class="accordion-item">
      <div class="accordion-item-header">
        1.Brush Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
            <img src="arttoolsimages/pens/brush pen.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Brush pens are a popular choice among artists because they offer a lot of versatility. These pens have a soft, brush-like tip that can be used to create both thick and thin lines. Brush pens come in both water-based and alcohol-based ink. Most water-based inks are water soluble. Alcohol-based ink is more vibrant and has a longer lasting finish. 
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 
 
    <div class="accordion-item">
      <div class="accordion-item-header">
        2.Marker Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/marker pen.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Markers are ideal for artists who want to add some colour to their drawings. They come in both water-based and alcohol-based ink and in various different nib shapes and colours.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        3.Watercolor Marker Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/watercolour marker pen.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Watercolour markers are made from water soluble pigment ink. This means that you can activate the markers with water, to make the ink disperse across the paper in washes. One way to use watercolour markers is to swatch colours on a porcelain or plastic palette, then wet a brush and pick up the colour from the palette to paint on paper.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        4.Fountain Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/fountain pen.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Fountain pens make for an excellent drawing tool. With the right fountain pen, you will be able to achieve consistent fine lines and precision, perfect for line drawing, contour drawing and hatching techniques. Fountain pens have a nib, which is the part that touches the paper and a reservoir, which holds the ink. The ink flows from the reservoir to the nib via a feed.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        5.Ball Point Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/ball point pen.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Ballpoint pens have a ball point that distributes ink onto the paper as you write or draw. The ink is usually oil based and more viscous than the ink used in rollerball pens. 
              </p>
          </li>
          <li>
              <p>
                To some extent, you can vary the line thickness and darkness with the amount of pressure applied to a ballpoint pen, however this isn’t possible with a rollerball pen. People often get confused between ballpoint and rollerball pens, ballpoint pens are the pens often used in schools and workplaces for writing, they’re cheap and most pens are disposable. Bic is an example of a popular ballpoint brand.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        6.Roller Ball Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/roller ball pen.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Rollerball pens also have a ball point that distributes ink onto the paper as you write or draw. The ink is usually water based and less viscous than the ink used in ballpoint, making them ideal for artists who want to quickly lay down even lines. Rollerball pens come in both disposable and refillable varieties.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        7.Paint Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/paint pen.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Paint pens have a fine tip and are filled with paint, making them perfect for adding details and colour to your drawings. They can be used on a variety of surfaces including paper, wood, fabric and glass. Paint pens usually come in either water or oil based ink formulations.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        8.Gel Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/gel pen.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Gel pens have a water based gel ink that is contained in a plastic tube. The ink is thicker than ballpoint and rollerball inks, giving you the ability to produce bold lines. Gel pens are available in a wide variety of colours, including metallic, glitter and pastel shades.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 

    <div class="accordion-item">
      <div class="accordion-item-header">
        9.Felt-tips Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/felt tips.jpeg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                Felt-tip pens contain a quick-drying water-based ink and are used more for smaller projects, coloring, and writing. The felt tip nib is what holds and dispenses the ink and can be used as a fine liner but can also have broader tips. The pens offer a variety of vibrant colors that are smear-proof. They provide permanent markings but are not lightfast.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 
  
    <div class="accordion-item">
      <div class="accordion-item-header">
        10.fineliner or pigment liner Pen
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <div class="img1">
              <img src="arttoolsimages/pens/fineliner pen.jpg" alt="imground" />
          </div>
         <ul>
          <li>
              <p>
                These offer similar precision applications as the technical pens and come in different tip sizes. These are a popular choice of pen and can be used for technical drawing, sketching, cartoon art, illustrating calligraphy, and more. The pens most commonly come in black ink, but there are also different colors available.
              </p>
          </li>
          </ul>
         
        </div>
      </div>
    </div> 
  </div>
</div>



<script>
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});
</script>
    </body>
    </html>