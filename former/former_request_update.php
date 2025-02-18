<?php

include('../dbconnect/dbconnect.php');

$Former_req_id=$_POST['Former_req_id'];
$storage_id=$_POST['storage_id'];
$item_id=$_POST['item_id'];
$request_date=$_POST['request_date'];
$request_status=$_POST['req_status'];

$sql="update former_request set Storage_id='$storage_id',Item_id='$item_id',Request_date='$request_date',request_status='$req_status' where Former_req_id='$Former_req_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Updated.');
document.location="former_request_view.php";
</script>