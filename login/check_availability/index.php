<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    
<title>Check Availability</title>
    <style>
    body
        {
            background-image: url(../background/186789-background.jpg);
            background-size: cover;
            
        }
     .ss1    
        {  font-size: 30px;
            letter-spacing: 1px;
            padding: 23px;
            height: 36px;
            background-color: #ffffff;
            color: black;
           margin-top: 0.3em;
            font-family:monospace;
            width: 95%;
            margin-left: 8px;
             
        }
        
         #bbb1
        {
             background-color: #ffffff;
            border-color:transparent;
             border-width: 1px;
            font-size:15px;
            color: #236acb;
            float: right;
            width:10%;
            height: 40px;
        }
        #bbb1:hover
        {pointer-events: all;
            border-color: #206fd9;
        }
             #bbb2
        {
            background-color: #ffffff;
            border-color:transparent;
            border-width: 1px;
            font-size:15px;
            color: #236acb;
            float: right;
            width:10%;
            height: 40px;
        }
        #bbb2:hover
        {  pointer-events: all;
            border-color: #206fd9;
             
        }
        #ft{
            color: #000000;
            font-size: 12px;
            text-align: center;
            padding: 8px;
            background-color: aliceblue;
            width: 96.4%;
            margin-left: 8px;
            margin-top: 28%;
        }
        
        
    </style>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
 
 
</head>
    
  
    
    <body>
        
    <div class="ss1"><center> </center><a href="../logout.php"><input type="button"  readonly value="Log out" id="bbb1"></a><b style="color:transparent;"></b><a href="../index.php" ><input type="button" readonly value="User Dashboard" id="bbb2"></a></div>
    
   

      <?php include('left1.php'); 
        
        error_reporting(0);
        ?>


 


	<div class="container">
		<div class="form_w3layouts">
            <th><center style="color:white; background-color:black; padding:4px;"><h2 style="color:orange;">CHECKING</h2><h2 style="color:white;">AVAILABILITY</h2></center></th>
            <th>.</th>
            <form method="post" class="form">
            <tr ><td style="paddding:10px;" colspan="2">Please Select The Package<select name="1a1" required/><option value="">Select
        <?php
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from package";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["submit1"])&& $data[0]==$_POST["1a1"])
	{
		echo"<option value=$data[0] selected>$data[0]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[0]</option>";
	}
}
mysqli_close($cn);
?></option> <input type="submit" name="submit1" value="Done" id="bt1"> </select>
            </tr>

<?php
        
        if(isset($_POST["submit1"]))
{
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from package where packagename='" .$_POST["1a1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
 
$pname=$data[0];  
     
$dis=$data[1];
$cat=$data[2];
$price=$data[3];
 
mysqli_close($cn);

}
 ?>
            
            </form>
			<form  method="post" class="agile_form">
                
				
				<div class="agileits-location">
                        
    
                    
					<label><b style="color:black; padding:5px; font-size:12px; font-family:loto; ">Package</b></label>
				    <input type="text" name="f1" readonly value="<?php if(isset($_POST["submit1"])){ echo $pname;} ?>">
                    
         
				</div>
				<div class="checkin agileits-left">
					<label><b style="color:black; padding:5px; font-size:12px; font-family:loto;">Check in</b></label>
				    <input name="d1" placeholder="dd/mm/yyyy" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
				</div>
				<div class="checkin agileits-right">
					<label><b style="color:black; padding:5px; font-size:12px; font-family:loto; ">Check out</b></label>
					<input name="d2" placeholder="dd/mm/yyyy" class="date" id="datepicker1" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
		        </div>
				<div class="clear"></div>
			 
				<div class="section_class_agileits">
					 
					 <!--<div class="section_agileits w3ls-sel2">
                        <label><b style="color:black; padding:5px; font-size:12px; font-family:loto;">Adults</b></label>
						<select required> 
                            <option value="2">1</option>
							<option value="3">2</option>
							<option value="4">3</option>
							<option value="5">4 or4+</option>
						</select>
					</div> 
					<div class="section_agileits">
                         <label><b style="color:black; padding:5px; font-size:12px; font-family:loto;">Children</b></label>
						<select required>
							 
							<option value="2">0</option>
							<option value="3">1</option>
							<option value="4">2</option>
							<option value="5">3 or 3+</option>
						</select>
					</div>	-->
					<div class="clear"></div>
				</div>
				 
				<div class="agileits-location agileinfo-bottom wthree-budget">
					 
				     
				</div>				
				<div class="clear"></div>
				<div class="submit">
					<input type="submit" name="sbmt" value="Check Availability">
                    <?php
                    $df=$_POST["d1"];
                    $ff=$_POST["d2"];
                    
                    ?>
                    <?php
                   
        
        if(isset($_POST["sbmt"]))
{
$cn=mysqli_connect("localhost","root","","tourismtrades");
$s="select * from package where packagename='" .$_POST["f1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
 
$pname=$data[0];    
$dis=$data[1];
$cat=$data[2];
$price=$data[3];
$avail =$data[4];
 
mysqli_close($cn);

}
 ?>
            
				</div> 
			</form>
		</div>			
	</div> 
        <div class="ss">
        <table border="4" backgroung-color="white" class="ui">
             
            <thead>
            <tr><th colspan="4" id="ll">STATUS</th></tr>    
            <th>PACKAGE NAME</th>
            <th>CHECK IN</th>
            <th>CHECK OUT</th>
            
            <th>AVAILABILITY</th>
                
            </thead>
            <tbody>
            <tr><th><?php if(isset($_POST["sbmt"])){ echo $pname ;} ?></th> 
                <th><?php echo $df; ?></th>
                <th><?php echo $ff; ?></th>
                <th style="color:green;"><?php if(isset($_POST["sbmt"])){ echo $avail ;} ?></th></tr>
            </tbody>
            </table>
        </div>
	 <footer id="ft"> Design by RGU BCA students</footer>
		<h2>  </h2>
	 	
	<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->
</body>
    <style>
        .ss
        {
            
            width: 25%;
            font-size: 12px;
            margin-left: 70%;
             margin-top: -23%;
            border-color: 1px solid #000000;
        }
       #ll
        {
            background-color: #000000;
            margin-left:65%;
            font-size: 18px;
            color: #ffffff;
            bottom: 3px solid black;
            padding: 7px;
        }
        .ui
        {
            background-color: #ffffff;
            width: 110%;
            color: black;
            font-weight: bold;
            border:3px solid black;
            
        }
        .form select
        
        {
          padding: 0px;
            border: 3px solid black;
            background-color: transparent;
        }
        .form{
            font-family: lotto;
            font-size: 12px;
            font-weight: bold;
        }
        #bt1
        {
          background-color: #206fd9;
         color: aliceblue;
            letter-spacing: 1px;
            border-radius: 15px;
            border-color: transparent;
        }
        #bt1:hover
        {
          background-color: #ed8a36;
         color: #030303; 
            border-color: transparent;
        }
    /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
/*--reset--*/
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0; font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
 
/*--start editing from here--*/
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*--end reset--*/
body {
	margin:0;
	font-family: 'Amaranth', sans-serif;
}
h1,h2,h3,h4,h5,input,p,a,select,button,textarea,label{
	margin:0;
	font-family: 'Amaranth', sans-serif;
}
.text-center {
	text-align: center;
}
.clear{clear:both;}
body a{
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
	text-decoration: none;
}
input[type="button"],input[type="submit"]{
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
h1,h2,h3,h4,h5,{
	margin:0;
}	
p{
	margin:0;
	
}
ul{
	margin:0;
	padding:0;
}
label{
	margin:0;
	color: #656565;
}
.text-center {
	text-align:center;
}
.clear {
	clear: both;
}
::-webkit-input-placeholder {
   color: #777;    
} 
:-moz-placeholder { /* Firefox 18- */
   color: #777; 
} 
::-moz-placeholder {  /* Firefox 19+ */
   color: #777;  
} 
:-ms-input-placeholder {  
   color:#777;
}
 
 

.container {
    padding: 10px;
    width: 15%;
    margin-left: 30%;
    margin-top: -250px;
    color: black;
    background:rgb(255, 234, 234);
    border-color: black;
    border:3px solid black;
}
h1.agile-head {
    font-size: 1em;
    text-transform: uppercase;
    color: #000000;
    font-weight: bold;
    padding-top: 0.8em;
    letter-spacing: 3px;
}
.agile_form input[type=text]{
    padding: 0.8em 1em;
    color: #0a0808;
    font-size: 0.7em;
    outline: none;
    border: 3px solid #000000;
    background: transparent;
    letter-spacing: 1px;
    -webkit-appearance: none;
	width:94.5%;
}
.section_class_agileits input[type=text]{
	width:54%;
}
input.username,.checkin,.checkout {	
	float: left;
}
.agileits-location
{
    color: black;
    border-color: fuchsia;
}
.section_class_agileits select, .agileits-location select {
    border: 100px;
     
    font-size: 0.9em;
   
    background: url(../images/arrow1.png) no-repeat 90% center transparent;
    padding: 0.3em 2em;
    border: 4px solid #000000;
    color:  #000000!important;
    -webkit-appearance: none;
    width: 100%;
}
.agileits-location select {
   background: url(../images/arrow1.png) no-repeat 97% center transparent;
}
.section_class_agileits {
    margin: 1.5em 0 1em;
}
.section_class_agileits.w3_agile-adults {
    margin: 1em;
}
.agileits-location select {
	width:100%;
}
.agileits-left {
    float: left;
}
.agileits-left, .agileits-right {
    float: left;
    margin: 1em 0;
	width:46%;
}
.agileits-right {
    margin-left: 1.5em;
}
.agileits-location.agileinfo-bottom {
    width: 49.1%;
    float: left;
}
.wthree-budget{ 
	margin-left:0.5em;
}
.date {
    cursor: pointer;
}
.submit input[type=submit] {
    color: #fdfdfd;
    padding: 0.4em;
    font-size: 0.7em;
    cursor: pointer;
    border-color: transparent;
    background:#206fd9;
    outline: none;
     
    font-weight:bold;
    text-transform: capitalize;
    width:30%;
    border-radius: 20px;
    margin-left: 35%;
    letter-spacing: 1px;
    border: 1px solid rgba(0, 0, 0, 0);
}
 .submit input[type=submit]:hover {
	 background:#e57718;
	 color:#000;
    border: 1px solid rgba(0, 0, 0, 0);
 }
 .agile_form label {
    font-size: 1em;
    color: #fff;
    text-align: left;
    display: inline-block;
    float: left;
    font-weight: bold;
    margin: 0px 0px 10px 12px;
    letter-spacing: 1px;
}
input.userincr-btn-dec, input.userincr-btn-inc {
    padding: 0.43em 0.1em;
}
.section_class_agileits input {
	border:1px solid #000000;
    outline: none;
    font-size: 0.9em;
    color: #050505!important;
    -webkit-appearance: none;
    width: 13%;
    background:transparent;
}
.section_agileits {
    width: 32.2%;
    float: left;
}
.section_agileits.w3ls-sel2 {
    margin: 0 8px;
}
 .agileits-w3layouts-copyright h2 {
    color: #fff;
    font-size: 0.9em;
    letter-spacing: 1px;
	line-height:2;
	margin-bottom:1em;
}
.agileits-w3layouts-copyright a{
	color: #fff;
}
.agileits-w3layouts-copyright a:hover {
    color: #76b89c;
}
.agileits-location select,.agile_form input[type=text]{
	border:3px solid #000000;
}
/* -- Responsive code -- */
@media screen and (max-width: 1440px){
	.container {
		width: 35%;
	}
}
@media screen and (max-width: 1366px){
	.container {
		width: 36%;
	}
}
@media screen and (max-width: 1280px){
	.container {
		width: 39%;
	}
}
@media screen and (max-width: 1080px){
	.container {
		width: 49%;
	}
	.agile_form input[type=text] {
       width: 94.5%;
	}
}
@media screen and (max-width: 1050px){
	.container {
		width: 50%;
	}
}
@media screen and (max-width: 991px){}
@media screen and (max-width: 900px){
	.container {
		width: 56%;
	}
}
@media screen and (max-width: 800px){
	.container {
		width: 63%;
	}
	h1.agile-head {
		font-size: 2.8em;
	}
}
@media screen and (max-width: 768px){
	.container {
		width: 65%;
	}
}
@media screen and (max-width: 736px){
	.container {
		width: 68%;
	}
}
@media screen and (max-width: 667px){
	.agile_form input[type=text]{
		width:91%;
	}
	.section_class_agileits input[type=text] {
		width: 50%;
	}
	.section_class_agileits input{
		width:14%;
	}
	.section_agileits.w3ls-sel2 {
		margin: 0px 7px;
	}
	.agileits-location.agileinfo-bottom {
		width: 49%;
	}
	.agile_form input[type=text] {
		width: 92.2%;
	}
	.agileits-right {
		margin-left: 1.3em;
	}
}
@media screen and (max-width: 640px){
	h1.agile-head {
		font-size: 2.7em;
	}
	.agile_form input[type=text] {
		width: 90%;
	}
	.section_class_agileits input[type=text] {
		width: 49%;
	}
	.agileits-right {
		margin-left: 1.25em;
	}
}
@media screen and (max-width: 600px){
	h1.agile-head {
		font-size: 2.5em;
	}
	.section_agileits {
		width: 32%;
	}
	.agileits-location.agileinfo-bottom {
		width: 48.9%;
	}
	.section_class_agileits input[type=text] {
		width: 44%;
	}
	.section_class_agileits input[type=text] {
		width: 47%;
	}
	.agile_form input[type=text] {
		width: 90%;
	}
}
@media screen and (max-width: 568px){
	h1.agile-head {
		font-size: 2.4em;
	}
	.section_class_agileits input[type=text] {
		width: 46%;
	}
	.container {
		width: 71%;
	}
	.section_agileits {
		width: 31.9%;
	}
}
@media screen and (max-width: 480px){
	h1.agile-head {
		font-size: 1.9em;
		letter-spacing: 1px;
	}
	.agileits-left, .agileits-right {
        width: 100%;
		float:none;
		margin:0;
	}
	.section_class_agileits input[type=text] {
		width: 37%;
	}
	.section_class_agileits input {
		width: 16%;
	}
	.agileits-location.agileinfo-bottom {
		width: 100%;
	}
	.wthree-budget {
		margin-left: 0;
	}
	.agile_form label{
		margin:0.7em 0;
	}
	.agileits-w3layouts-copyright h2 {
		padding: 0 1em;
	}
}
@media screen and (max-width: 414px){
	.section_class_agileits select, .agileits-location select{
		margin-top:0;
	}
	.agile_form input[type=text] {
		width: 89%;
	}
	.section_class_agileits input[type=text] {
		width: 24%;
	}
	.section_class_agileits input {
		width: 20%;
	}
	.container{
		margin:2em auto;
	}
	.section_agileits {
		width: 100%;
	}
	.section_agileits.w3ls-sel2 {
		margin: 1em 0;
	}
	.section_class_agileits {
		margin: 1.5em 0 0.5em;
	}
}
@media screen and (max-width: 384px){
	h1.agile-head {
		font-size: 1.8em;
	}
	.agile_form input[type=text] {
		width: 88%;
	}
	.section_class_agileits input[type=text] {
		width: 21%;
	}
}
@media screen and (max-width: 375px){
	.section_class_agileits input[type=text] {
		width: 20%;
	}
	.section_class_agileits input[type=text] {
		width: 19%;
	}
	h1.agile-head {
		font-size: 1.7em;
	}
}
@media screen and (max-width: 320px){
	h1.agile-head {
		font-size: 1.58em;
		letter-spacing: 0px;
	}
	.agile_form input[type=text] {
		width: 85%;
	}
	.container {
		padding: 1.2em;
	}
	.section_class_agileits input[type=text] {
		width: 17%;
	}
	.section_class_agileits input {
		width: 30%;
	}
}

/* -- //Responsive code -- */

    </style>
</html>

