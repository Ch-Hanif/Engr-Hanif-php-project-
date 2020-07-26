<?php require_once('../Connections/shop.php'); ?>
<?php require_once('Connections/shop.php'); ?>
<?php
session_start();
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_GET['CategoryId'])) {
  $colname_Recordset1 = $_GET['CategoryId'];
}
mysql_select_db($database_shop, $shop);
$query_Recordset1 = sprintf("SELECT ItemId, ItemName, `Description`, `Size`, Image, soft, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $shop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_shop, $shop);
$query_Recordset2 = "SELECT ItemId, ItemName, `Description`, `Size`, Image,soft, Price, Discount, Total FROM item_master";
$Recordset2 = mysql_query($query_Recordset2, $shop) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Venue </title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style10 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  <form action='products.php' method='get'>
Search a Record:<input type='text' name='search'>
<input type='submit' name='submit' value='Find Now'>
</form>
  
  <?php
  
  
  $result = mysql_query("SELECT * FROM shopping_cart_final");
$rows = mysql_num_rows($result);
echo $rows;
  
  
  ?>
  
  
<?php 
if(isset($_GET['search'])){
$search_record = $_GET['search'];
$query2 = "select * from item_master where ItemName='$search_record'";
$run2 = mysql_query($query2);
while ($row2=mysql_fetch_assoc($run2))
{
	$v1 = $row2['ItemName'];
	$v2 = $row2['CategoryId'];
	$v3 = $row2['ItemName'];
	$v4 = $row2['Description'];
	$v5 = $row2['Size'];
	$v6 = $row2['Image'];
	$v7 = $row2['soft'];
	$v8 = $row2['Price'];
	$v9 = $row2['Discount'];
	$v10 = $row2['Total'];

?>
<table width='500'  align='center' border='1'>
	<tr align='center'>
	<center> your required record </center>
	<td><?php echo $v1; ?></td>
	<td><?php echo $v2; ?></td>
	<td><?php echo $v3; ?></td>
	<td><?php echo $v4; ?></td>
	<td><?php echo $v5; ?></td>
          <td><img src="../Products/<?php echo $row_Recordset2['Image']; ?>" height="125px" width="125px"/></td>
		  				<td><a href="../Products/<?php echo $row_Recordset2['soft']; ?>"> Download </a></td>
	<td><?php echo $v8; ?></td>
	<td><?php echo $v9; ?></td>
	<td><?php echo $v10; ?></td>
	

	</tr>
</table>
<?php }} ?>
  
  
  <div id="content">
    <h2><span style="color:#003300">Welcome <?php echo $_SESSION['Name'];?></span></h2>
    <table width="100%" border="1" cellpadding="2" cellspacing="2" bordercolor="#669933">
      <tr>
      <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Code</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Venue</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Description</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Available bookings  </span></td>
		
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Image</span></td>
		
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10"> download</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Price</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Disc</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Total</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Request Booking</span></td><strong></strong>      </tr>
      
      <?php
	  if(isset($_GET['CategoryId']))
	  { 
	  do 
	  { 
	  ?>
        <tr>
         <td><?php echo $row_Recordset1['ItemId']; ?></td>
          <td><?php echo $row_Recordset1['ItemName']; ?></td>
          <td><?php echo $row_Recordset1['Description']; ?></td>
		  
		  
          <td><?php echo $row_Recordset1['Size']; ?></td>
		  
          <td><img src="../Products/<?php echo $row_Recordset1['Image']; ?>" height="125px" width="125px"/></td>
		  				<td><a href="../Products/<?php echo $row_Recordset1['soft']; ?>"> Download </a></td>
          <td><?php echo $row_Recordset1['Price']; ?></td>
          <td><?php echo $row_Recordset1['Discount']; ?></td>
          <td><?php echo $row_Recordset1['Total']; ?></td>
           <td><a href="InsertCart.php?ItemId=<?php echo $row_Recordset1['ItemId']; ?>"><img src="img/shopping-cart.png"/></a></td><strong></strong>        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
		}
		else
		{ 
		do 
	  { 
	  ?>
        <tr>
         <td><?php echo $row_Recordset2['ItemId']; ?></td>
          <td><?php echo $row_Recordset2['ItemName']; ?></td>
          <td><?php echo $row_Recordset2['Description']; ?></td>
          <td><?php echo $row_Recordset2['Size'] - $rows ; ?></td>
          <td><img src="../Products/<?php echo $row_Recordset2['Image']; ?>" height="125px" width="125px"/></td>
		  				<td><a href="../Products/<?php echo $row_Recordset2['soft']; ?>"> Download </a></td>
          <td><?php echo $row_Recordset2['Price']; ?></td>
          <td><?php echo $row_Recordset2['Discount']; ?></td>
          <td><?php echo $row_Recordset2['Total']; ?></td>
           <td><a href="InsertCart.php?ItemId=<?php echo $row_Recordset2['ItemId']; ?>"><img src="img/shopping-cart.png"/></a></td>
        </tr>
        <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
		}
        
        ?>
    </table>
 
 
    <p>&nbsp;</p>
  </div>
 <?php
 include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
 

 
</div>
<blockquote>&nbsp;	</blockquote>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
