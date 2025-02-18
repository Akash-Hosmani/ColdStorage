<?php

include('../dbconnect/dbconnect.php');

$Former_id=$_POST['Former_id'];
$Freezer_id=$_POST['Freezer_id'];
$item_id=$_POST['item_id'];
$request_qnt=$_POST['request_qnt'];
$request_date=$_POST['request_date'];


$sql="insert into former_request values(null,'$Former_id','$Freezer_id','$item_id','$request_qnt','$request_date','PENDING')";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Inserted.');
document.location="former_request_view.php";
</script>