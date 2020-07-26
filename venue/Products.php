<?php require_once('Connections/shop.php'); ?>
<?php
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
$query_Recordset1 = sprintf("SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $shop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_shop, $shop);
$query_Recordset2 = "SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master";
$Recordset2 = mysql_query($query_Recordset2, $shop) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);




?>


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


  <div id="content">
    <h2><span style="color:#003300"> Venues</span></h2>
    <table width="100%" border="1" cellpadding="2" cellspacing="2">
      <tr>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">ItemName</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Description</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Size</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Image</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Price</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Discount</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Total</span></td>
      </tr>

      <?php
	  if(isset($_GET['CategoryId']))
	  {
	  do
	  {
	  ?>
        <tr>
          <td><?php echo $row_Recordset1['ItemName']; ?></td>
          <td><?php echo $row_Recordset1['Description']; ?></td>
          <td><?php echo $row_Recordset1['Size']; ?></td>
          <td><img src="Products/<?php echo $row_Recordset1['Image']; ?>" height="125px" width="125px"/></td>
          <td><?php echo $row_Recordset1['Price']; ?></td>
          <td><?php echo $row_Recordset1['Discount']; ?></td>
          <td><?php echo $row_Recordset1['Total']; ?></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
		}
		else
		{
		do
	  {
	  ?>
        <tr>
          <td><?php echo $row_Recordset2['ItemName']; ?></td>
          <td><?php echo $row_Recordset2['Description']; ?></td>
          <td><?php echo $row_Recordset2['Size']; ?></td>
          <td><img src="Products/<?php echo $row_Recordset2['Image']; ?>" height="125px" width="125px"/></td>
          <td><?php echo $row_Recordset2['Price']; ?></td>
          <td><?php echo $row_Recordset2['Discount']; ?></td>
          <td><?php echo $row_Recordset2['Total']; ?></td>
        </tr>
        <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
		}

        ?>
    </table>
 
    <p>&nbsp;</p>
  </div>


</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
