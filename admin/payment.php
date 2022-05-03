<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>payment</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                   <!-- <li>
                        <a  href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>-->
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i>Bookings</a>
                    </li>
                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                      <li>
                        <a   href="manageuser.php"><i class="fa fa-qrcode"></i>Manage User</a>
                    </li>
                      <li>
                        <a   href="managepackage.php"><i class="fa fa-qrcode"></i> Manage Packages</a>
                    </li>
                     <li>
                        <a  href="cancle.php"><i class="fa fa-qrcode"></i> Cancle Request</a>
                    </li>
                                        <li>
                        <a  href="feedback.php"><i class="fa fa-qrcode"></i> User Feedback</a>
                    </li>
                    
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Payment Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 <style>
                .panel-body
                     {
                         color: black;
                     }
                </style>
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="f1"><form method="post" ><select name="dd" ><option>select Booking ID
                    
                    <?php
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from payment";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<option value=$data[1]>$data[1]</option>";
	     
}
mysqli_close($cn);



?>
                    
    </option></select><input type="submit" name="det" value="Delete Payment" id="d1"></form></td></th>
                
</tr>
<?php
if(isset($_POST["det"]))
{
	$cn=mysqli_connect("localhost","root","","tourismtrades");
	$s="delete from payment  where booking_id='" . $_POST["dd"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Payment Deleted Successfully');</script>";
}
?> </div>
                            <div class="table-responsive">
                                <table style="border-color:blue;" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="color:black; font-family:loto;">
                                            <th>Booking ID</th>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>No. Of Days</th>
								            <th>Check in</th>
											<th>Check out</th>
											<th>No of Room</th> 
                                            <th>Total Room Rent</th>
											<th>Total Bed Rent</th>
								            <th>Adults Amount</th>
                                            <th>childrens Amount</th>
                                            <th>vehicle Amount</th>
											<th>Gr.Total</th>
											<th>Print</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody style="color:black; font-family:loto;">
                                        
									<?php
										include ('db.php');
										$sql="select * from payment";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
                                                     <td>".$row['booking_id']."</td>
                                                     <td>".$row['userid']."</td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td><td>".$row['noofdays']."</td>
													 
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													<td>".$row['nroom']."</td> 
                                                    <td>".$row['ttot']."</td>
				                                    <td>".$row['btot']."</td>
                                                     <td>".$row['t_adults']."</td>
                                                      <td>".$row['t_childs']."</td>
                                                      <td>".$row['t_vehicle']."</td>
													<td>".$row['fintot']."</td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
											     
                                                 <td>".$row['booking_id']."</td>
                                                       <td>".$row['userid']."</td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td><td>".$row['noofdays']."</td>
													 
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													<td>".$row['nroom']."</td> 
                                                    <td>".$row['ttot']."</td>
				                                    <td>".$row['btot']."</td>
                                                     <td>".$row['t_adults']."</td>
                                                      <td>".$row['t_childs']."</td>
                                                      <td>".$row['t_vehicle']."</td>
													<td>".$row['fintot']."</td>
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
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
<style>
                            .table{
                                font-size: 12px;
                                 
                            }
                            .f1
                            {   font-size: 11px;
                                margin-left: 50%;
                                margin-bottom: -1%;
                            }
                            .f1 input[type="submit"]
                            {
                                 border-radius: 15px;
                                background-color: #fcfcfc;
                                color: black;
                                border-color: transparent;
                                
                                
                            }
                               .f1 input[type="submit"]:hover
                            {
                                 border-radius: 15px;
                                background-color: #000000;
                                color: #ffffff;
                                border-color: transparent;
                                
                                
                            }
                            .f1 select
                            {
                                border-color: transparent;
                                background-color: transparent;
                                border: none;
                                border-bottom: 2px solid #fff;
                            }
                            </style>
</html>
