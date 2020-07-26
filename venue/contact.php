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



<html>
	<head>
		<title> Login</title>
	</head>
	
<body>
<form action='contact.php' method='post'>
<table width='400' border='2' align='center' bgcolor='orange'>
	<tr>
	<td align='center' bgcolor='pink'colspan='6'><h2> Admin Panel Form</h2></td>
	</tr>
	<tr>
	<td align='right'> Name:</td>
	<td><input type='text' name='admin_name'></td>
	</tr>

	<tr>
	<td align='right'> Password:</td>
	<td><input type='password' name='admin_pass'</td>
	</tr>
	<tr>
	<td colspan='4' align='center'><input type='submit' name='login' value='Login'></td>
	</tr>


</table>
</form>
<center><?php echo @$_GET['error']; ?></center>
</body>
</html>
<?php 
$con = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$con);


if(isset($_POST['login'])){

	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	
	
	
	
$query = "select * from admin_master where UserName='$admin_name' AND Password='$admin_pass'";

$run = mysql_query($query);

if(mysql_num_rows($run)>0){

	echo "<script>window.open('view.php?logged=Logged in Successfully..!','_self')</script>";
	}
	else {
	echo "<script>alert('Password or User name is incorrect!')</script>";
	}


}
?>







Instant Chat 