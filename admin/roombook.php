<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from bookings where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{   $bookingid=$row['Booking_id'];
                   $price=$row['price'];
                 $pname =$row["package_name"];
                    $u=$row['userid'];
                    $cat=$row['categroy'];
				    $price=$row['price'];
					$title = $row['Title'];
					$fname = $row['FName'];
					$lname = $row['LName'];
					$age = $row['age'];
					$email = $row['Email'];
					$address = $row['full_address'];
					$country = $row['Country'];
					$Phone = $row['Phone'];
					$adults = $row['adults'];
					$child = $row['child'];
					$mname = $row['names'];
					$mage = $row['ages'];
					 
					$cin = $row['cin'];
					$cout = $row['cout'];
					 
					$days = $row['nodays'];
					$room = $row['room'];
					$nroom = $row['no_room'];
					$bed = $row['bedding'];
					$veh = $row['vehicle'];
					$tc = $row['T&C'];
					$status = $row['stat'];
                 
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
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
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i>  Bookings</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                      <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Add Package</a>
                    </li>
					<li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Conformation
                        </div>
                        <div class="panel-body">
							<style>
                            .table-responsive tr
                                {
                                    color: black;
                                }
                            </style>
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                      <tr>
                                            <th>Booking Id</th>
                                            <th><?php echo $bookingid; ?> </th>
                                            
                                        </tr>
                                    <tr>
                                            <th>Package</th>
                                            <th><?php echo $pname; ?> </th>
                                            
                                        </tr>
                                    <tr>
                                            <th>Category</th>
                                            <th><?php echo $cat;?> </th>
                                            
                                        </tr>
                                    <tr>
                                            <th>Price</th>
                                            <th><?php echo $price; ?> </th>
                                            
                                        </tr>
                                      <tr>
                                            <th>User Id</th>
                                            <th><?php echo $u; ?>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $title.$fname.$lname; ?> </th>
                                            
                                        </tr>
                                    <tr>
                                            <th>Age</th>
                                            <th><?php echo $age; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Full-Address </th>
                                            <th><?php echo $address; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Country </th>
                                            <th><?php echo $country;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Phone No.</th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Adults</th>
                                            <th><?php echo $adults; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Childrens</th>
                                            <th><?php echo $child; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Members name</th>
                                            <th><?php echo $mname; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Members Age</th>
                                            <th><?php echo $mage; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-in Date </th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-out Date</th>
                                            <th><?php echo $cout; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No. of days</th>
                                            <th><?php echo $days; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Room Type</th>
                                            <th><?php echo $room; ?></th>
                                            
                                        </tr>
                                    	<tr>
                                            <th>No. Of Room </th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr>
                                    	<tr>
                                            <th>Bedding Type</th>
                                            <th><?php echo $bed; ?></th>
                                            
                                        </tr>
                                        	<tr>
                                            <th>Vehicle Type</th>
                                            <th><?php echo $veh; ?></th>
                                            
                                        </tr>
                                    	<tr>
                                            <th>Terms & Conditions</th>
                                            <th><?php echo $tc; ?></th>
                                            
                                        </tr>
                                        	<tr>
                                            <th>Status Level</th>
                                            <th><?php echo $status; ?></th>
                                            
                                        </tr>
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Select the Conformation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Confirm">Confirm</option>
																<option value="Not Confirm">Not Confirm</option>
															
															
														</select>
										 </div>
							<input type="submit" name="co" value="Confirm" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Superior Room" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="Guest House")
							{
								$gh = $gh + 1;
							}
							if($s=="Single Room" )
							{
								$sr = $sr + 1;
							}
							if($s=="Deluxe Room" )
							{
								$dr = $dr + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="Superior"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="Guest" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="Single" )
							{
								$csr = $csr + 1;
							}
							if($cs=="Deluxe" )
							{
								$cdr = $cdr + 1;
							}
							
						
						}
				
					?>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Available Room Details
                        </div>
                        <div class="panel-body">
						<table width="200px">
							
							<tr>
								<td><b>Superior Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php  
									$f1 =$sc - $csc;
									if($f1 <=0 )
									{	$f1 = "NO";
										echo $f1;
									}
									else{
											echo $f1;
									}
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Guest House</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								$f2 =  $gh -$cgh;
								if($f2 <=0 )
									{	$f2 = "NO";
										echo $f2;
									}
									else{
											echo $f2;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Single Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php
								$f3 =$sr - $csr;
								if($f3 <=0 )
									{	$f3 = "NO";
										echo $f3;
									}
									else{
											echo $f3;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Deluxe Room</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								
								$f4 =$dr - $cdr; 
								if($f4 <=0 )
									{	$f4 = "NO";
										echo $f4;
									}
									else{
											echo $f4;
									}
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 
								
								$f5 =$r-$cr; 
								if($f5 <=0 )
									{	$f5 = "NO";
										echo $f5;
									}
									else{
											echo $f5;
									}
								 ?> </button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
							 
							
							if($st=="Confirm")
							{
									$urb = "UPDATE `bookings` SET `stat`='$st' WHERE id = '$id'";
									
								if($f1=="NO" )
								{
									echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
								}
								else if($f2 =="NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Guest House')</script>";
										
									}
									else if ($f3 == "NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
									}
										else if($f4=="NO")
										{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
										}
										
										else if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
												//echo "<script type='text/javascript'> window.location='home.php'</script>";
												        
														if($room=="Superior")
														{
															$room = 320;
														
														}
														else if($room=="Deluxe")
														{
															$room = 220;
														}
														else if($room=="Guest")
														{
															$room = 180;
														}
														 
														
														
														
														
														if($bed=="Single Bed")
														{
															$tbed = $room * 1/100;
														}
														else if($bed=="Double Bed")
														{
															$tbed = $room * 2/100;
														}
														else if($bed=="Triple Bed")
														{
															$tbed = $room * 3/100;
														}
														else if($bed=="Quad Bed")
														{
															$tbed = $room * 4/100;
														}
														else if($bed=="None")
														{
															$tbed = $room * 0/100;
														}
														 
                                                if($veh=="Business class")
                                                {
                                                    $tveh = $days * 100;
                                                }
                                                else if($veh=="Economic class")
                                                {
                                                    $tveh = $days * 200;
                                                }
                                                else if($veh=="Standard class")
                                                {
                                                    $tveh = $days * 300;
                                                }
                                                //adults//
                                                if($adults=="1")
                                                {
                                                    $tadults = $days * 100;
                                                }
                                                else if($adults=="2")
                                                {
                                                    $tadults = $days  * 200;
                                                }
                                                 else if($adults=="3")
                                                {
                                                    $tadults = $days  * 300;
                                                }
                                                 else if($adults=="4")
                                                {
                                                    $tadults = $days  * 400;
                                                }
                                                 else if($adults=="5")
                                                {
                                                    $tadults = $days  * 500;
                                                }
                                                 else if($adults=="6")
                                                {
                                                    $tadults = $days  * 600;
                                                }
                                                 else if($adults=="7")
                                                {
                                                    $tadults = $days  * 700;
                                                }
                                                 else if($adults=="8")
                                                {
                                                    $tadults = $days  * 800;
                                                }
                                                  
                                                else if($adults=="9")
                                                {
                                                    $tadults = $days  * 900;
                                                }
                                                 else if($adults=="10")
                                                {
                                                    $tadults = $days  * 1000;
                                                }
                                                //childrens//
                                                   if($child=="0")
                                                {
                                                    $tchild= 0;
                                                }
                                                
                                                if($child=="1")
                                                {
                                                   $tchild= $days  * 50;
                                                }
                                                else if($child=="2")
                                                {
                                                   $tchild = $days * 100;
                                                }
                                                 else if( $child =="3")
                                                {
                                                    $tchild  = $days  *150;
                                                }
                                                 else if( $child =="4")
                                                {
                                                     $tchild  = $days  * 200;
                                                }
                                                 else if( $child =="5")
                                                {
                                                     $tchild  = $days  * 250;
                                                }
                                                 else if( $child =="6")
                                                {
                                                    $tchild  = $days  * 300;
                                                }
                                                 else if( $child =="7")
                                                {
                                                     $tchild  = $days  * 350;
                                                }
                                                 else if( $child =="8")
                                                {
                                                     $tchild  = $days * 400;
                                                }
                                                  
                                                else if( $child =="9")
                                                {
                                                     $tchild  = $days  * 450;
                                                }
                                                 else if( $child =="10")
                                                {
                                                    $tchild  = $days  * 500;
                                                }
                                                
                                                
													
													
														
													 
														
														
														$ttot = $room * $days * $nroom;
														 
														$btot = $tbed * $days;
														
														$fintot = $ttot + $btot + $price + $tveh + $tadults + $tchild;
															
															//echo "<script type='text/javascript'> alert('$count_date')</script>";
														$psql = "INSERT INTO `payment`(`id`,`booking_id`,`package_name`,`category`,`package_price`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `btot`,`fintot`,`noofdays`,`t_adults`,`t_childs`,`t_vehicle`,`userid`) VALUES ('$id','$bookingid','$pname','$cat','$price','$title','$fname','$lname','$room','$tbed','$nroom','$cin','$cout','$ttot','$btot','$fintot','$days','$tadults','$tchild','$tveh','$u')";
														
														if(mysqli_query($con,$psql))
														{	$notfree="NotFree";
															$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$room' ";
															if(mysqli_query($con,$rpsql))
															{
															echo "<script type='text/javascript'> alert('Booking Conform')</script>";
															echo "<script type='text/javascript'> window.location='roombook.php'</script>";
															}
															
															
														}
												
											}
									
                                        
							}	
					
						}
					
									
									
							
						?>