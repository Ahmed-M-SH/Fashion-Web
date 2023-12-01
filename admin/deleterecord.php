<?php 

include('../dbcon.php');
$delete_id = $_GET['Delete'];



$sql = "delete  from `prod` where id = $delete_id";

$result = mysqli_query($conn,$sql);

if ($result) {
	
	echo '<script>window.open("deletprod.php?deleted=تم حذف السجل","_self")</script>';
}

 ?>