<?php

  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="delete from former_request where Former_req_id ='$id'";
  mysqli_query($conn,$sql);


?>

<script>
alert('Deleted...');
document.location="former_request_view.php";
</script>