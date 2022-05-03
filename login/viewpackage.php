<?php if(!isset($_SESSION)) { session_start(); } ?>
 
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
 

 



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="90%" height="300px" align="center" class="tableshadow">
    <tr><td class="toptd" style="background-color:black; color:white;"><center><b style="color:orange;">View</b><b> Package</b></center></td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="5" align="center" width="95%" class="ttg">
 
<td style="font-size:13px; padding:5px; font-weight:bold;">Package Name</td>
<td style="font-size:13px; padding:5px; font-weight:bold;"><center>Discription</center></td>
<td style="font-size:13px; padding:5px; font-weight:bold;">Category</td>
<td style="font-size:13px; padding:5px; font-weight:bold;">Price</td>
<!--<td style="font-size:12px; padding:5px; font-weight:bold;">images</td>-->
 </tr>

<?php
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from package";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
  echo "<tr><td style=' padding:2px; color:black; font-size:12px;'>$data[0]</td>
		<td style=' padding:2px; color:black; font-size:12px;'>$data[1]</td>
		<td style=' padding:2px; color:black; font-size:12px;'>$data[2]</td>
		<td style=' padding:2px; color:black; font-size:12px;'>$data[3]</td>
		 </tr>";

}

?>
 
    </td></tr>
    </table></table>

</form>
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