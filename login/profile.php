<?php if(!isset($_SESSION)) { session_start(); } 

error_reporting(0); ?>
<?php
 
 
	$cn=mysqli_connect("localhost","root","","tourismtrades");
	$s="select * from users where userid='" .$_SESSION["userid"]. "'    ";
	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{   
		 
        $_SESSION["id"]=$data[0];
        $_SESSION["dd"]=$data[1];
	 
		$_SESSION["UserName"]=$data[2];
		$_SESSION["Gender"]=$data[3];
		$_SESSION["Address"]=$data[4];
		$_SESSION["MobileNumber"]=$data[5];
		 
		$_SESSION["City/Town"]=$data[6];
		$_SESSION["Email_Id"]=$data[7];
		 
        
		 
      
	}
	 

 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>packview</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css2/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css2/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
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
 

 



<?php include('top1.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Personal WebSite</title>
  </head>
  <body>
<div class="box">
  <img src="../images/images/6.jpg" alt="" class="box-img">
  <h1>
 <?php 
    echo $_SESSION["UserName"];   ?> </h1>
<h5>
    <p><?php echo $_SESSION["Email_Id"]; ?></p>
 </h5>
    <h4>
     <p>Phone : <?php echo $_SESSION["MobileNumber"]; ?>
    </h4>
 <h3>
    <p>
    User Id :  <?php  echo $_SESSION["id"];   ?>
    </p>
    <p>
    Password : <?php echo $_SESSION["dd"]; ?>
    </p>
    <p>
 Street : <?php echo $_SESSION["Address"];  ?>
   
       
    
    </p>
         
    </p>
    </P>
    
    </h3>
<p><a href="#profileupdate.php"><button type="submit" class="btn-primary">Update Profile</button></a>
    
    </p>
    <p><a href="#profileupdate.php"><button type="submit" class="btn">Delete Account</button></a></p>
 
</div>
</body>
<style>
    .btn
    {
        border-radius: 20px;
        border-color: transparent;
        font-size: 11px;
        margin-top: -12%;
        background-color: rgba(5, 13, 51, 0.7);
        margin-left: 55%;
        font-weight: 500;
        color: aliceblue;
        padding: 2px;
    }
    .btn:hover
    {
        background-color: #4790d9;
        border-color: rgba(5, 13, 51, 0.7);
        border-width: 2px;
    }
 .btn-primary
    {
        border-radius: 20px;
        border-color: transparent;
        font-size: 12px;
        margin-top: 5%;
        margin-left: 25%;
    }
body{
  margin: 0;
  padding: 0;
  
  background-size: cover;
    
}
.box{
  width: 480px;
  background: rgba(139, 134, 134, 0.71);
  padding: 40px;
  text-align: center;
  margin: auto;
  margin-top: 1%;
  color: white;
  font-family: 'Century Gothic',sans-serif;
}
.box-img{
  border-radius: 50%;
  width: 200px;
  height: 200px;
}
.box h1{
    text-transform: uppercase;
  font-size: 40px;
  letter-spacing: 4px;
  font-weight: bold;
}
.box h5{
  font-size: 20px;
  letter-spacing: 3px;
 margin-left: 20%;
    font-weight: 900;
    padding: 2px;
}
    .box h4{
  font-size: 13px;
  letter-spacing: 2px;
 margin-left: 20%;
    font-weight: 500;
    padding: 2px;
}
    .box h3{
  font-size: 13px;
  letter-spacing: 2px;
 margin-left: 20%;
    font-weight: 500;
    padding: 2px;
}
.box p{
  text-align: justify;
}
ul{
  margin: 0;
  padding: 0;
}
.box li{
  display: inline-block;
  margin: 6px;
  list-style: none;
}
.box li a{
  color: white;
  text-decoration: none;
  font-size: 60px;
  transition: all ease-in-out 250ms;
}
.box li a:hover{
  color: #b9b9b9;
}

</style>
</html>

 
</div></div>
    <div class="bot"><center>Design By RGU BCA Student</center></div>
</body>
<style>
.bot{
        
    background-color: aliceblue;
        padding: 5px;
        margin-top:3%;
        font-family: loto;
    }
    .tableshadow
    {
        background-color: aliceblue;
        font-family: loto;
    }
    .ttg
    {
        border-color: black;
    }
</style>
</html>