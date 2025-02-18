<?php

include('../dbconnect/dbconnect.php');

$name=$_POST['name'];
$code=$_POST['code'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$mail_id=$_POST['mail_id'];

$sql="insert into former_details values(null,'$name','$code','$address','$age','$gender','$contact','$mail_id')";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Inserted.');
document.location="former_details_form.php";
</script>
