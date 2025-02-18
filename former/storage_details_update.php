<?php

include('../dbconnect/dbconnect.php');

$Storage_details_id=$_POST['Storage_details_id'];
$storage_name=$_POST['storage_name'];
$storage_no=$_POST['storage_no'];
$capacity=$_POST['capacity'];
$storage_image=$_POST['storage_image'];
$location=$_POST['location'];

$sql="update storage_details set Storage_name='$storage_name',Storage_no='$storage_no',Storage_capacity='$capacity',Images='$storage_image',Location='$location' where Storage_details_id='$Storage_details_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Updated.');
document.location="storage_details_view.php";
</script>
