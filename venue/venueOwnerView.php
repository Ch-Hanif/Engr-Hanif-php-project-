
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
	<h1>Viewing all Owners records</h1></td>
	</tr>
	
	<tr align='center'>
	<th>Serial No</th>
	<th>UserName </th>
	<th>Password</th>
	<th>name</th>
	<th>contact</th>
	<th>email</th>
	<th>address</th>
	
	<th>Delete</th>
	<th>Edit</th>

	</tr>
	
	
<?php 
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);
$que = "select * from admin_master order by 1 DESC";
$run = mysql_query($que);
$i=1;
while ($row=mysql_fetch_array($run))
{
	$u_id = $row[0];
	$u_value1 = $row[1];
	$u_value2 = $row[2];
	$u_value3 = $row[3];
	$u_value4 = $row[4];
	$u_value5 = $row[5];
	$u_value6 = $row[6];

?>
<tr align='center'>
	<td><?php echo $i; $i++; ?></td>
	<td><?php echo $u_value1; ?></td>
	<td><?php echo $u_value2; ?></td>
	<td><?php echo $u_value3; ?></td>
	<td><?php echo $u_value4; ?></td>
	<td><?php echo $u_value5; ?></td>
	<td><?php echo $u_value6; ?></td>


	<td><a href='odelete.php?del=<?php echo $u_id; ?>'>Delete</a></td>
	<td><a href='oedit.php?edit=<?php echo $u_id; ?>'>Edit</a></td>
	</tr>

<?php } ?>


