<?php

include('../dbconnect/dbconnect.php');

$name=$_POST['name'];


$image=$_FILES["image"]['name'];
$tmp_location=$_FILES["image"]["tmp_name"];
$target="../uploads/".$image;
move_uploaded_file($tmp_location,$target);

$type=$_POST['type'];
$rate=$_POST['rate'];




$sql="insert into items values(null,'$name','$image','$type','$rate')";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Inserted.');
document.location="items_view.php";
</script>
