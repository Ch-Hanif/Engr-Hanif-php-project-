<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Venue </title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>


<table align='center' width='700' border='4'>
	<tr>
	<td colspan='20' align='center' bgcolor='yellow'>
	<h1>Viewing Profile records</h1></td>
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
	
	<th>Edit</th>

	</tr>
	
	
<?php 
 
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);
$CID=$_SESSION['Name'];

$que = "select * from customer_registration WHERE CustomerName='$CID'";
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

	<td><a href='edit.php?edit=<?php echo $u_id; ?>'>Edit</a></td>
	</tr>

<?php } ?>
<?php echo $CID; ?>

   <?php
 include "Footer.php";
 ?>
</div>
</body>
</html>
