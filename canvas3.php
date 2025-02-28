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

<link rel='stylesheet' type='text/css' href='css/canvaStyle.css'>
        <script src="https://kit.fontawesome.com/28e5fa47e4.js" crossorigin="anonymous"></script>

   
 
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>

<body>
   
 
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="typesOfBasicArt.php">Type of Arts</a></li>
  <li><a href="typesOfArtTool.php">Types of Arts Tool</a></li>
  <li><a href="quiz.php">Quiz</a></li>
  <li><a href="artstutorial.php">Art Tutorials</a></li>
  <li style="float:right"><a class="active" href="logout-user.php">Logout</a></li>
  <li style="float:right"><a class="active" href="#">Welcome <?php echo $fetch_info['name'] ?>  😊</a></li>

</ul>
        

<div class="box2">
        <header>
        <div class="header" id="header">
            <a href="#"><img src="images\Paint.png" alt="logo"/></a>
            <h1>SimplyDraw</h1>
            <a href="#" title="Right click on canvas to Save drawing!" style="background-color: #FFFFFF; color: #000000; text-decoration: none; font-weight: 500;"><button class="save" id="btnSave">Save</button></a>
        </div>
    </header>
       <canvas id="myCanvas"></canvas>
       
        <div class="wrapper" id="wrapper">
            <div class="icon color">
                <div class="tooltip">
                    Select
                </div>
                <span><i><input type="color" id="colorChange"></i></span>
            </div>

                <div class="tooltip">
                    <h4>Pen Size</h4>
                </div>
                <span><i><input type="range" id="penSize" step="2" min="2" max="150" value="5"></i></span>
    
         <div class="icon Pencil">
            <div class="tooltip">
                Pencil
            </div>
            <button  id="btnPencil">
            <span><i class="fa fa-pencil-alt"></i></span>
             </button>
        </div>
        
        <div class="icon Bucket">
            <div class="tooltip">
                Fill
            </div>
            <button  id="btnBucket">
            <span><i class="fa fa-fill-drip"></i></span>
             </button>
        </div>

        <div class="icon Eraser">
            <div class="tooltip">
                Eraser
            </div>
            <button  id="btnEraser">
            <span><i class="fa fa-eraser"></i></span>
             </button>
        </div>
        
        <div class="icon Clear">
            <div class="tooltip">
                Clear
            </div>
            <button  id="btnClear">
            <span><i class="fa fa-broom"></i></span>
             </button>
        </div>

        <div class="icon Undo">
            <div class="tooltip">
                Undo
            </div>
             <button  id="btnUndo">
            <span><i class="fa fa-undo"></i></span>
             </button>
        </div>
        </div>
        </div>
<script src="js\CanvasScript.js"></script> 
      
    </body>
    </html>