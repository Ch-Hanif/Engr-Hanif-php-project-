

<?php 
error_reporting(0);
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);
$edit_record = $_GET['edit'];
$query = "select * from shopping_cart_final where CartId='$edit_record'";
$run = mysql_query($query);
while ($row=mysql_fetch_array($run))
{
	$edit_id = $row['CartId'];
	$u_row1 = $row['Request'];


}
?>
<html><head><title>Updating  Record</title></head>
<body>
<form method='post' action='oedit.php?edit_form=<?php echo $edit_id; ?>'>
<table width='500' border='3' align='center'>
<tr><th bgcolor='yellow' colspan='5'>Updating Form</th>	</tr>
<tr><td align='right'> Booking:</td><td><select type='text' name='u_value1' value='<?php echo $u_row1; ?>'>
<option> Confirm </option>
<option> reject  </option>
</select>
</td></tr>
<tr><td align='center' colspan='6'><input type='submit' name='update' value='Update'></td></tr>
</table>
</form>
</body>
</html>
<?php 

if(isset($_POST['update'])){
	$edit_record1 = $_GET['edit_form'];
	$u_value_1 = $_POST['u_value1'];

$query1 = "update shopping_cart_final set Request='$u_value_1' where CartId='$edit_record1'";
if (mysql_query($query1)){
echo "<script>window.open('orders.php?updated=Record has been updated..!','_self')</script>";
}	
}
?>