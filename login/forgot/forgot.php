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
	 
	background-image: url(../background/2.jpg);
	background-size: cover;
	font-family: sans-serif;

}
 #form1
    {
        width: 440px;
        height: 440px;
        padding: 80px;
        border-radius: 230px;
        background-color: rgba(0, 0, 0, 0.69);
        font-family:sans-serif;
        color: aliceblue;
        margin-left: 33%;
        margin-top: 20px;
        
    }
    #bb1
    {
        border-radius: 30px;
        width: 52px;
        height: 52px;
        background-color: transparent;
        border-color: aqua;
        color: aliceblue;
        text-align: center;
    }
    #bb1:hover
    {
        border-color: deeppink;
    }
    
      h2     
        {  font-size: 30px;
            width: 95.4%;
            padding: 30px;
            height: 30px;
            background-color: #dadddd;
            color: black;
            margin: 0px;
        }
         #bbb1
        {
            background-color: #dadddd;
            border-color: rgba(70, 198, 198, 0.42);
            border-radius: 20px;
    
            float: right;
            margin-bottom: 0px;
            margin-top: -34px;
            width: 80px;
            height: 30px;
        }
        #bbb1:hover
        {  pointer-events: all;
            border-color: #ff006c;
            border-radius: 20px;
        }
    
    </style>
 
 

<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
      
 
    </head>

<body>
 
 

  <h2><center>SECURITY PANNEL</center> <a href="../index.php"><input type="button" value="Back" id="bbb1"></a></h2> 
 
 
<?php
        
        if(isset($_POST["submit"]))
        {
            $c=mysqli_connect("localhost","root","","travel");
            $s="insert into forgot values('".$_POST["t1"]."','".$_POST["t2"]."','".$_POST["t3"]."','".$_POST["t4"]."')";
            mysqli_query($c,$s);
            mysqli_close($c);
            echo"<script>alert('request send');</script>";
        }
        ?>

 <form method="post" action="forgot.php">
     
<table border="0" id="form1">
     
     <th colspan="2">Please Provied The Following Details To Avail This Service</th>
         <tr><td>Email id<th><input type="text" name="t1" ></td></tr>
         <tr><td>Name<th> <input type="text" name="t2"></td></tr>
          <tr><td>forgot type <th><input type="text" name="t3"></td></tr>
          <tr><td>Mobile Number<th><input type="text" name="t4" ></td></tr>
         <tr><td><th><input type="submit" name="submit" value="submit" id="bb1"></td></tr>
         
     </table>
     </form>
     
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
    #ff{margin-top: 80px;
    width: 100%;
 height: 40px;
        background-color: #a4a8ac;
        border-color: #a4a8ac;
    }
</style>
</html>