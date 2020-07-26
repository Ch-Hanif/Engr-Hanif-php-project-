
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
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);
$edit_record = $_GET['edit'];
$query = "select * from customer_registration where CustomerId='$edit_record'";
$run = mysql_query($query);

while ($row=mysql_fetch_array($run))
{
	$edit_id = $row['CustomerId'];
	$u_name = $row[1];
	$u_Address = $row[2];
	$u_City = $row[3];
	$u_Email = $row[4];
	$u_Mobile = $row[5];
	$u_Gender = $row[6];
	$u_BirthDate = $row[7];
	$u_UserName = $row[8];
	$u_Password = $row[9];
}

?>

<html>
	<head>
		<title>Updating Student's Record</title>
	</head>

<body>
<form method='post' action='edit.php?edit_form=<?php echo $edit_id; ?>'>
<table width='500' border='3' align='center'>
	<tr>
		<th bgcolor='yellow' colspan='5'>Updating Form</th>
	</tr>
	<tr>
		<td align='right'> u_name:</td>
		<td>
		<input type='text' name='user_name1' value='<?php echo $u_name; ?>'>
		</td>
	</tr>
	<tr>
		<td align='right'>'u_Address:</td>
		<td><input type='text' name='u_Address' value='<?php echo $u_Address; ?>'>
		</td>
	</tr>
	<tr>
		<td align='right'>u_City:</td>
		<td><input type='text' name='u_City' value='<?php echo $u_City; ?>'>
		</td>
	</tr>
	<tr>
		<td align='right'>u_Email:</td>
		<td><input type='text' name='u_Email' value='<?php echo $u_Email; ?>'>
		</td>
	</tr>

		<tr>
		<td align='right'>u_Mobile :</td>
		<td><input type='text' name='u_Mobile' value='<?php echo $u_Mobile; ?>'>
		</td>
	</tr>
		<tr>
		<td align='right'>u_Gender:</td>
		<td><input type='text' name='u_Gender' value='<?php echo $u_Gender; ?>'>
		</td>
	</tr>
		<tr>
		<td align='right'>u_Birth:</td>
		<td><input type='text' name='u_BirthDate' value='<?php echo $u_BirthDate; ?>'>
		</td>
	</tr>
		<tr>
		<td align='right'>u_UserName:</td>
		<td><input type='text' name='u_UserName' value='<?php echo $u_UserName; ?>'>
		</td>
	</tr>
		<tr>
		<td align='right'>u_Password:</td>
		<td><input type='text' name='u_Password' value='<?php echo $u_Password; ?>'>
		</td>
	</tr>
	
	
	
	
	
	<tr>
		<td align='center' colspan='6'>
		<input type='submit' name='update' value='Update'>
		</td>
	</tr>

</table>
</form>
</body>
</html>
<?php 
if(isset($_POST['update'])){
	
	$edit_record1 = $_GET['edit_form'];
	$user_name = $_POST['user_name1'];
	$user_address = $_POST['u_Address'];
	$user_u_City = $_POST['u_City'];
	$user_u_Email = $_POST['u_Email'];
	$user_u_Mobile = $_POST['u_Mobile'];
	$user_u_Gender = $_POST['u_Gender'];
	$user_u_BirthDate = $_POST['u_BirthDate'];
	$user_u_UserName = $_POST['u_UserName'];
	$user_u_Password = $_POST['u_Password'];
	

	
$query1 = "update customer_registration set CustomerName='$user_name',Address='$user_address',City='$user_u_City',Email='$user_u_Email',Mobile='$user_u_Mobile',Gender='$user_u_Gender',BirthDate='$user_u_BirthDate',UserName='$user_u_UserName',Password='$user_u_Password' where CustomerId='$edit_record1'";

if (mysql_query($query1)){

echo "<script>window.open('view.php?updated=Record has been updated..!','_self')</script>";
}
	

}

?>
