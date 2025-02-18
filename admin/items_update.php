<?php

include('../dbconnect/dbconnect.php');

$Item_id=$_POST['Item_id'];
$name=$_POST['name'];

$image=$_FILES["image"]['name'];
$tmp_location=$_FILES["image"]["tmp_name"];
$target="../uploads/".$image;
move_uploaded_file($tmp_location,$target);

$type=$_POST['type'];
$rate=$_POST['rate'];


$sql="update items set Name='$name',Image='$image',Type='$type',rate='$rate' where Item_id='$Item_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Upated.');
document.location="items_view.php";
</script>
