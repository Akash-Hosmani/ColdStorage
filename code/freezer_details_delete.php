<?php

  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="delete from freezer_details where Freezer_id='$id'";
  mysqli_query($conn,$sql);


?>

<script>
alert('Deleted...');
document.location="freezer_details_view.php";
</script>