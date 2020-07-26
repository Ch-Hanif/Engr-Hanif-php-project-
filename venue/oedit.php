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
			 <a href="Category.php" class="btn btn-success btn-lg btn-block" type="button">Category</a>
		</div>
		<div class="col-md-2">
			 <a href="Products.php" class="btn btn-success btn-lg btn-block" type="button">Products</a>
		</div>
		<div class="col-md-2">
			 <a href="Offers.php" class="btn btn-success btn-lg btn-block" type="button">Offers</a>
		</div>
		<div class="col-md-2">
			 <a href="Register.php" class="btn btn-success btn-lg btn-block" type="button">Register</a>
		</div>
	<div class="col-md-2">
			 <a href="Contact.php" class="btn btn-success btn-lg btn-block" type="button">Dealer</a>
		</div>
	</div>
</div>
<hr>


<?php 
error_reporting(0);
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);
$edit_record = $_GET['edit'];
$query = "select * from admin_master where AdminId='$edit_record'";
$run = mysql_query($query);
while ($row=mysql_fetch_array($run))
{
	$edit_id = $row['AdminId'];
	$u_row1 = $row[1];
	$u_row2 = $row[2];
	$u_row3 = $row[3];
	$u_row4 = $row[4];
	$u_row5 = $row[5];
	$u_row6 = $row[6];

}
?>
<html><head><title>Updating Owner Record</title></head>
<body>
<form method='post' action='oedit.php?edit_form=<?php echo $edit_id; ?>'>
<table width='500' border='3' align='center'>
<tr><th bgcolor='yellow' colspan='5'>Updating Form</th>	</tr>
<tr><td align='right'> UserName:</td><td><input type='text' name='u_value1' value='<?php echo $u_row1; ?>'></td></tr>
<tr><td align='right'> Password </td><td><input type='text' name='u_value2' value='<?php echo $u_row2; ?>'></td></tr>
<tr><td align='right'>name:</td><td><input type='text' name='u_value3' value='<?php echo $u_row3; ?>'></td></tr>
<tr><td align='right'>contact:</td><td><input type='text' name='u_value4' value='<?php echo $u_row4; ?>'></td></tr>
<tr><td align='right'> email:</td><td><input type='text' name='u_value5' value='<?php echo $u_row5; ?>'></td></tr>
<tr><td align='right'>address:</td><td><input type='text' name='u_value6' value='<?php echo $u_row6; ?>'></td>
<tr><td align='center' colspan='6'><input type='submit' name='update' value='Update'></td></tr>
</table>
</form>
</body>
</html>
<?php 

if(isset($_POST['update'])){
	$edit_record1 = $_GET['edit_form'];
	$u_value_1 = $_POST['u_value1'];
	$u_value_2 = $_POST['u_value2'];
	$u_value_3 = $_POST['u_value3'];
	$u_value_4 = $_POST['u_value4'];
	$u_value_5 = $_POST['u_value5'];
	$u_value_6 = $_POST['u_value6'];
$query1 = "update admin_master set UserName='$u_value_1',Password='$u_value_2',name='$u_value_3',
									contact='$u_value_4',email='$u_value_5',address='$u_value_6' 
									where AdminId='$edit_record1'";
if (mysql_query($query1)){
echo "<script>window.open('venueOwnerView.php?updated=Record has been updated..!','_self')</script>";
}	
}
?>