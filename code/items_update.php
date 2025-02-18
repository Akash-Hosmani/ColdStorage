<?php

include('../dbconnect/dbconnect.php');

$Item_id=$_POST['Item_id'];
$name=$_POST['name'];
$image=$_POST['image'];
$type=$_POST['type'];


$sql="update items set Name='$name',Image='$image',Type='$type' where Item_id='$Item_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Upated.');
document.location="items_view.php";
</script>
