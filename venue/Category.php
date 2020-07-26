<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body >
  <center>
	
		</br>
    <div class="container-fluid">
<div class="col-md-2">
			 	<img width="220" height="55" src="logo.jpg"> 
		</div>
		<hr>
	<div class="row">
		
		<div class="col-md-2">
			 <a href="log.php" class="btn btn-success btn-lg btn-block" type="button">Login</a>
		</div>
		<div class="col-md-2">
			 <a href="Category.php" class="btn btn-success btn-lg btn-block" type="button">Category</a>
		</div>
		<div class="col-md-2">
			 <a href="Products.php" class="btn btn-success btn-lg btn-block" type="button">Venues</a>
		</div>
		<div class="col-md-2">
			 <a href="oRegister.php" class="btn btn-success btn-lg btn-block" type="button">Owner Register </a>
		</div>
		<div class="col-md-2">
			 <a href="Register.php" class="btn btn-success btn-lg btn-block" type="button">User Register</a>
		</div>
	<div class="col-md-2">
			 <a href="Contact.php" class="btn btn-success btn-lg btn-block" type="button">Admin</a>
		</div>
	</div>
</div>
<hr>
<div id="wrapper">

  
  <div id="content">
    <h2><span style="color:#003300"> Venue Category</span></h2>
    
    <table width="100%" border="1" bordercolor="#003300" >
    
      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "select * from Category_Master";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];
$Description=$row['Description'];
$Image=$row['Image'];
?>
      <tr>
       <td class="style3"><img src="Products/<?php echo $Image;?>" width="124" height="124" border="5" /></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CategoryName;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
        <td class="style3"><a href="Products.php?CategoryId=<?php echo $Id;?>">View Products</a></td>
      </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
     
      <?php
// Close the connection
mysql_close($con);
?>
    </table>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>

</div>
</body>
</html>
