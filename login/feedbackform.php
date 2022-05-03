 <?php if(!isset($_SESSION)) { session_start(); } ?>
<html>
    <head>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

        <link href="style.css" rel="stylesheet" type="text/css" />

        <link href="../css2/bootstrap.css" rel='stylesheet' type='text/css'/>
        <link href="../css2/style.css" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  
        <script src="../js/jquery.min.js"></script>

  
        <link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
        
         <style>
             #bt
                {
                    color: white;
                    font-size: 12px;
                    background-color:#1d4bb2;
                    border-radius: 20px;
                    border-color: none;
                    padding: 4px;
                    font-family: loto;
                    letter-spacing: 4px;
                }
        #bt:hover
        {
            color: black;
            border-radius: 20px;
            font-size: 12px;
            background-color: orange;
        }
            
        #feed
             {
                 background-color: black;
                 padding: 4px;
             }
             
        #feed1
             {
                 background-color: black;
                 color: #f0e3cb;
                 padding: 4px;
             }
             
        .tableshadow
             { 
                 font-family: loto;
                 background-color:rgba(255, 255, 255, 0.89);
                 background-size: cover;
                 color: aliceblue;
             }
        .tableshadow input[type="text"]
             { 
                 padding: 2px;
                 background: transparent;
                 height: 30px;
                 border-bottom-color:black;
                 border-bottom-width: 2px;
             }
        .tableshadow textarea
                {
                background: transparent;
                height: 80px;
                width: 100%;
                border-bottom-color:black;
                border-bottom-width: 2px;
                }
        </style>
    </head><title>feedback</title>
<body>
  
    
    
     <?php
    
    if(isset($_POST["sbmt"]))
    {  
    
    $cn=mysqli_connect("localhost","root","","tourismtrades");
    $s="insert into feedback values('" . $_POST["a1"] ."','" . $_POST["a2"] . "','" . $_POST["a3"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
    echo "<script>alert('Feedback sent successfully');</script>";
     }
?>
    
<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
  <div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
    <?php include('left.php'); ?>
    </div>

        <div class="col-sm-9">
            <div> <form method="post">
    
            <table border="0" width="70%" height="40%" align="center" class="tableshadow">
                
                        <tr><td class="toptd" id="feed1"><center ><b>Your Feedback Is Important To Us</b></center></td></tr>
                        <tr><td align="center" valign="top" style="padding-top:2px;">

                    <table border="0" align="center" width="80%" height="60%" class="check1">
                       
                        <tr> <td colspan="3" id="feed"><center><b style="color:orange;">Feedback</b><b style="color:white;"> Form</b></center></td></tr> 
                        <tr><td style="font-size:12px; padding:2px; font-weight:bold;">User Id<td><input type="text" name="a1"  value="<?php echo $_SESSION["userid"];    ?>"/></td></tr> 
                        <tr><td style="font-size:12px; padding:2px; font-weight:bold;">Feedback Comment<td><textarea name="a2" required pattern="[a-zA-z1 _]{2,50}" title"Please Enter Only Characters  between 3 to 50 for User name" /></textarea></td></tr> 
                        <tr><td style="font-size:12px; padding:2px; font-weight:bold;">Ratings<td><input type="checkbox" value="*" name="a3" /><input type="checkbox" value="**" name="a3"    /><input type="checkbox" value="***" name="a3"   /><input type="checkbox" value="****" name="a3" /><input type="checkbox" value="*****" name="a3"  /></td></tr> 
                        <tr><td colspan="3"  align="center"> <input type="submit" value="Sent" name="sbmt" id="bt" /></td></tr> 
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
    .check1 input[type="checkbox"]
    {
      background-color: aqua;  
    }
</style>

</body>
</html>