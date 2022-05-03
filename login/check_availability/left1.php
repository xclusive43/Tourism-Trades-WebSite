<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>adduser$$</title>
<style>
    .mar
    {
        margin-left: 120px;
    }
    .t1
    {   
         
        
        margin-top: 1.8%;
        
    }
     #ba1
    {
        width: 180px;
        color: #ffffff;
        background-color: #080808;
        border-color:transparent;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        font-family: sans-serif;
        font-size: 13px;
        padding: 3px;
        margin: 1px;
        
        
    }
    #ba1:hover
    {
        pointer-events: all;
        color: #080808;
        background-color: aliceblue;
        
    }
    
    #tt1
    {    
        border-color: transparent;
        width: 18%;
        height: 20%;
        color: aliceblue;
        background-color:  #080808;
        margin-bottom: 10px;
       border-radius: 20px;
        font-weight: bold;
        text-align: center;
 
       
         
    }
    
    </style>
     
     </head>
<body>
<div class="mar"><table style="width:100%" class="t1">
 
    <tr><td><table border="2" id="tt1"><th><center><b style="color:orange; font-size:20px;">WELCOME </b><b style="color:white; text-transform:uppercase; font-size:20px;"><?php 
    echo $_SESSION["userid"]; ?></b></center></th></table> </td></tr>   

    <tr> <td><a href="../viewpackage.php"><input type="button" value="View Package" id="ba1"></a></td></tr>
 <tr><td><a href="index.php"><input type="button" value="check availability"id="ba1"></a></td></tr>
    <tr><td><a href="../bookingform.php"><input type="button" value="Package Booking" id="ba1"></a></td></tr> 

    <tr><td><a href="../booking.php"><input type="button" value="View Bookings" id="ba1"></a></td></tr>

    <!--<tr><td><a href="../updatebooking.php"><input type="button" value="Update Booking"id="ba1"></a></td></tr>
   -->

    
      <tr><td><a href="../cancle.php"><input type="button" value="Cancel Booking" id="ba1"></a></td></tr>
  <tr><td><a href="../profile.php"><input type="button" value="Profile" id="ba1"></a></td></tr>
    <tr><td><a href="../feedbackform.php"><input type="button" value="Feedback" id="ba1"></a></td></tr>
      <tr><td><a href="../logout.php"><input type="button" value="Logout" id="ba1"></a></td></tr>
 

   </table> </div>
</body>
</html>