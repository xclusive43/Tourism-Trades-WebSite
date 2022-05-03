<?php if(!isset($_SESSION)) { session_start(); } ?>
 
<!DOCTYPE html>
<html>
<head>
<title>tourism user</title>
 
 
 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
 

 
 
<script>
 new WOW().init();
</script>
    <!--/animated-css-->
    
    <!--top nav-->
  <style>
     h2     
        {  font-size: 30px;
            width: 95.4%;
            padding: 30px;
            height: 30px;
            background-color: black;
            color:darkorange;
            font-family: loto;
            margin: 0px;
        }
         #bbb1
        {
            background-color: black;
            border-color: #f5f5f5;
            border-radius: 20px;
            color: aliceblue;
            border-width: 3px;
            float: right;
            margin-bottom: 0px;
            margin-top: -34px;
            width: 80px;
            height: 30px;
        }
        #bbb1:hover
        {  pointer-events: all;
            border-color: #ff8900;
            border-radius: 20px;
            color: orange;
        }
        
        body
{
	margin: 0;
	padding: 0;
	 
	background-image: url(background/hornbill.jpg);
	background-size: cover;
	font-family: sans-serif;

}
.loginBox
{
	position: absolute;
	top: 52.4%;
	left: 50%;
	transform: translate(-50%,-50%);
	 
	 
	padding: 30px 30px;
    background: rgba(0, 0, 0, 0.8);
    box-sizing: border-box;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
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
	width: 30%;
	margin-bottom: 10px;
    color: #fafafa;
    height: 70%;

}
.box input[type="text"],
.box input[type="password"]
{
  border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 25px;
	color: pink;
	font-size: 13px;
     border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;      

}
.loginBox input[type="text"],
.loginBox input[type="password"],
        .loginBox input[type="file"],
        .loginBox select
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 25px;
	color: #de581c;
	font-size: 13px;
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
    font-size: 13px;
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
	width: 20px;
	height: 169px;
	padding: 5px 4px;
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
    font-size: 14px;
}
        .table{
            background-color: rgba(0, 255, 255, 0);
            font-size: 12px;
             
            width: 45em;
        }
        #bb
        {
            
        }
         
        label{
    padding: 3px;
    background: #af494d; 
    display: table;
             border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    color: #fff;
     }
         label:hover
        {
            background-color: rgba(54, 175, 124, 0.47);
        }
#bb input[type="file"] {
    display: none;
}
 
<!-- login box-->
 
        
        
    </style>
</head>
<body>
  <h2><center >TOURISM <b style="color:aliceblue;">TRADES</b></center>  <a href="../index.html"><input type="button" value="Back" id="bbb1"></a></h2> 
<!--header-->
<!--sticky-->
 
<div>

<?php include('connection.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{   
    
	$cn=makeconnection();
	$s="insert into users values('" . $_POST["b1"] ."','" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["b2"] . "','" . $_POST["t4"] ."','" . $_POST["t5"] . "','" . $_POST["s2"] . "', '" . $_POST["t8"] . "','" . $_POST["c1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('SUCCESSFULLY SIGNUP');</script>";
}
?>

<div class="loginBox">
    
    <h3>User sign-up/Registration</h3>
     
<form method="post" enctype="multipart/form-data" action="registration.php">
 <table border="0">
     
    <tr> <td>User name</td><td><input type="text" name="b1" required pattern="[a-zA-z1-@.#@$%^&*() _]{3,50}" title"Please Enter Only Characters and numbers between 3 to 50 for User name" /></td>
     
     </tr>
        

    
<tr> <td>Password </td><td><input type="password" name="t1" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Company name"/> <br>
    </td>
     
      
      
    </tr>
     
     <tr><td>Confirm Password </td><td><input type="password" name="t3" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Company name"/></td></tr>
     
          <tr><td>Full Name</td> <td><input type="text" name="t2" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 3 to 50 for User name"  /></td><br><th> </th>
      
     </tr>
    
      <tr> <td>Gender</td><td><select name="b2" required><option value="">Select</option><option value="Female">Female</option><option value="Male">Male</option></select>  </td></tr>

 
    <tr><td></td><td style=" border-color:transparent; color:transparent;"> </tr> 

  <tr><td>Address</td><td><input type="text" name="t4" required pattern="[a-zA-z1-0-9!@#$%^&*().,_-:;"" _]{3,50}" title"Please Enter Only Characters " /> </td></tr>  
     
    <tr><td>Mobile Number</td><td><input type="text" name="t5" required pattern="[0-9]{10}" title"Please Enter Only Characters and numbers between 3 to 50 for User name" /></td></tr>
     
    <tr> <td>Country</td><td><select name="s2" required><option value="">Select</option><option value="india">india</option><option value="other">other</option></select><br></td></tr>
     
     
    
     
     
    <tr> <td>Email Id</td><td><input type="text" name="t8" required pattern="[a-zA-z1-@.#@$%^&*() _]{3,50}" title"Please Enter Only Characters and numbers between 3 to 50 for User name" /><br></td></tr>
     <tr><td style="color:white; font-size:11px;"><input type= "checkbox" name="c1"  required value="new">I agree the terms and condition of this Tourism Trades.</td></tr>
    
    <th><td ><input type="submit" value="Register" name="sbmt"  id="btn"/> </td></th>
     

    </table>
     
</form>
</div>





    </div>
    </div>
    

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
            color: aliceblue;
            margin-top: 535px;
            width: 100%;
            height: 40px;
        font-size: 11px;
            background-color: black;
            border-color: #a4a8ac;
    }
</style>
</html>