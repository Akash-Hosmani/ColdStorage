<?php

include('../dbconnect/dbconnect.php');

$storage_name=$_POST['storage_name'];
$storage_no=$_POST['storage_no'];
$capacity=$_POST['capacity'];


$storage_image=$_FILES["storage_image"]['name'];
$tmp_location=$_FILES["storage_image"]["tmp_name"];
$target="../uploads/".$storage_image;
move_uploaded_file($tmp_location,$target);



$location=$_POST['location'];

$sql="insert into storage_details values(null,'$storage_name','$storage_no','$capacity','$storage_image','$location')";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Inserted.');
document.location="storage_details_form.php";
</script>
