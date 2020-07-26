<?php 
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);

$delete_record = $_GET['del'];

$query = "delete from customer_registration where customerId='$delete_record'";

if (mysql_query($query)){
echo "<script>window.open('view.php?deleted=Record Has been Deleted successfully!','_self')</script>";

}
?>