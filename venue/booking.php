
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
			 <a href="index.php" class="btn btn-success btn-lg btn-block" type="button">Home</a>
		</div>
		<div class="col-md-2">
			 <a href="VenueOwnerView.php" class="btn btn-success btn-lg btn-block" type="button">Venue Owner's</a>
		</div>
		<div class="col-md-2">
			 <a href="view.php" class="btn btn-success btn-lg btn-block" type="button">Users</a>
		</div>
		<div class="col-md-2">
			 <a href="booking.php" class="btn btn-success btn-lg btn-block" type="button">Bookings</a>
		</div>
		<div class="col-md-2">
			 <a href="index.php" class="btn btn-success btn-lg btn-block" type="button">Logout</a>
		</div>
			</div>
	</div>
</div>
<hr>
		

    <h2><span style="color:#003300"> Welcome  </span></h2>
    <table width="100%" border="1" bordercolor="#003300" >
      <tr>
        <td bgcolor="" class="style10 style3"><strong>ID</strong></td>
        <td bgcolor="" class="style10 style3"><strong>Customer Name</strong></td>
        <td bgcolor="" class="style10 style3"><strong>Venue Name</strong></td>
       
        <td bgcolor="" class="style10 style3"><strong>Persons</strong></td>
        <td bgcolor="" class="style10 style3"><strong>Price</strong></td>
        <td bgcolor="" class="style10 style3"><strong>Total Price</strong></td>
       <td bgcolor="" class="style10 style3"><strong>From Owner </strong></td>
	   

      </tr>
      <?php
	  session_start();
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "SELECT customer_registration.CustomerId, customer_registration.CustomerName, shopping_cart_final.CartId, shopping_cart_final.ItemName, shopping_cart_final.Quantity, shopping_cart_final.Price, shopping_cart_final.Total, shopping_cart_final.Request 
FROM customer_registration, shopping_cart_final
WHERE customer_registration.CustomerId=shopping_cart_final.CustomerId ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$u_id=$row['CartId'];
$Id=$row['CustomerId'];
$CustomerName=$row['CustomerName'];
$ItemName=$row['ItemName'];
$Quantity=$row['Quantity'];
$Price=$row['Price'];
$Total=$row['Total'];
$Request=$row['Request'];

?>
      <tr>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CustomerName;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ItemName;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Quantity;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Price;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Total;?></strong></div></td>
			<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Request;?></strong></div></td>

	
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
    <p align="justify">&nbsp;</p>
