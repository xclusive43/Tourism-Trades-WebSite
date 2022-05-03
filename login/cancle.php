<html>
    <head>
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
         <style>
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
             #top
             {
                  
                 background-color: black;
                 padding: 4px;
             }
          
       .tableshadow input[type="text"]
             {  border-color: none;
                 background:transparent;
                 border-bottom-color: black;
                 border-bottom-width: 2px;
                 padding: 5px;
                 
             }
    </style>
    </head><title>cancle</title>
<body>
  
    
    
    
  <?php  
if(isset($_POST["sbmt"]))
{  
    
    $cn=mysqli_connect("localhost","root","","tourismtrades");
	 
    $s="insert into canclerequest values('".$_POST["ui"]."','" . $_POST["d3"] ."','" . $_POST["d4"] . "','" . $_POST["d1"] . "','" . $_POST["d2"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
    echo "<script>alert('request send successfully and u will refund in 24hours');</script>";
     

   
}

?>
    
<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">

 
   <div> 
       <form method="post">
    
       <table border="0" align="center" width="500px;"   class="table12">
        
           <tr><td class="toptd" id="top"><center><b style="color:orange;">Cancel</b><b style="color:white;"> Ticket</b></center></td></tr>
  
           <tr><td align="center" valign="top" style="padding-top:2px;">

               
    <table border="0" align="right" class="th1" >
    
        <th  style="font-size:12px; text-align=center; padding:2px; font-weight:bold;">Date:<input type="text" name="d1" readonly value="<?php echo "" . date("d/m/Y") . ""; ?>"
        </th>
    
        <th  style="font-size:12px; padding:2px; font-weight:bold;">Time:<input type="text" name="d2" readonly value="<?php
        date_default_timezone_set("Asia/Kolkata"); echo "" . date("h:i:sa"); ?> "
        </th>
               
    </table>
    
    <table border="0" align="left" width="55%" class="tt2">
        <tr><th   style="font-size:14px; padding:12px; font-weight:bold;">User ID</th><th style="font-size:14px; padding:1px; font-weight:bold;"><input type="text" name="ui" readonly value="<?php echo $_SESSION["userid"]; ?>"</th></tr>
           
        <tr colspan="3"><td colspan="1"  style="font-size:14px; padding:9px; font-weight:bold;">Booking_ID<td colspan="1"><input type="text" required name="d3"  value="" pattern="[TT-0-9]{5,50}"  />
        
        <tr><td colspan="3" style="font-size:14px; padding:4px; font-weight:bold;"><input type="checkbox" name="d4" required value="pending">Confirm cancel request</td> </tr>
            <tr><td colspan="3" style="font-size:14px; padding:4px; font-weight:bold;"><a href="#">Please read the cancelation term and condition</a></td></tr>
            
         <tr><td colspan="3"><input type="submit" value="cancel" name="sbmt" id="bt" /></td></tr></td></tr> 
         </td></tr>
    </table>

</table>

</form>
	
	</div>
</div>
</div> 
   
<div class="bot"><center>Design By RGU BCA Student</center></div>
<style>
    .bot{
        
    background-color: aliceblue;
        padding: 5px;
        margin-top: 40px;
        font-family: loto;
    }
    .th1
    {
        color: black;
        padding: 20px;
    }
    .th1 input[type="text"]
    {
        background: transparent;
        border: none;
    }
    .table12
    {   height:30%;
        background-color: aliceblue;
        font-family: loto;
    }
    .table12 input[type="text"]{
        background: transparent;
         
        border-bottom-color:black;
        border-bottom-width: 2px;
    }
</style>
    </body>
</html>	    