<?php

include('../dbconnect/dbconnect.php');
$Former_id=$_POST['Former_id'];
$name=$_POST['name'];
$code=$_POST['code'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$mail_id=$_POST['mail_id'];

 $sql="update former_details set Former_name='$name',Former_code='$code',address='$address',Age='$age',Gender='$gender',Contact='$contact',`Email-id`='$mail_id' where Former_id='$Former_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert('Values Updated.');
document.location="former_details_view.php";
</script>
