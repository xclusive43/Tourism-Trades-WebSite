 <?php if(!isset($_SESSION)) { session_start(); } ?>
<html><head><title>bk1</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="../admindatabase/Admin/style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
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

<?php
    
if(isset($_POST["sbmt"]))
{  
    
    $cn=makeconnection();
	 
    $s="insert into name values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
    	echo "<script>alert('Record Save');</script>";
     

   
}

?>
    
<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">

 
<form method="post">
<table border="7" width="90%" height="40px" align="center" class="tableshadow">
<tr><td class="toptd"><center><b> Booking</b></center></td></tr>
  <tr><td align="center" valign="top" style="padding-top:2px;">
<table border="0" align="center" width="60%" >  
 <center>
      
    <tr> <td style="font-size:12px; padding:2px; font-weight:bold;" >Name</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{2,50}" title"Please Enter Only Characters  for package name"/></td></tr>
 
     <tr><td class="btn" align="center"> </td><td><input type="submit" value="Save" name="sbmt" /></td></tr></center>

      </table>
</td></tr> </table>
    </form>
    
    <div><?php include('bottom.php'); ?></div>
 </body>
</html>
