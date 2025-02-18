<?php

include('dbconnect/dbconnect.php');

$name=$_POST['name'];
$code=$_POST['code'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$mail_id=$_POST['mail_id'];
$password=$_POST['password'];

$sql="insert into former_details values(null,'$name','$code','$address','$age','$gender','$contact','$mail_id')";
mysqli_query($conn,$sql);


$sql2="insert into login values(null,'$code','$password','former','Enter Your Email ID','$mail_id','Active')";
mysqli_query($conn,$sql2);

?>
<script>
alert('Values Inserted.');
document.location="Login.php";
</script>
