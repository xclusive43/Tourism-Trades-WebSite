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
		$_SESSION["usertype"]=$data[4];
		$_SESSION["UserName"]=$data[2];
		$_SESSION["Gender"]=$data[3];
		$_SESSION["Address"]=$data[5];
		$_SESSION["MobileNumber"]=$data[6];
		$_SESSION["Country"]=$data[7];
		$_SESSION["State"]=$data[8];
		$_SESSION["City/Town"]=$data[9];
		$_SESSION["Email_Id"]=$data[10];
		 
        
		 
      
	}
	 

 
?>
 
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
 
<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:500px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:400px;">
<?php include('left.php'); ?>
	</div>
<div class="col-sm-9">
<?php
    
if(isset($_POST["sbmt"]))
{  
    
    $cn=$cn=mysqli_connect("localhost","root","","tourismtrades");;
	$new ="Not Confirm"; 
 $s="INSERT INTO `bookings`( `package_name`, `categroy`, `price`, `Title`, `FName`, `LName`, `age`, `Email`, `full_address`, `Country`, `Phone`, `adults`, `child`, `names`, `ages`, `cin`, `cout`, `nodays`, `room`, `no_room`, `bedding`, `vehicle`, `T&C`, `stat`, `Booking_id`,`userid`) VALUES ('$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[b1]','$_POST[b2]','$_POST[b3]','$_POST[b4]','$_POST[b5]','$_POST[b6]','$_POST[bb7]','$_POST[b7]','$_POST[b8]','$_POST[b9]','$_POST[b10]','$_POST[b11]','$_POST[b12]','$_POST[b13]',datediff('$_POST[b13]','$_POST[b12]'),'$_POST[b14]','$_POST[b15]','$_POST[b16]','$_POST[b17]','$_POST[b18]','$new','$_POST[b19]','$_POST[u]')";
	
    mysqli_query($cn,$s);
	mysqli_close($cn);
    echo "<script>alert('Record Save');</script>";
      
 
   
}

?>	 

 
<form method="post">
    
 <table border="0" align="center" class="tableshadow">

<tr><td class="toptd" style="font-size:16px; padding:8px; color:white; background-color:black;"><center><b style="color:orange;"> Booking </b><b>Form</b></center></td></tr>

<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center">  
 <center>
     
     
    <tr style="font-size:13px; padding:30px; font-weight:bold;"><td colspan="4">Please Select The Package<select name="1a1" required/><option value="">Select
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
?></option><input type="submit" name="submit1" value="Done" id="bt1"> </select>
            <b  style="font-size:12px; text-align=right; padding:12px; font-weight:bold; color:red; text-align:right;"><b style="color:transparent;">...____________________......</b>Date: <?php echo "" . date("d/m/Y") . ""; ?><b style="color:white;">------</b> 
         Time:  <?php
                date_default_timezone_set("Asia/Kolkata"); echo "" . date("h:i:sa"); ?></b></tr>

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
    
   
    
    <th style="font-size:12px; padding:2px; font-weight:bold;"> Package Name<b style="color:white;">.......</b><input type="text" name="a1"  readonly value="<?php if(isset($_POST["submit1"])){ echo $pname ;} ?>"> </th>
        
    <th style="font-size:12px; padding:5px; font-weight:bold; text-align:right;">Package<b style="color:white;">_</b>Dicription</th><th style="padding:5px;"><textarea name="" readonly> <?php if(isset($_POST["submit1"])){ echo $dis ;} ?> </textarea> </th>
   
     
    
    <tr><td style="font-size:12px; padding:2px; font-weight:bold;">Package Category <input type="text" name="a2" readonly  value="<?php if(isset($_POST["submit1"])){ echo $cat;} ?>" required pattern="[a-zA-z1 @#$%.^&*!~ 0-9_]{3,50}"  /></td><td class="lefttxt" style="font-size:12px; padding:2px;  font-weight:bold; text-align:right;">Package Price<b style="color:white;">........</b></th><th><input type="text" name="a3" readonly value="<?php if(isset($_POST["submit1"])){ echo $price ;} ?>" required pattern="[a-zA-z1 0-9 _]{1,50}" /> </th>
      
    <tr><td colspan="4" align="center" style="color:white; padding:5px; background-color:black;"> 
        <b style="color:orange;">User</b><b style="color:white;"> Information</b></td></tr></td>
    
    <th colspan="1" style="font-size:12px; padding:5px; font-weight:bold;">User Id<b style="color:transparent;">...</b><input type="text" name="u" readonly value="<?php echo  $_SESSION["id"]; ?>"  /> </th>
     <th colspan="3" style="font-size:12px; padding:5px; font-weight:bold;"> Title*<select name="b1" ><option value="Select">Select</option><option value="Mr.">Mr.</option><option value="Miss">Miss.</option><option value="Mrs.">Mrs.</option><option value="Dr.">Dr.</option><option value="Prof.">Prof.</option>
												                                </select>
        
    <input type="text" name="b2"  pattern="[a-zA-z1 . _]{1,50}"   placeholder="First Name*"/> 
        
     <input type="text" name="b3"  placeholder="Last Name"  pattern="[a-zA-z1 . _]{1,50}" /> 
          </th> 
    <tr><td style="font-size:12px; padding:5px; font-weight:bold; "><b style="color:transparent;"></b>Age<b style="color:white;">_____</b><input type="text"  name="b4"   pattern="[0-9]{1,10}"></td> <th style="font-size:12px; padding:2px; text-align:right; font-weight:bold;">Counrty<b style="color:white;">----</b><th><select name="bb7" ><option>select</option><option>India</option><option>other</option></select></th></th></tr>
        
    <tr><td style="font-size:12px; padding:2px; font-weight:bold;  ">Email Id*<input type="email" name="b5"   pattern="[a-zA-z1 @#$%.^&*!~ 0-9_ .com]{3,50}" /></td> 
            
    <th style="font-size:12px; padding:7px; color:black; font-weight:bold; text-align:right; "> Full Address  <th style="padding:5px;"><textarea name="b6"></textarea> </th> 
   
    </tr>
    
     
    <tr><td style="font-size:12px; padding:1px; font-weight:bold; color:black; text- ">Phone No.<input type="text" name="b7"    pattern="[0-9]{10}" />  <th style="text-align:right; padding:10px; font-size:12px;">Member Details*<th>Adults<select name="b8"> <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10+</option></select> <b style="color:white">...</b> 
        
       Children<select  name="b9"><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select></th> </th></td></tr>
    <tr><td>.</td></tr>
    
   <tr><td colspan="3">
        
       <table class="hh" border="3" style="color:#fffF;     " width="90%">
                <tr>
                    <td style="font-size:12px; padding:3px; font-weight:bold; color:black; text-align:center;">Date In<input type="date" name="b12"  pattern="[0-9_]{1,10}">
                    
                    <td style="font-size:12px; padding:3px; font-weight:bold; color:black;text-align:center;">Date Out<input type="date"  name="b13"   pattern="[0-9_]{1,10}"></td> 
                  
                    
                    <th style="color:black; font-size:14px;  font-weight:bold; padding:3px;  ">Name<textarea name="b10"></textarea></th>
                     
                    
                    <th style="color:black;  font-weight:bold; padding:2px font-size:10px;"> Age<textarea name="b11"></textarea></th> </tr>
    
           
    
    
    </table> </th></tr>
    

    <tr><td> .</td></tr>
<tr><td>.</td></tr>
    <tr><td style="font-size:12px; padding:7px; font-weight:bold;">
        No. Of Rooms* <select name="b15"  ><option value="Select">Select</option><option value=" 1"> 1 </option><option value="2">2</option><option value="3"> 3</option><option value="4"> 4</option><option value="5"> 5</option><option value="6"> 6</option><option value="7"> 7</option><option value="8"> 8</option><option value="9"> 9</option><option value="10"> 10</option></select>
        
       <b style="color:white;">---</b> Room Type* <select name="b14"  ><option value="Select">Select</option><option value="Superior"> Superior </option><option value="Deluxe">Deluxe</option><option value="Guest"> Guest</option></select>
        
    
   <th colspan="3" style="font-size:12px; padding:1px; font-weight:bold;"> Bedding Type <select name="b16" required><option value="Select">Select</option><option value="Single Bed">Single Bed</option><option value="Double Bed">Double Bed</option><option value="Triple Bed">Triple Bed</option><option value="Quad Bed">Quad Bed</option></select> 
       
    <b style="color:white;">---</b>Vehicle Type*<select name="b17"  ><option value="Select">Select</option><option value="Business class">Business class</option><option value="Economic class">Economic class</option><option value="Standard class">Standard class</option></select> </th> 
   
 
  </td></tr>
<tr><td colspan="3" style="font-size:12; padding:7; color:red;"><input type="checkbox" name="b18" value="agree">I agree the <a href="#" >terms and condition</a> of this Tourism Trades.</td></tr>
 
 <th colspan="3" style="font-size:15px; color:black; padding:2px; font-weight:bold;">Your Booking id<b style="color:white;">---</b><input type="text" name="b19"  readonly value="TT<?php echo
         rand(); ?>"></th>

    
</center>

</table>
<tr><td colspan="5" class="btn" style="margin-left:25%;"> <input type="submit" name="sbmt" value="Book"  id="bt"/></td></tr>
</table>
 
	</form></div>
	</div>
   

  <!--  header("location:payment.php");-->


<div class="bot"><center>Design By RGU BCA Student</center></div>
	
    
    
 </body>
         <style>
             .bot{
        
    background-color: aliceblue;
        padding: 5px;
        margin-top:0%;
        font-family: loto;
    }
    #bt
        {letter-spacing: 2;
            color: white;
            border-radius: 20px;
            border-width: thick;
            border-color:#1681eb;
            font-size: 15px;
            background-color: #0f6eaa;
            border-color: transparent;
            margin-left: 10em;
            font-family: loto;
        }
        #bt:hover
        {   font-weight: 900%;
            color: black;
            border-radius: 20px;
            font-size: 15px;
            border-color: rgba(255, 165, 0, 0);
            background-color: orange;
        }
               #bt1
        {
            color: white;
            letter-spacing: 2;
            border-radius: 20px;
            border-color:#2172c3;
            font-size: 12px;
            background-color: #1681eb;
            border-color: transparent; margin-left: 20px;
            
        }
        #bt1:hover
        {   font-weight: 900%;
            color: black;
            background-color: orange;
            border-radius: 20px;
            font-size: 12px;
            border-color: transparent;
             
        }
             .tableshadow input[type="text"],
.tableshadow input[type="date"],
.tableshadow input[type="email"],
.tableshadow select
 
 
 
{
    border: none;
	border-bottom: 1px solid black;
	border-top: 1px solid #d06f0e;
	background: transparent;
	outline: none;
    width: auto;
	height:auto;
	color: black;
	font-size: 13px;
     border-top-left-radius: 13px;
    border-bottom-left-radius: 13px;      

}
             .tableshadow textarea
              
             {border-color: #585858;
               border-bottom: 2px solid black;
               border-top: 2px solid black;
	           background: transparent;
                 height: 
             }
             .tableshadow
            {  background-color:rgb(255, 255, 255);
                color: black;
                font-family: loto;
                font-size: 13px;
            }
             .hh
             {
                 background-color: #ffffff;
                 
                 padding: 10px;
                 border-color: #898989;
             }
                         .tableshadow input[type="text"],
.hh input[type="date"],
.hh input[type="email"],
.hh select
 
 
 
{
    border: none;
	border-bottom: 1px solid black;
	border-top: 1px solid #d06f0e;
	background: transparent;
	outline: none;
    width: auto;
	height:auto;
	color: black;
	font-size: 13px;
     border-top-left-radius: 13px;
    border-bottom-left-radius: 13px;      

}
           .hh textarea
              
             {border-color: #585858;
               border-bottom: 2px solid black;
               border-top: 2px solid black;
	           background: transparent;
                 height: 
             }
    </style>
</html>



 