<?php

  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="update former_request set request_status='REJECTED' where Former_req_id ='$id'";
  mysqli_query($conn,$sql);


?>

<script>
alert('Request REJECTED...');
document.location="former_request_view.php";
</script>