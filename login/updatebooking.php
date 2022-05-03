 <?php if(!isset($_SESSION)) { session_start(); } ?>
<html><head><title>booking form</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

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
 
</head>
    
<body>
 
    
    
    <?php include('connection.php'); ?>

 
    
<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:500px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:400px;">
<?php include('left.php'); ?>
	</div>
<div class="col-sm-9">
	 

 
<form method="post">
    
   
<table border="0"  align="center" class="tableshadow" id="table12">
<tr><td class="toptd" style="font-size:18px; font-family:loto; padding:1px; color:white; background-color:black;"><center><b style="color:orange;"> Update </b><b>Booking</b></center></td></tr>
<tr><td align="center" valign="top" style="padding-top:1px;">
<table border="3" align="center" width="100%" height="30%" >  
 <center>
     
     
    <tr style="font-size:12px;font-family:loto; padding:5px; font-weight:bold;"><td colspan="2">Please Enter your Booking Id:<input type="text" name="a1" ><input type="submit" name="submit1" value="Done" id="bt1"></select>
            </td>  </tr>

<?php
        
        if(isset($_POST["submit1"]))
{
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from bookings where Booking_id='" .$_POST["a1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$id=$data[0];
$pname=$data[1];
$cat=$data[2];
    
$pprice=$data[3];
$title=$data[4];
$fname=$data[5];
$lname=$data[6];
$age=$data[7];
$email=$data[8];
$address=$data[9];
$country =$data[10];
$mobile=$data[11];
$adult=$data[12];
$child=$data[13];
$mname=$data[14];
$mage=$data[15];
$in=$data[16];
$out=$data[17];
$ndays=$data[18];
    
$room=$data[19];
$nroom=$data[20];
$bed=$data[21];
$vehicle=$data[22];
$tc=$data[23];
$status=$data[24];
    
$bid=$data[25];
     
 
   
     

mysqli_close($cn);

}
?>

    
    
    <!--update query-->
    <?php
if(isset($_POST["sbmt"]))
{
	$cn=mysqli_connect("localhost","root","","tourismtrades");
	$s="update bookings set Email='" . $_POST["c1"] ."',full_address='" . $_POST["c2"] . "',Phone='" . $_POST["c3"] ."',adults='" . $_POST["c4"] . "',child='" . $_POST["c5"] ."',names='" . $_POST["c6"] . "',ages='" . $_POST["c7"] ."',cin='" . $_POST["c8"] . "',cout='" . $_POST["c9"] ."',room='" . $_POST["c10"] . "',no_room='" . $_POST["c11"] . "',bedding='" . $_POST["c12"] ."',vehicle='" . $_POST["c13"] . "',stat='" . $_POST["c40"] . "' where Booking_id='" . $_POST["a22"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Updated');</script>";
}
?>
 

    <tr><td style="font-size:12px; font-family:loto;padding:5px;" colspan="2">Booking Id<input type="text" name="a22" readonly value="<?php if(isset($_POST["submit1"])){ echo $bid;} ?>"></td></tr>
    <tr><td colspan="2" style="font-size:12px; font-family:loto; padding:5px;">Package Name:<?php if(isset($_POST["submit1"])){ echo $pname ;} ?></td></tr>
    <tr><td colspan="2" style="font-size:12px; font-family:loto;padding:5px;">Package Price: Rs.<input type="text" name="pp" readonly value="<?php if(isset($_POST["submit1"])){ echo $pprice ;} ?>"</td></tr>
    
         
<tr><td colspan="3" align="center" style="color:white;font-family:loto; padding:5px; background-color:black;"> 
        <b style="color:orange;">User <b style="color:white; padding:5px;"> Information</b></td></tr></td>

     
   <th style="font-size:12px; font-family:loto;padding:5px;">Name:-<?php if(isset($_POST["submit1"])){ echo $title;} ?><?php if(isset($_POST["submit1"])){ echo $fname;} ?><?php if(isset($_POST["submit1"])){ echo $lname;} ?></th>
     
    <th style="font-size:12px; font-family:loto;padding5px; ">Age:-<?php if(isset($_POST["submit1"])){ echo $age;} ?> </th>
  
        
    <tr d="td1"><td colspan="1" style="font-size:12px; padding:5px; font-family:loto; font-weight:bold;">Email Id:<input type="text" name="c1" value="<?php if(isset($_POST["submit1"])){ echo $email;} ?>"  pattern="[a-zA-z1 @#$%.^&*!~ 0-9_ .com]{3,50}" />
       
        <th colspan="1" style="font-size:12px; font-family:loto;padding:5px; text-align:right;">Address:</th><th style="font-size:12px; font-family:loto;padding:5px; text-align:right;"><textarea name="c2" cols="35" contenteditable="true"><?php if(isset($_POST["submit1"])){ echo $address;} ?></textarea></th> 
        
            
   
    </tr>
    
     
    <tr><td colspan="1" style="font-size:12px; padding:5px; font-family:loto; font-weight:bold;">Phone No<input type="text"   name="c3"   value="<?php if(isset($_POST["submit1"])){ echo $mobile;} ?>"  pattern="[a-zA-z1 @#$%.^&*!~:- 0-9]{10}" /></td><td style="font-size:12px; padding:5px; font-weight:bold; color:black; text-align:right;" >Member Details*
    Adults <select name="c4"><option><?php if(isset($_POST["submit1"])){ echo $adult;} ?></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select><b style="color:white;">....</b><b style="font-size:12px;  font-weight::bold;"> <td style="font-size:12px; padding:5px; font-weight:bold; color:black; ">Children</b><select  name="c5"> <option> <?php if(isset($_POST["submit1"])){ echo $child;} ?></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select> </td></td></tr>
  
    <tr><td>
         
        
        <table border="0" style="color:#fffF;  background:transparent; align:center;" class="table22">
        
            <th  style="font-size:12px; background-color:black; padding:5px; font-weight:bold;" d="td1"><center>Name</center></th><th  style="font-size:12px; padding:5px; background-color:black; font-weight:bold;"><center>Age</center></th>
            <tr d="td1"><td style=" padding:5px;color:black; font-size:12px;"><textarea name="c6"><?php if(isset($_POST["submit1"])){ echo $mname;} ?></textarea></td><td style=" padding:5px;color:black; font-size:12px; width:30px; "><textarea name="c7" cols="4"><?php if(isset($_POST["submit1"])){ echo $mage;} ?></textarea></th></td></tr>
           
    
    </table> 
       </td><th d="td1">  <table border="0" style="color:#fffF;   align:center;">
    <th colspan="5" style="font-size:12px; padding:5px; font-weight:bold; color:white; background-color:black;  text-align:center;" >Date</th>
    <tr><td style="font-size:12px; padding:5px; font-weight:bold; color:black;"> <b style="color:white;">..........</b>From</td><td style="font-size:12px; padding:12px; font-weight:bold; color:black;"><input type="date" name="c8" readonly value="<?php if(isset($_POST["submit1"])){ echo $in;} ?>"  pattern="[0-9_]{1,10}"></td><th style="font-size:12px; padding:5px; font-weight:bold; color:black;" > To</td><td style="font-size:12px; padding:10px; font-weight:bold; color:black;"><input type="date" name="c9" readonly value="<?php if(isset($_POST["submit1"])){ echo $out;} ?>"  pattern="[0-9_]{1,10}" name="b13"   pattern="[0-9_]{1,10}"></th></tr>
            
    
    
    </table> </th><th style="font-size:12px; padding:10px; font-weight:bold; color:black;">NO. Of Days<input type="text" name="c34" value="<?php if(isset($_POST["submit1"])){ echo $ndays;} ?>"></th> </tr>
    

    
    <tr d="td1"><td colspan="4" style="font-size:12px; padding:10px; font-weight:bold;"> Room Type<select name="c10"  ><option value="<?php if(isset($_POST["submit1"])){ echo $room;} ?>"><?php if(isset($_POST["submit1"])){ echo $room;} ?></option><option value=" Superior"> Superior </option><option value="Deluxe">Deluxe</option><option value="Guest"> Guest</option></select>
        
    No. Of Rooms<select name="c11"  ><option value="<?php if(isset($_POST["submit1"])){ echo $nroom;} ?> "><?php if(isset($_POST["submit1"])){ echo $nroom;} ?></option><option value=" 1"> 1 </option><option value="2">2</option><option value="3"> 3</option><option value="4+"> 4+</option></select>
    Bedding Type <select name="c12" required><option value="<?php if(isset($_POST["submit1"])){ echo $bed;} ?> "><?php if(isset($_POST["submit1"])){ echo $bed;} ?></option><option value="Single Bed">Single Bed</option><option value="Double-Bed">Double-Bed</option><option value="Triple Bed">Triple Bed</option><option value="Quard Bed">Quard Bed</option></select> 
       
   Vehicle Type<select name="c13"  ><option value="<?php if(isset($_POST["submit1"])){ echo $vehicle;} ?> "><?php if(isset($_POST["submit1"])){ echo $vehicle;} ?></option><option value="Business class">Business class</option><option value="Economic class">Economic class</option><option value="Standard class">Standard class</option></select> </th> 
   
 
        </td></tr>
<tr><td colspan="3" style="color:blue; font-weight:bold; padding:10px; font-size:12px; "><input type="checkbox" name="c40" value="updateconfirm">Confirm Update</td></tr>
 <style>
     .tableshadow input[type="checkbox"]
     {
         background-color: aqua;
     }
</style>
        
    
<tr><td colspan="4" class="btn"> <input type="submit" value="Update Information" name="sbmt" id="bt"/></td></tr></center>

</table></table>

	</form></div>
	</div>
 
  <div class="bot"><center>Design By RGU BCA Student</center></div>
 
 
	
    
    
 </body>
         <style>
             
                .bot{
        
    background-color: #ffffff;
        padding: 5px;
        margin-top:8.2%;
        font-family: loto;
    }
     
      #bt
        {   margin-left:150%;
            padding: 4px;
            color: white;
            font-family: loto;
            letter-spacing: 3px;
            font-size: 12px;
            border-radius: 20px;
            background-color: #1e51c4;
            
             
        }
        #bt:hover
        {    
            color: black;
           border-radius: 20px;
            font-size: 12px;
            background-color: orange;
        }
          
               #bt1
        {
            color: white;
            font-family: loto;
            border-color:#1e51c4;
            font-size: 12px;
              background-color: #1e51c4;
            border-color: none;
            border-radius: 20px;
            
        }
        #bt1:hover
        {   font-weight: 900%;
            color: black;
            border-radius: 20px;
            font-size: 12px;
            background-color: orange;
            border-color:orange;
        }
             #table12
             {
                  
                 background-color:rgb(255, 255, 255);
                 background-size: cover;
                 color: aliceblue;
             }
             #td1
             {
                 color: red;
             }
             .tableshadow 
             {
               height: 60%;
                 width: 100%;
             }
.tableshadow input[type="text"],
.tableshadow input[type="date"],
.tableshadow input[type="email"],
            
             .tableshadow select
             
             

{
  border: none;
	border-bottom: 1px solid black;
	border-top: 1px solid #db7600;
	background: transparent;
	outline: none;
	height: 20px;
	color: black;
	font-size: 12px;
     border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;      

}
 .tableshadow select,
.tableshadow textarea
             {
                 background:transparent;
                 
             }
    </style>
</html>
