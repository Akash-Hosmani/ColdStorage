<?php

include('../dbconnect/dbconnect.php');

$Allout_id =$_POST['Allout_id'];
$freezer_id=$_POST['freezer_id'];
$former_id=$_POST['former_id'];
$item_id=$_POST['item_id'];
$quantity=$_POST['quantity'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$allout_date=$_POST['allout_date'];
$allout_status=$_POST['allout_status'];

$sql="update allout_freezer set Freezer_id='$freezer_id',Former_id='$former_id',Item_id='$item_id',Quantity='$quantity',Allout_start_date='$start_date',Allout_end_date='$end_date',Allouted_date='$allout_date',Allouted_status='$allout_status' where Allout_id='$Allout_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Updated.');
document.location="allout_freezer_view.php";
</script>