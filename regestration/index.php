<?php if(!isset($_SESSION)) { session_start(); } ?>

 
<!DOCTYPE html>
<html>
<head>
<title>tourism trades</title>
 
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
<?php include('left.php'); ?>
</div>
<div class="col-sm-9" align="center"><img src="../admindatabase/Admin/background/Summer-Sky-HD-Wallpapers.jpg" style="padding-top:40px"  width="700px" height="440px"/></div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>