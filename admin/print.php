
<html>
	<head>
		<meta charset="utf-8">
		<title>InvoicePayment</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
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

h1 { font-display: block; font-size: 17px; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; letter-spacing:.4; font-family: loto; font-weight: bold;}
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #00ADEE; border-color: #00ADEE; }
td { border-color: #00ADEE; }

/* page */

html { font: 14px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: rgba(111, 107, 107, 0.94); cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #fcfcfc; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 80%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
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
aside h1 { border-color: #999; border-bottom-style: solid; }

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
             h2
            {
                color:orange;
                background-color: black;
                padding: 13px;
                font-family: loto;
                font-size: 21px;
                font-weight: 800;
                letter-spacing: 10;
            }
		</style>
		
	</head>
	<body>
	
	
	
	
	<?php
	ob_start();	
	include ('db.php');

	$pid = $_GET['pid'];
	
	
	
	$sql ="select * from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
        $booking_id=$row['booking_id'];
		$title = $row['title'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$pname = $row['package_name'];
		$cat = $row['category'];
		$price = $row['package_price'];
        
        $troom = $row['troom'];
		$bed = $row['tbed'];
		$nroom = $row['nroom'];
		$cin = $row['cin'];
		$cout = $row['cout'];
		 
		$ttot = $row['ttot'];
		 
		$btot = $row['btot'];
		$fintot = $row['fintot'];
		$days = $row['noofdays'];
        $adult2=$row['t_adults'];
        $child3 =$row['t_childs'];
        $vehicle=$row['t_vehicle'];
		
		
		
	
	}
    $sql ="select * from bookings where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
        $adults = $row['adults'];
        $child = $row['child']; 
        $vehicle1=$row['vehicle'];
        $room2 = $row['room']; 
        $bedb=$row['bedding'];
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
									
									if($bedb=="Single Bed")
									{
										$bed = 320 * 1/100;
									}
									else if($bedb=="Double Bed")
									{
										$bed = 320 * 2/100;
									}
									else if($bedb=="Triple Bed")
									{
										$bed = 320* 3/100;
									}
									else if($bedb=="Quad Bed")
									{
										$bed = 320 * 4/100;
									}
        
         
									 
         
                                          
								 
									
					 
                                                if($vehicle1=="Business class")
                                                {
                                                    $veh2 =100;
                                                }
                                                else if($vehicle1=="Economic class")
                                                {
                                                    $veh2 = 200;
                                                }
                                                else if($vehicle1=="Standard class")
                                                {
                                                    $veh2 = 300;
                                                }
        if($adults=="1")
        {
            $adultss=100;
        }
        else if($adults=="2")
        {
            $adultss=200;
        }
		 else if($adults=="3")
        {
            $adultss=300;
        } else if($adults=="4")
        {
            $adultss=400;
        } else if($adults=="5")
        {
            $adultss=500;
        }
         else if($adults=="6")
        {
            $adultss=600;
        }
         else if($adults=="7")
        {
            $adultss=700;
        }
         else if($adults=="8")
        {
            $adultss=800;
        }
         else if($adults=="9")
        {
            $adultss=900;
        } else if($adults=="10")
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
								 
	
	?>
		<header>
			<h1 style="font-family:loto; font-weight: bold; ">Invoice</h1>
			<address style="font-family:loto; font-weight: bold;" >
				<p>TOURISM TRADES,</p>
				<p>RGU,rono hills <br>Doimukh,791112<br>Arunachal Pradesh<br>India</p>
				<p>(+94) 12 345 56 78</p>
			</address>
			<span><h2>TOURISM <b style="color:white;">TRADES</b></h2></span>
		</header>
		<article>
			<h3 style="background-color:black; width:20%; border-radius:2px; font-size:21px; letter-spacing:4;font-family:loto; color:white;padding:10px; text-transform:uppercase;">Recipient</h3><br>
			<address >
				<p style="font-family:loto; text-transform:uppercase;"><?php echo $title.$fname." ".$lname ?> <br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Booking ID</span></th>
					<td><span ><?php echo $booking_id; ?></span></td>
				</tr>
                <tr>
					<th><span >Package Name</span></th>
					<td><span ><?php echo $pname; ?></span></td>
				</tr>
                <tr>
					<th><span >Category</span></th>
					<td><span ><?php echo $cat; ?></span></td>
				</tr>
				<tr>
					<th><span >From</span></th>
					<td><span ><?php echo $cin; ?> </span></td>
				</tr>
                <tr>
					<th><span >To</span></th>
					<td><span ><?php echo $cout; ?> </span></td>
				</tr>
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Items</span></th>
						<th><span >No of Days</span></th>
						<th><span >Rate</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr style="background-color:#ffffff;">
                        <td><span><b style=" font-size:10px; font-family:sans-serif;   letter-spacing:1;">Package:-<?php echo $pname; ?></b></span></td>
				 <td><span ><?php echo $days; ?> </span></td>
						<td><span data-prefix></span>Rs.<span ><?php  echo $price;?></span></td>
						<td><span >1</span></td>
						<td><span data-prefix></span>Rs.<span><?php echo $price  ?></span></td>
					</tr>
                    <tr>
						<td><span ><b style="font-size:10px; font-family:sans-serif;   letter-spacing:1;">Room Type:-<?php echo $room2; ?></b></span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span>Rs.<span ><?php  echo $troom;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix></span>Rs.<span><?php echo $days * $troom * $nroom; ?></span></td>
					</tr>
					<tr>
						<td><span ><b style="font-size:10px; font-family:sans-serif;   letter-spacing:1;">Beeding Type:-<?php echo $bedb; ?> </b> </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span>Rs.<span ><?php  echo $bed;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix></span>Rs.<span><?php echo  $bed * $days;?></span></td>
					</tr>
                    	<tr>
						<td><span ><b style="font-size:10px; font-family:sans-serif;   letter-spacing:1;">Vehicle Type:-<?php echo $vehicle1; ?></b>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span>Rs.<span ><?php  echo $veh2;?></span></td>
						<td><span >1</span></td>
						<td><span data-prefix></span>Rs.<span><?php echo $veh2 * $days;?></span></td>
					</tr>
                    	<tr>
						<td><span >Adults:-<?php echo $adults; ?>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span>Rs.<span ><?php  echo $adultss;?></span></td>
						<td><span > </span></td>
						<td><span data-prefix></span>Rs.<span><?php echo $adult2?></span></td>
					</tr>
                    </tr>
                    	<tr>
						<td><span >Childrens:-<?php echo $child; ?>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix></span>Rs.<span ><?php  echo $ch;?></span></td>
						<td><span ></span></td>
						<td><span data-prefix></span>Rs.<span><?php echo $child3?></span></td>
					</tr>
					 
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix></span>Rs.<span><?php echo $fintot; ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix></span>Rs.<span ><?php echo $fintot; ?></span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>Rs.</span><span>00.00</span></td>
				</tr>
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

 <!--<?//php
//$free="Free";
//$nul = null;
//$rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where `cusid`='$id'";
//if(mysqli_query($con,$rpsql))
//{
	//$delsql= "DELETE FROM `roombook` WHERE id='$id' ";
	
	//if(mysqli_query($con,$delsql))
	//{
	
	//}
//}
//?//>
<?php 

ob_end_flush();

?>