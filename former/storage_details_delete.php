<?php

  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="delete from storage_details where Storage_details_id ='$id'";
  mysqli_query($conn,$sql);


?>

<script>
alert('Deleted...');
document.location="storage_details_view.php";
</script>