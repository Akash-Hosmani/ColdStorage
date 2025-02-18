<?php

include('../dbconnect/dbconnect.php');
$Freezer_id=$_POST['Freezer_id'];
$Storage_details_id=$_POST['Storage_details_id'];
$Freezer_no=$_POST['Freezer_no'];
$Capacity=$_POST['Capacity'];

$sql="update freezer_details set Storage_details_id='$Storage_details_id',Freezer_no='$Freezer_no',Capacity='$Capacity' where Freezer_id='$Freezer_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert('Values updated.');
document.location="freezer_details_view.php";
</script>