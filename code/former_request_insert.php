<?php

include('../dbconnect/dbconnect.php');

$storage_id=$_POST['storage_id'];
$item_id=$_POST['item_id'];
$request_date=$_POST['request_date'];
$request_status=$_POST['req_status'];

$sql="insert into former_request values(null,'$storage_id','$item_id','$request_date','$req_status')";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Inserted.');
document.location="former_request_form.php";
</script>