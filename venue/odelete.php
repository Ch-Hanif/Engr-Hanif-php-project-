<?php 
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('shopping',$conn);

$delete_record = $_GET['del'];

$query = "delete from admin_master where AdminId='$delete_record'";

if (mysql_query($query)){
echo "<script>window.open('VenueOwnerView.php?deleted=Record Has been Deleted successfully!','_self')</script>";

}
?>