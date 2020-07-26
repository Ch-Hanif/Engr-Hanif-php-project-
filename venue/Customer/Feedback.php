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
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  
  
  
   <div id="content">
    <h2><span style="color:#003300"> Chats From Customers</span> - Welcome  <?php echo $_SESSION['Name'];?></span></h2>
	
	
	
	
    <table width="100%" border="1" bordercolor="#003300" >
      <tr>
        <th height="32" bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
        <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Customer Name</strong></div></th>
        <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Msg</strong></div></th>
        <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Date</strong></div></th>
         </tr>
	  
	  
	  
      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "select Feedback_Master.FeedbackId,Customer_Registration.CustomerName,Feedback_Master.Feedback,Feedback_Master.Date from Feedback_Master,Customer_Registration where Feedback_Master.CustomerId=Customer_Registration.CustomerId";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['FeedbackId'];
$Name=$row['CustomerName'];
$Feedback=$row['Feedback'];
$Date=$row['Date'];

?>
      <tr>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Feedback;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Date;?></strong></div></td>
        </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
  
  
      <table width="100%" border="1" bordercolor="#003300" >
      <tr>
        <th height="32" bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
        <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Replay To</strong></div></th>
        <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Admin Replay</strong></div></th>
        <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Date</strong></div></th>
 
      </tr>


	  
	
<?php 
$con = mysql_connect("localhost","root");
mysql_select_db("shopping", $con);
$que = "select * from feedback_masterad";
$run = mysql_query($que);
while ($row=mysql_fetch_array($run))
{
	$Id = $row['FeedbackId'];
	$u_name = $row[1];
	$u_feed = $row[2];
	$u_date = $row[3];

?>
      <tr>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $u_name;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $u_feed;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $u_date;?></strong></div></td>
      </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      <tr>
        <td colspan="5" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
      </tr>
      <?php
// Close the connection
mysql_close($con);
?>
  
  
  
  
  
  
  
  <div id="content">
   
    <form id="form1" name="form1" method="post" action="InsertFeedback.php">
      <table width="100%" height="140" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="105">Feedback:</td>
          <td><span id="sprytextarea1">
            <label>
            <textarea name="txtFeedback" id="txtFeedback" cols="45" rows="5"></textarea>
            </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="Feedback" />
          </label></td>
        </tr>
      </table>
    </form>

	
	
	
	
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
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
