<?php

  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="delete from allout_freezer where Allout_id ='$id'";
  mysqli_query($conn,$sql);


?>

<script>
alert('Deleted...');
document.location="allout_freezer_view.php";
</script>