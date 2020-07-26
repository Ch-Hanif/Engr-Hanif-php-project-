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
  <?php
  include "Header.php";
 ?>
<form method='post' action='oregister.php'>
<table width='400' border='3' align='center'>
	<tr><th align="center" colspan='5'>Registration Form</th></tr>
	<tr><td align='right'>UserName:</td> <td><input type='text' name='value_1'></td></tr>
	<tr><td align='right'> Password:</td> <td><input type='text' name='value_2'></td></tr>
	<tr><td align='right'> name :</td> <td><input type='text' name='value_3'></td></tr>
	<tr><td align='right'> 	contact :</td> <td><input type='text' name='value_4'></td></tr>
	<tr><td align='right'>  email:</td> <td><input type='text' name='value_5'></td></tr>
	<tr><td align='right'> address :</td> <td><input type='text' name='value_6'></td></tr>
	<tr><td align='center' colspan='6'><input type='submit' name='submit' value='Submit'></td></tr>
</table>
</form>
</body>
</html>
<?php 
$conn = mysql_connect("localhost","root",""); 
$db = mysql_select_db('shopping',$conn);
if(isset($_POST['submit']))
{
	 $user_value1 = $_POST['value_1'];
	 $user_value2 = $_POST['value_2'];
	 $user_value3 = $_POST['value_3'];
	  $user_value4 = $_POST['value_4'];
	   $user_value5 = $_POST['value_5'];
	    $user_value6 = $_POST['value_6'];
		   
	 
$que = "insert into admin_master (UserName,Password,name,contact,email,address) 
		values('$user_value1','$user_value2','$user_value3','$user_value4','$user_value5','$user_value6')";
if(mysql_query($que)){  echo "<center><b>The follwing Data Has been inserted into our database:</b></center>";
}
}
?>



  </div>