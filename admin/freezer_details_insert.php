<?php

include('../dbconnect/dbconnect.php');

$Storage_details_id=$_POST['Storage_details_id'];
$Freezer_no=$_POST['Freezer_no'];
$Capacity=$_POST['Capacity'];

$sql="insert into freezer_details values(null,'$Storage_details_id','$Freezer_no','$Capacity')";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Inserted.');
document.location="freezer_details_form.php";
</script>