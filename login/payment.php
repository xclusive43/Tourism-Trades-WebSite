 <?php if(!isset($_SESSION)) { session_start(); } ?>
<html><head>

<title>payment##</title>

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
    <style>
    #bt
        {
            color: white;
            border-radius: 20px;
            font-size: 15px;
            background-color: black;
        }
        #bt:hover
        {
            color: black;
            border-radius: 20px;
            font-size: 15px;
            background-color: antiquewhite;
        }
    </style>
</head>

<body>
   <?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?> 
   
    
    
    <?php include('connection.php'); ?>

<?php
    
if(isset($_POST["sbmt"]))
{  
    
    $cn=makeconnection();
	 
    $s="insert into payment values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] ."','" . $_POST["t5"] . "','" . $_POST["t6"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	header("location:index.php");
    echo "<script>alert('payment successful');</script>";
}

?>

  <?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">
    
    
<center>
   
     <form method="post" >
         <table border="5" width="90%" height="300px" align="center" class="tableshadow"> 
        
             <tr><td colspan="2"><center><b><h3>Make Payment</h3></b></center></td> </tr>     
       
             <tr><td class="lefttxt"style="font-size:12px;   font-weight:bold;">Card Number<th><input type="text" name="t1" required pattern="[0-9]{16}" title"Please Enter correct digit" /></th></td></tr>  
 
            <tr><td class="lefttxt"style="font-size:12px;   font-weight:bold;">Bank Name <th><input type="text" name="t2" required pattern="[a-zA-z1 _]{2,50}" title"Please Enter  correct bank name"/></th></td></tr> 
                        
            <tr><td class="lefttxt"style="font-size:12px;   font-weight:bold;">Holder Name<th><input type="text" name="t3" required pattern="[a-zA-z1 _]{2,50}" title"Please Enter  correct user name"/></th></td></tr> 
        
            <tr><td class="lefttxt"style="font-size:12px;   font-weight:bold;"> Card Type<th><select name="t4" required><option value="Select">Select</option><option value="master">master</option><option value="visa"> visa</option><option value="rupay card">rupay card</option> </select></th></td></tr>
            <tr><td class="lefttxt"style="font-size:12px;   font-weight:bold;">  Expiration Date <th><input name="t5" type="date" value="<?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?>"  /></th></td></tr> 
            <tr><td class="lefttxt"style="font-size:12px;   font-weight:bold;">  cvc<th><input type="number" name="t6" required pattern="[0-9]{3}"></th></td></tr>
            <td><center><th ><input type="submit" value="pay" name="sbmt" id="bt" /></th></td>
         
       
    </table>
     </form>
    
   
</div>
</div>
<div><?php include('bottom.php'); ?></div> 
</body>
</html>




 


 






 