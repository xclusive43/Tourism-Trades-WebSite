 <?php if(!isset($_SESSION)) { session_start(); } ?>
<html>
    <head>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
 

<!--/js-->
<!--animated-css-->
 
 
 
 <link href="real1.css"rel="stylesheet">
    </head>
     <style>
     h2     
        {  font-size: 30px;
            width: 95.4%;
            padding: 30px;
            height: 30px;
            background-color: black;
            color:orange;
            margin: 0px;
            font-family: loto;
        }
         #bbb1
        {    border-width: 3px;
            background-color: black;
            border-color: rgba(255, 255, 255, 0.88);
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
            border-color: orange;
            border-radius: 20px;
            color: orange;
        }
        
        body
{
	margin: 0;
	padding: 0;
	 
	background-image: url(../regestration/background/hornbill.jpg);
	background-size: cover;
	font-family: sans-serif;

}
.loginBox
{
	position: absolute;
	top: 55.4%;
	left: 50%;
	transform: translate(-50%,-50%);
	 
	 
	padding: 30px 30px;
    background: rgba(0, 0, 0, 0.8);
    box-sizing: border-box;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}
         .loginBox table
         {
             background-color: transparent;
              margin-left: 20%;
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
    padding: 5px;
	color: #ededed;
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
	width: 45%;
	margin-bottom: 20px;
    color: #fafafa;
    text-align: center;

}
.box input[type="text"],
.box input[type="password"]
{
  border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 30px;
    width: 100%;
	color: pink;
	font-size: 15px;
    
     border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;      

}
.loginBox input[type="text"],
.loginBox input[type="password"],
         .loginBox input[type="number"],
.loginBox textarea
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 30px;
    width: 100%;
	color: pink;
	font-size: 15px;
     border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;

}
::placeholder
{
	color: rgba(255,255,255,.5);
}
.loginBox input[type="submit"],
         .loginBox select
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
	background: rgba(74, 191, 196, 0.36);
    color: #eb6570;
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
.box
{
    position: absolute;
	top: 76.5%;
	left: 85%;
	transform: translate(-50%,-50%);
	width: 370px;
	height: 169px;
	padding: 10px 21px;
    background: rgba(0, 0, 0, 0.83);
    box-sizing: border-box;
    border-radius: 25px;
}
h5
{
    color: aliceblue;
    font-size: 10px;
}
h5:hover
{
    color:crimson;
    text-align: center;
}
#button1
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
#button1:hover
{
    background: rgba(12, 110, 114, 0.31);
    color: #eb6570;
}
h3{
    color: aliceblue;
    text-align: center;
    font-size: 20px;
}


<!-- login box-->
 
         
    </style>
    
<body>
  
    
    
    <?php include('connection.php'); ?>

<?php
    
if(isset($_POST["sbmt"]))
{  
    
    $cn=makeconnection();
	 
    $s="insert into enquiry values('" . $_POST["a1"] ."','" . $_POST["a3"] . "','" . $_POST["a4"] . "','" . $_POST["a5"] ."','" . $_POST["a6"] . "','" . $_POST["a7"] . "','" . $_POST["a8"] . "','" . $_POST["a9"] . "','" . $_POST["a10"] . "')";
	
    mysqli_query($cn,$s);
	mysqli_close($cn);
    echo "<script>alert('enquiry sent successfully');</script>";
     

   
}

?>
  
 
 <h2><center>TOURISM <b style="color:white;">TRADES</b></center> <a href="../index.html"><input type="button" value="Back" id="bbb1"></a></h2> 
<div class="loginBox">
     
    <h3>Please Provide Following Details To Avail The Enquiry</h3>

<form method="post" action="enquiry.php">
<table border="0" align="center" class="tableshadow">

 

 
   
 <center>
     
     
    <tr style="  padding:3px; color:white;"><td>Select The Package<select name="1a1" required/> <option>
     
						 
    <?php
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from package";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["submit1"])&& $data[0]==$_POST["1a1"])
	{
		echo"<option value=$data[0] selected>$data[0]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[0]</option>";
	}
}
mysqli_close($cn);
?></option><input type="submit" name="submit1" value="Done" id="bt1"></select>
            </td></tr>

<?php
        
        if(isset($_POST["submit1"]))
{
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from package where packagename='" .$_POST["1a1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$pname=$data[0];
$dis=$data[1];
$cat=$data[2];
$price=$data[3];
mysqli_close($cn);

}
 ?>
    
    
    </from>
    </table>

 
    <form method="post">
    <table border="0">


        <tr style="color:white"><td>Package-Name</td><td><input readonly type="text" name="a1"  value="<?php if(isset($_POST["submit1"])){ echo $pname ;} ?>" /></td></tr> 
             
       <!-- <tr style="color:white"><td>Package-Id</td><td><input type="text" name="a2" required pattern="[a-zA-z1 0-9_]{1,50}" title"Please Enter Only Characters  between 3 to 50 for User name" /></td></tr>--> 
             
        <tr style="color:white"><td>Your Named</td><td><input type="text" name="a3"   pattern="[a-zA-z1 _]{2,50}" title"Please Enter Only Characters  between 3 to 50 for User name" /></td></tr> 
              
        <tr style="color:white"><td> Gender</td><td> <select name="a4" required><option value="Select">Select</option><option value="Female"> Female</option><option value="Male">Male</option><option value="other">Other</option></select><br></td></tr>
              
        <tr style="color:white"><td>  Mobile Number</td><td><input type="text" name="a5"   pattern="[0-9]{10}" title"Please Enter correct digit" /></td></tr>
    
        <tr style="color:white"><td>  Email </td><td><input type="text" name="a6"   pattern="[a-zA-z1 @#$%.^&*!~ 0-9_]{3,50}" title"Please Enter a vaild email " /></td></tr>
            
        <tr style="color:white"><td>Number Of Days</td><td><input type="text" name="a7"   pattern="[a-zA-z1 0-9 _]{1,50}" title"Please Enter Only Characters  between 3 to 50 for User name" /></td></tr> 
            
        <tr style="color:white"><td>Child</td><td><input type="number" name="a8"   pattern="[a-zA-z1 _]{2,50}" title"Please Enter Only Characters  between 3 to 50 for User name" /></td></tr> 
             
        <tr style="color:white"><td>Adult</td><td><input type="number" name="a9"   pattern="[a-zA-z1 _]{2,50}" title"Please Enter Only Characters  between 3 to 50 for User name" /></td></tr> 
             
        <tr style="color:white"><td>Message</td><td><textarea name="a10"   pattern="[a-zA-z1 0-9 _]{2,100}" title"Please Enter Only Characters  between 3 to 50 for User name" /></textarea></td></tr> 
              
        <th><td class="btn"> <input type="submit" value="save" name="sbmt" /></td></th> 

            
         
        
       </table>
       
    </form>
    </div>

    
   
  <footer>
<table border="0" id="ff">
        <th>Design By : RGU BCA Student</th>
        </table>
</footer>

<!--/sticky-->

      
</body>
<style>
    #ff{    
            color:aliceblue;
        font-size: 11px;
            margin-top: 535px;
            width: 100%;
            height: 40px;
            background-color: black;
            border-color: black;
       }
</style>
</html>