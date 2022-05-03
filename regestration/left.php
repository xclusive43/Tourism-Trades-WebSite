<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>adduser$$</title>
<style>
    body
    {
        padding: 10px;
       background-image: url(background/186789-background.jpg);
        background-position: center;
    }
    .t1
    {
        color: #168e93;
    }
     </style>
     </head>
<body>
<table style="width:100%" class="t1">
     <?php if($_SESSION["usertype"]=="Admin")
{?>
    <tr><td style="font-size:30px"><U>admin must login from admin login page to enter the site</U></td></tr>
    
 
<?php }?>

 <?php if($_SESSION["usertype"]=="User")
{?>
    <tr><td style="font-size:30px"><U>welcome user</U></td></tr>
<tr> <td><a href="viewpackage.php">View Package</a></td></tr>
<tr><td><a href="bookingform.php">Booking Package</a></td></tr> 
<tr><td><a href="viewbooklogin.php">View Bookings</a></td></tr>
<tr><td><a href="updatebooking.php">Update Booking</a></td></tr>
<tr><td><a href="cancle.php">Cancle Booking</a></td></tr>
<tr><td><a href="feedbackform.php">Feedback</a></td></tr>
<?php }?>

   </table> 
</body>
</html>