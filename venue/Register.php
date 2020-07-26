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



<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: small;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {font-size: small}
-->
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {font-size: small; font-weight: bold; }
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #000000;
}
.style4 {font-size: small;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {color: #FFFFFF}
.style6 {color: #000000}
-->
</style>
 <style type="text/css">

.ds_box {
	background-color:#336633;
	border: 2px solid #666600;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;

}

.ds_head {
	background-color: #85A157;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #85A157;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color:#FFFFCC;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
	border: 1px solid #666600;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

 </style>
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>
</script>
</head>
<body>




<div id="wrapper">

  <?php
  include "Header.php";
 ?>
<form method='post' action='register.php'>
<table width='400' border='3' align='center'>
	<tr>
		<th  align="center" colspan='5'>Registration Form</th>
	</tr>
	<tr><td align='right'>Name:</td> <td><input type='text' name='value_1'></td></tr>
	<tr><td align='right'>Address :</td> <td><input type='text' name='value_2'></td></tr>
	<tr><td align='right'>City  :</td> <td><input type='text' name='value_3'></td></tr>
	<tr><td align='right'> Email :</td> <td><input type='text' name='value_4'></td></tr>
	<tr><td align='right'> Mobile :</td> <td><input type='text' name='value_5'></td></tr>
	<tr><td align='right'>Gender  :</td> <td><input type='text' name='value_6'></td></tr>
	<tr><td align='right'>BirthDate  :</td> <td><input type='text' name='value_7'></td></tr>
	<tr><td align='right'> UserName :</td> <td><input type='text' name='value_8'></td></tr>
	<tr><td align='right'>	Password  :</td> <td><input type='text' name='value_9'></td></tr>

	
	
	
	<tr>
		<td align='center' colspan='6'>
		<input type='submit' name='submit' value='Submit'>
		</td>
	</tr>

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
		 $user_value7 = $_POST['value_7'];
		  $user_value8 = $_POST['value_8'];
		   $user_value9 = $_POST['value_9'];
		 

				   
			   
	 
$que = "insert into customer_registration (CustomerName,Address,City,Email,Mobile,Gender,BirthDate,UserName,Password) values('$user_value1','$user_value2','$user_value3','$user_value4','$user_value5','$user_value6','$user_value7','$user_value8','$user_value9')";
if(mysql_query($que)){
	echo "<center><b>The follwing Data Has been inserted into our database:</b></center>";
}
}
?>



  </div>

</body>
</html>
