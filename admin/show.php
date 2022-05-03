<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice Book</title>
		
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 76%;  font-family: loto; font-weight: bold; width: 100%; letter-spacing:.3; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; width: 60%; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #00ADEE; border-color: #00ADEE; }
td { border-color: #00ADEE;  }
            

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #6c6868; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; font-family: loto; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #e23d3d; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
		
	</head>
	<body>
	<?php
	ob_start();	
	include ('db.php');

	$pid = $_GET['sid'];
	
	$sql ="select * from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		 
        $adult2=$row['t_adults'];
        $child3 =$row['t_childs'];
        $vehicle=$row['t_vehicle'];
    }?>
	
	
	<?php
	ob_start();	
	include ('db.php');

	$pid = $_GET['sid'];
    
	
	
	
	$sql ="select * from bookings where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
        $packagename= $row['package_name'];
        $cat = $row['categroy'];
        $price = $row['price'];
        
		$title =  $row['Title'];
		$Fname = $row['FName'];
		$lname = $row['LName'];
        $age = $row ['age'];
		$email = $row['Email'];
		 $address=$row['full_address'];
        
		$country = $row['Country'];
		$phone = $row['Phone'];
        $adult = $row ['adults'];
        $child =$row['child'];
        $mname=$row['names'];
        $mage=$row['ages'];
        $cin_date = $row['cin'];
		$cout_date = $row['cout'];
        
		
        $days =$row['nodays'];
        $troom  = $row['room'];
        $nroom  = $row['no_room'];
		$bed = $row['bedding'];
		$veh = $row['vehicle'];
        $tc =$row['T&C'];
        $status =$row['stat'];
        $bookingid =$row['Booking_id'];
		 
	
	}
         
	                       
                                if($troom=="Superior")
									{
										$room = 320;
									
									}
									else if($troom=="Deluxe")
									{
										$room = 220;
									}
									else if($troom=="Guest")
									{
										$room = 180;
									}
									else if($troom=="Single")
									{
										$room = 150;
									}
				 
					 			 
        
                                if($bed=="Single Bed")
									{
										$b = $room * 1/100; 
									}
									else if($bed=="Double Bed")
									{
										$b = $room * 2/100;
									}
									else if($bed=="Triple Bed")
									{
										$b = $room * 3/100;
									}
									else if($bed=="Quad Bed")
									{
										$b = $room * 4/100;
									} 				
                       
								  
									     
                    
                       
                                                
                                            if($veh=="Business class")
                                                {
                                                    $veh2 =100;
                                                }
                                                else if($veh =="Economic class")
                                                {
                                                    $veh2 = 200;
                                                }
                                                else if($veh=="Standard class")
                                                {
                                                    $veh2 = 300;
                                                }
           if($adult=="1")
        {
            $adultss=100;
        }
        else if($adult=="2")
        {
            $adultss=200;
        }
		 else if($adult=="3")
        {
            $adultss=300;
        } else if($adult=="4")
        {
            $adultss=400;
        } else if($adult=="5")
        {
            $adultss=500;
        }
         else if($adult=="6")
        {
            $adultss=600;
        }
         else if($adult=="7")
        {
            $adultss=700;
        }
         else if($adult=="8")
        {
            $adultss=800;
        }
         else if($adult=="9")
        {
            $adultss=900;
        } else if($adult=="10")
        {
            $adultss=1000;
        }
        ///////////////
        if($child=="0")
        {
            $ch=0;
        }
        else if($child=="1")
        {
             $ch=50;
        }
        else if($child=="2")
        {
             $ch=100;
        }
		 else if($child=="3")
        {
             $ch=150;
        }
        else if($child=="4")
        {
             $ch=200;
        } else if($child=="5")
        {
            $ch=250;
        }
         else if($child=="6")
        {
             $ch=300;
        }
         else if($child=="7")
        {
             $ch=350;
        }
         else if($child=="8")
        {
             $ch=400;
        }
         else if($child=="9")
        {
            $ch=450;
        } else if($child=="10")
        {
            $ch=500;
        }
		
                                    
								 $rtotal=$nroom*$days*$room ;
                                $bb=$b * $days;
                                $veh3 = $veh2 * $days;
        ?>
	 
		<header>
			<h1>Invoice</h1>
			<address style="font-family:loto; font-weight: bold; letter-spacing:.3;" >
				<p>TOURISM TRADES,</p>
				<p>RGU,rono hills <br>Doimukh,791112<br>Arunachal Pradesh<br>India</p>
				<p>(+94) 12 345 56 78</p>
			</address>
			<span><h1 style="background-color:black; border-radius:0; padding:10px; font-size:21px; color:orange; font-family:loto;">TOURISM <b style="color:white;">TRADES</b></h1></span>
        </header>
		<article>
			<h1></h1>
			<address >
				
				 <style>
                     m{
                         
                       
                     }
                </style>
				<p style="background-color:black;   border-radius:2px; font-size:20px; letter-spacing:2;font-family:loto; color:white; padding:9px;   text-transform: uppercase;  ">Coustomer <b style="color:white;">Name</b> </p><br><p style="text-transform: uppercase;font-family:loto; font-size:17x;"><?php echo $title.$Fname." ".$lname;?><br></p><br>
                <p style="font-size:13px;"><?php echo $email ?></p><br>
                <p style="font-size:13px;"><?php echo $phone ?></p>
                
			 
                
                <address style="font-family:loto; font-size:11px;" >
				     
                         
				
                    
                     
			</address>
            
            </address>
           
			<table class="meta">
				<tr>
					<th><span >Booking<b style="color:#00ADEE;">.</b>ID</span></th>
					<td><span ><?php echo $bookingid; ?></span></td>
				</tr>
				<tr>
					<th><span >Check<b style="color:#00ADEE;">.</b>In<b style="color:#00ADEE;">.</b>Date</span></th>
					<td><span ><?php echo $cin_date; ?> </span></td>
				</tr>
				<tr>
					<th><span >Check<b style="color:#00ADEE;">.</b>Out<b style="color:#00ADEE;">.</b>Date</span></th>
					<td><span ><?php echo $cout_date; ?> </span></td>
				</tr>
                <tr>
					<th><span >Address</span></th>
					<td><span ><?php echo $address; ?> </span></td>
				</tr>
				
			</table>
		 
				 
				<br>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Items</span></th>
						<th><span >No of Days</span></th>
						<th><span >Rate(Rs.)</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price(Rs.)</span></th>
					</tr>
				</thead>
				<tbody>
					<tr style="background-color:#ffffff;">
                        <td><span><b style=" font-size:12px; font-family:loto;   letter-spacing:1;">Package:-<?php echo $packagename; ?></b></span></td>
                        <td><span ><?php echo $days; ?> </span></td>
						<td><span data-prefix></span><span ><?php  echo $price;?></span></td>
						<td><span >1</span></td>
						<td><span data-prefix></span><span><?php echo $price  ?></span></td>
					</tr>
                    <tr>
						<td><span ><b style="font-size:12px; font-family:loto;   letter-spacing:1;">Room Type:-<?php echo $troom; ?></b></span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span> <span ><?php  echo $room; ?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix></span> <span><?php echo $rtotal; ?></span></td>
					</tr>
					<tr>
						<td><span ><b style="font-size:12px; font-family:loto;   letter-spacing:1;">Beeding Type:-<?php echo $bed; ?> </b> </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span> <span ><?php  echo $b;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix></span> <span><?php echo    $bb;?></span></td>
					</tr>
                    	<tr>
						<td><span ><b style="font-size:12px; font-family:loto;   letter-spacing:1;">Vehicle Type:-<?php echo $veh; ?></b>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span> <span ><?php  echo $veh2;?></span></td>
						<td><span >1</span></td>
						<td><span data-prefix></span> <span><?php echo $veh3; ?></span></td>
					</tr>
                    	<tr>
						<td><span ><b style="font-size:12px; font-family:loto;   letter-spacing:1;">Adults</span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span> <span ><?php  echo $adultss;?></span></td>
						<td><span ><?php echo $adult; ?></span></td>
						<td><span data-prefix></span> <span><?php echo $adult2 ?></span></td>
					</tr>
                    </tr>
                    	<tr>
						<td><span ><b style="font-size:12px; font-family:loto;   letter-spacing:1;">Childrens</span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span><span ><?php  echo $ch;?></span></td>
						<td><span ></span><?php echo $child; ?></td>
						<td><span data-prefix></span> <span><?php echo $child3 ?></span></td>
					</tr>
                </tr>
                    	 
                <thead>
					<tr>
						<th><span > </span></th>
						<th><span > </span></th>
						<th><span > </span></th>
						<th><span >Total Amount</span></th>
						<th><span ><?php echo $price + $rtotal + $bb + $veh3 + $adult2 + $child3;?></span></th>
					</tr>
				</thead>
				</tbody>
			</table>
			
			
		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :- TourismTrades@gmail.com || Web :- www.TourismTrades.com || Phone :- +94 12 345 67 89 </p>
			</div>
		</aside>
	</body>
</html>

<?php 

ob_end_flush();

?>