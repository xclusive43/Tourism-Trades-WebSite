<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>adminlogin</title>
 
<style>
        body
{
	margin: 0;
	padding: 0;
	 
	background-image: url(background/login2.jpg);
	background-size: cover;
	font-family: sans-serif;

}
.loginBox
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 340px;
	height: 300px;
	padding: 80px 40px;
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
}
.user
{
	width: 100px;
	height: 100px;
	border-radius: 50px;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left:calc(50% - 50px);
}
h3
{
	margin: 0;
	padding: 0 0 20px;
	color: white;
	text-align: center;

}
.loginBox p
{
	padding: 0;
	margin: 0;
	font-weight: bold;
	color: #fff;

}
.loginBox
{
	width: 30%;
	margin-bottom: 20px;

}
.loginBox input[type="text"],
.loginBox input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 25px;
	color: pink;
	font-size: 15px;
     border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;

}
::placeholder
{
	color: rgba(255,255,255,.5);
}
.loginBox input[type="submit"]
{
	border: none;
    outline: none;
    height: 25px;
    color: black;
    font-size: 15px;
    color: aliceblue;
    background-color: #af494d;
    cursor: pointer;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;

}
.loginBox input[type="submit"]:hover
{
	background: rgba(15, 156, 162, 0.52);
    color: #d1414d;
}
.loginBox a
{
	color:palevioletred;
	font-size: 10px;
	 
}
.bottom
{
	top: 80%;
	left: 50%;
}

      h2     
        {  font-size: 32px;
            width: 95.4%;
            padding: 30px;
            height: 30px;
            font-family: loto;
            background-color: black;
            color: antiquewhite;
            margin: 0px;
        }
         #bbb1
        {      border-width: 3px;
            background-color: black;
            border-color: rgba(255, 255, 255, 0.85);
            border-radius: 20px;
            color: aliceblue;
            float: right;
            margin-bottom: 0px;
            margin-top: -34px;
            width: 80px;
            height: 30px;
        }
        #bbb1:hover
        {  pointer-events: all;
            border-color:orange;
            border-radius: 20px;
            color: orange;
        }
    
    </style>
 
 

<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 

<script src="../js/jquery.min.js"></script>

 
 

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
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
	$cn=mysqli_connect("localhost","root","","tourismtrades");
	$s="select * from users where userid='" . $_POST["t1"] . "' and Password='" . $_POST["t2"] ."'";
	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["userid"]= $_POST["t1"];
        $_SESSION["Password"];
		$_SESSION["usertype"]=$data[4];
		$_SESSION['loginstatus']="yes";
        echo $_SESSION["userid"];
		header("location:index.php");
	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>
  <h2><center style="color:orange;">TOURISM <b style="color:white;">TRADES</b></center><a href="../index.html"><input type="button" value="Back" id="bbb1"></a></h2> 
  
<div class="loginBox">
<img src="background/login1.jpg" class="user">
<h3>User Log-In Here</h3>
<form method="post" method="GET">
 <p>User Id</p><input type="text" name="t1" required pattern="[a-zA-z,.!@#$%^&*0-9_+ _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" /> 
	
<p>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	 </p><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" />
 
<input type="submit" value="LOGIN" name="sbmt" />
    <p id="pp"><a href="../regestration/registration.php" style="text-decoration:none;">sign-up here</a></p>
    <p id="pp"><a href="forgot/forgot.php" style="text-decoration:none;"> forgot password/user id </a></p>
 
 

 </form>
	
	</div>
	 

 <footer>
<table border="0" id="ff">
        <th>Design By : RGU BCA Student</th>
        </table>
</footer>
 
</body>
<style>
    #pp:hover
    { 
     color: aliceblue;   
    }
    #ff{
        font-family: sans-serif;
        font-size: 11px;margin-top:39%;
    width: 100%;
 height: 40px;
        color: aliceblue;
        background-color: black;
        border-color: white;
    }
</style>
</html>