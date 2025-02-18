<?php

  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="delete from items where Item_id ='$id'";
  mysqli_query($conn,$sql);


?>

<script>
alert('Deleted...');
document.location="items_view.php";
</script>