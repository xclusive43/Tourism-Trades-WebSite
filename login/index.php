<?php if(!isset($_SESSION)) { session_start(); } ?>

 
<!DOCTYPE html>
<html>
<head>
<title>tourism trades</title>
 
<link href="../css2/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css2/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="../js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->

<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #171717; min-height:450px;">
    
<?php include('left.php');
     ?>
</div>

    
    <div class="col-sm-9" align="center"> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    
    .col-sm-9
    
    {
        margin-left: -5%;
            }
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 80%;
 max-height: 400px; 
   
  margin: auto;
    border-color: black;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 10px;
  width: 10px;
  margin: 2 2px;
    margin-left: 0px;
  background-color: #000000;
  border-radius: 90%;
  display: inline-block;
  transition: background-color 0.8s ease;
}

.active {
  background-color: #ffffff;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    .ta 
    {
        width: 100em:
            border:5px solid black;
    } .c
    {
        margin-left: 18%;
        margin-top: -1%;
    }
</style>
</head>
<body>

 
 
 
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../images/images/1.jpg" width="800" height="400" >
   
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../images/images/2.jpg" width="800" height="400">
   
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../images/images/Cherrapunji-Most-Heavy-Rainfall-Area-In-India-AS.jpg" width="800" height="400">
   
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 3</div>
  <img src="../images/images/4.jpg" width="800" height="400">
   
</div>
    <div class="mySlides fade">
  <div class="numbertext">5 / 3</div>
  <img src="../images/images/5.jpg" width="800" height="400">
   
</div>
    <div class="mySlides fade">
  <div class="numbertext">6 / 3</div>
  <img src="../images/images/6.jpg" width="800" height="400">
   
</div>

    <div class="mySlides fade">
  <div class="numbertext">7 / 3</div>
  <img src="../images/images/H2018021540324-PM-Narendra-Modi-Addressing-Rally-in-Arunachal-Pradesh.jpg" width="800" height="400">
   
</div>
    <div class="mySlides fade">
  <div class="numbertext">8 / 3</div>
  <img src="../images/images/arunachal-2.jpg" width="800" height="400">
   
</div>
</div>
 
<br>
<div class="c">
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
    <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span> 
  <span class="dot"></span>
</div></div>
   </td></tr> </table>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    </div>
    
   

</div>
<?php include('bottom.php'); ?>
</body>
    <style>
        .video
        {
             
             
        }
    .video video
        {
            width: 100%;
            height: 50%;
           
        }
        .video1 video
        {
            width: 100%;
            height: 50%;
            
        }
        .tab
        {
            margin-left: 60px;
            width: 100%;
        }
    </style>
</html>