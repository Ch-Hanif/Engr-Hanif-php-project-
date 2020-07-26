
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
<hr>


<a href='user_registration.php'>Insert New Record</a>
Welcome:

&nbsp;&nbsp;&nbsp;
<a href='logout.php'>Logout</a>
<center><font color='red' size='6'>
<?php echo @$_GET['deleted']; ?>
<?php echo @$_GET['updated']; ?>
<?php echo @$_GET['logged']; ?>
</font></center>
<table align='center' width='1000' border='4'>
	<tr>
	<td colspan='20' align='center' bgcolor='yellow'>
	<h1>Viewing all Users records</h1></td>
	</tr>
	
	<tr align='center'>
	<th>Serial No</th>
	<th>CustomerName </th>
	<th>Address</th>
	<th>City</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>Gender</th>
	<th>BirthDate</th>
	<th>UserName</th>
	<th>Password</th>
	<th>Delete</th>
	<th>Edit</th>

	</tr>
	
	
<?php 
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);

$que = "select * from customer_registration order by 1 DESC";
$run = mysql_query($que);

$i=1;

while ($row=mysql_fetch_array($run))
{
	$u_id = $row[0];
	$u_name = $row[1];
	$u_Address = $row[2];
	$u_City = $row[3];
	$u_Email = $row[4];
	$u_Mobile = $row[5];
	$u_Gender = $row[6];
	$u_BirthDate = $row[7];
	$u_UserName = $row[8];
	$u_Password = $row[9];

?>
<tr align='center'>
	<td><?php echo $i; $i++; ?></td>
	<td><?php echo $u_name; ?></td>
<td><?php echo $u_Address; ?></td>
<td><?php echo $u_City; ?></td>
<td><?php echo $u_Email; ?></td>
<td><?php echo $u_Mobile; ?></td>
<td><?php echo $u_Gender; ?></td>
<td><?php echo $u_BirthDate; ?></td>
<td><?php echo $u_UserName; ?></td>
<td><?php echo $u_Password; ?></td>

	<td><a href='delete.php?del=<?php echo $u_id; ?>'>Delete</a></td>
	<td><a href='edit.php?edit=<?php echo $u_id; ?>'>Edit</a></td>
	</tr>

<?php } ?>


