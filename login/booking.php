 <?php if(!isset($_SESSION)) { session_start(); }
  error_reporting(0);
?>

 
<html><head> <title>viewbooking</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="../css2/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css2/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="../js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css2/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
    
       <style>
    #bt
        {   
            padding: 2px;
            letter-spacing: 3;
            font-family: loto;
            color: white;
           border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            font-size: 15px;
            background-color: #0e21af;
            border-color: #0e21af;
        }
        #bt:hover
        {
            color: black;
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            font-size: 15px;
            border-color: orange;
            background-color: orange;
        }
           .tableshadow
             
           {  font-size: 23px;
               
               margin-top: 3%;
               margin-left: 2%;
               margin: 2%;
               background-color: white;
               font-family: loto;
               height: 5%;
               width: 10%;
                text-align: center;
               
           }
           .tableshadow input[type="text"]
           {
               padding: 2px;
               border: none;
	           border-bottom: 1px solid black;
                border-top: 2px solid black;
               background: transparent;
	           outline: none;
	           height: 23px;
	           color: black;
	           font-size: 13px;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;      
                
            }
.tableshadow1
           
           
           {    
               border-color: firebrick;
               text-align:left;
               background-color: rgba(245, 245, 245, 0.88);
               background-size: cover;
               font-family:sans-serif;
               font-weight: bold;
               height: 20em;
               width: 40em;
               margin-top: 100px; 
               
               color: black;
              
               
                
               
           }
.tableshadow1 input[type="text"],
.tableshadow1 input[type="date"]
    {
    padding: 10px;
    border: none;
    text-align: center;
	background: transparent;
	outline: none;
	height: 29px;
	color: black;
        width: auto;
	font-size: 14px;
     border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;      

}
.tab2{         margin-top: 20px;
               width: 300px;
               height: 50px;
           }
.table33
           {   margin: 20px;
               
               font-family: loto;
               color: black;
               font-size: 14px;
               text-align: center;
               border-color: aliceblue;
               
               border-style: dashed;
           }
           .tableshadow1 textarea
            
             {border-color: transparent;
              
                
	           background: transparent;
                 height: 60px;
             }
            .tables  
           {   padding: 2px;
               background-color: aliceblue;
               border-left-color:3px solid #0c71c9;
               color: black;
               font-size: 15px;
               font-family:sans-serif;
               font-weight: 500;
               width:52%;
               margin-left: 2%;
             margin-bottom: auto;
           }
           .tables tr  th
           {   padding: 2px;
               background-color: aliceblue;
               border:3px solid #000000;
               color: black;
               font-size: 13px;
               font-family:sans-serif;
               font-weight: 500;
                
               margin-left: 2%;
             margin-bottom: auto;
           }
            .tables tr  td
           {   padding: 2px;
               background-color: aliceblue;
              border:3px solid #000000;
               color: black;
               font-size: 15px;
               font-family:sans-serif;
               font-weight: 600;
                
               margin-left: 2%;
             margin-bottom: auto;
           }
            
           .toptd
           {
               font-size: 16px;
           }
    </style>
 
</head>
    
<body>
 <?php
        
        if(isset($_POST["sbmt"]))
{
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from bookings where Booking_id='".$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
if($r>0){
$data=mysqli_fetch_array($result);
$pname=$data[1];
$pprice=$data[3];
$title=$data[4];
$fname=$data[5];
$lname=$data[6];
$age=$data[7];
$email=$data[8];
 
 $mobile=$data[11];
$adult=$data[12];
$child=$data[13];
$mname=$data[14];
$mage=$data[15];
$in=$data[16];
$out=$data[17];
$no=$data[18];
 $room=$data[19];
 $nroom=$data[20];
 $bed=$data[21];
$vehicle=$data[22];
$stat=$data[24];
$tt=$data[25];
$id=$data[0];
 
 
   
}

else
 
   echo "<script> INVALID BOOKING ID </script>"; 
 
    
    
}

?>
     <?php
        
        if(isset($_POST["sbmt"]))
{
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from payment where booking_id='".$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
if($r>0){
$data=mysqli_fetch_array($result);
$fn=$data[19];
 
 
   
}


   
    

}
      
 
?>

<?php include('top.php');
    ?>


<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 30px black; min-height:590px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999;" style=" min-height:600px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-8">

<form method="post" action="booking.php">
<table border="0"   align="left" class="tableshadow">
    
<tr>
	<td colspan="0" class="toptd" style="background-color:black; padding:10px;" > <center><b style="color:orange">Your <b style="color:#f7f7f7">Bookings</b></center> </td>
</tr>

<td class="lefttxt">
<table border="1" align="left" width="300px" height="50px">
<th style="font-size:14px; text-align:center;    font-weight:bold;">Your Booking Id</th><th style="font-size:14px; text-align:center;    font-weight:bold;">Status</th>	 

    <tr>
    <td style="font-size:14px; text-align:center; font-weight:bold;color:#ed620c; letter-spacing:1;">
        
        <?php
 
 
	$cn=mysqli_connect("localhost","root","","tourismtrades");
	$s="select * from bookings ORDER BY userid='" .$_SESSION["userid"]. "'";
	
	 
	 
	
if ($result=mysqli_query($cn,$s))
{
     while ($row=mysqli_fetch_row($result))
    {
      
      printf("%s<br>" ,  $row[25]);
         
    }
   
}mysqli_close($cn);
 
	 

 
?></td>
        <td style="font-size:14px; text-align:center; font-weight:bold;color:#47b72d; letter-spacing:1;">  <?php
 
 
	$cn=mysqli_connect("localhost","root","","tourismtrades");
	$s="select * from bookings ORDER BY userid='" .$_SESSION["userid"]. "'";
	
	 
	 
	
if ($result=mysqli_query($cn,$s))
{
     while ($row=mysqli_fetch_row($result))
    {
      
      printf("%s<br>" ,  $row[24]);
         
    }
   
}mysqli_close($cn);
 
	 

 
?></td>
	
    </td>
</tr>
</table>
    <table border="1" align="left" width="300px" height="50px">
	 
<td class="lefttxt" style="font-size:14px; padding:10px;font-weight:bold;">Enter Your Booking ID To Print:-
	<input type="text" name="t1" required pattern="[a-zA-Z0-9!@#$%^&*()./?+_=-]{1,100}" title"Please Enter Only Characters between 1 to 10 for Password" /><input type="submit" value="view" name="sbmt" id="bt"/>
	</td>
    
		
	
    </td>

</table>
  
</table>

 </form>
    
<?php  
  
if(!isset($_SESSION))  
{
 header("location:index.php");
}
?> 
  
                                <table  border="3" text-align:center; class="tables"  >
                                    <tr>
	<td colspan="2" class="toptd" style="background-color:black; padding:10px;" > <center><b style="color:orange">Booking<b style="color:#f7f7f7"> Description</b></center> </td>
</tr>
                                    <tr><td colspan="1">Booking ID</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $tt;} ?></th> </tr>
                                    
                                    <tr><td colspan="1">Package Name</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $pname;} ?> </th>
                                         </tr>
                                    
                                    
                                    
                                     
                                    
                                    <tr><td colspan="1">User Name</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $title, $fname , $lname;} ?></th>
                                         
                                    </tr>
                                    
                                    <tr><td colspan="1">Check IN Date</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $in;} ?></th>
                                         
                                    </tr>
                                    <tr><td colspan="1">Check Out Date</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $out;} ?></th>
                                        
                                    </tr>
                                    <tr><td colspan="1">Number Of Days</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $no;} ?></th>
                                         
                                    </tr>
                                    <tr><td colspan="1" >No. OF Rooms</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $nroom;} ?></th>
                                         
                                    </tr>
                                    
                                     <tr> <td colspan="1">Room Type</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $room;} ?></th>
                                         
                                    </tr> 
                                     <tr> <td colspan="1" >Beddings</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $bed;} ?></th>
                                         
                                    </tr>
                                     <tr ><td colspan="1">Vehicle Class</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $vehicle;} ?></th>
                                          
                                    </tr>
                                    <tr><td colspan="1">Adults</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $adult;} ?></th>
                                         
                                    </tr>
                                    
                                    <tr><td colspan="1">Childrens</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $child;} ?></th>
                                        
                                    </tr>
                                    <tr><td colspan="1">Booking Status</td>
                                        <th><?php if(isset($_POST["sbmt"])){ echo $stat;} ?></th>
                                         
                                    </tr>
                                     <tr><td colspan="1">Grand Total</td>
                                         <th><?php if(isset($_POST["sbmt"])){
    echo "Rs."; echo $fn;} ?></th>
                                         </tr>
                                    
                                    <tbody style="color:black; font-family:loto;">
                                        
									<?php
                                             if(isset($_POST["sbmt"]))
{
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from payment where Booking_id='".$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
if($r>0){
$data=mysqli_fetch_array($result);
												echo"<tr class='gradeC'>
                                                     
                                                     
													  
                                                    <td></td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
											      
                                                    <td> </td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                           
</div>

	</div>
	</div>
    
<div class="bot"><center>Design By RGU BCA Student</center></div>
     <style>
             
                .bot{
        
    background-color: aliceblue;
        padding: 5px;
        margin-top:1.5%;
        font-family: loto;
    }
         .t45
         { background-color: aqua;
             
         }
     </script>
         
                                        
 </body>
</html>



 