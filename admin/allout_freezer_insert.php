<?php

include('../dbconnect/dbconnect.php');

$freezer_id=$_POST['freezer_id'];
$former_id=$_POST['former_id'];
$item_id=$_POST['item_id'];
$quantity=$_POST['quantity'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$allout_date=$_POST['allout_date'];
$allout_status='ALLOTED';
$rid=$_POST['rid'];

$sql="insert into allout_freezer values(null,'$freezer_id','$former_id','$item_id','$quantity','$start_date','$end_date','$allout_date','$allout_status')";
mysqli_query($conn,$sql);

$sql2="update former_request set request_status='$allout_status' where Former_req_id='$rid'";
mysqli_query($conn,$sql2);


?>
<script>
alert('Freezer Alloted.');
document.location="allout_freezer_view.php";
</script>