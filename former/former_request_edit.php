<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
  <div class="app-title">
    <div>
          <h1><i class="fa fa-table"></i>&nbsp; former request edit</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">

<?php
include('../dbconnect/dbconnect.php');

$id=$_REQUEST['id'];

$sql="select * from former_request where Former_req_id='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  

?>
<form name="form1" id="form1" method="post" action="former_request_update.php">
<input type="hidden" value="<?php echo $row['Former_req_id'];?>" name="Former_req_id" class="validate[required,custom[onlyLetter]] form-control" />
  <table width="607" height="302" border="0">
    <tr>
      <td width="148">Storage_id</td>
      <td width="443"><select name="storage_id" id="storage_id" class="validate[required,custom[onlyLetter]] form-control" >
        <option value="">Select</option>
        <?php

 
  $sql2="select * from former_request";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  ?>
        <option value="<?php echo $row2['Storage_id']; ?>"<?php if($row2['Storage_id']==$row['Storage_id']) {?> selected <?php } ?> ><?php echo $row2['Item_id']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Item_id</td>
      <td><select name="item_id" id="item_id" class="validate[required,custom[onlyLetter]] form-control" >
        <option value="">Select</option>
        <?php
  
 
  $sql3="select * from items";
  $res3=mysqli_query($conn,$sql3);
  while($row3=mysqli_fetch_array($res3))
  {
  ?>
        <option value="<?php echo $row3['Item_id']; ?>" <?php if($row3['Item_id']==$row['Item_id']) {?> selected <?php } ?> ><?php echo $row3['Item_id']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Request_date</td>
      <td><input name="request_date" type="date" id="request_date" value="<?php echo $row['Request_date'];?>" class="validate[required,custom[onlyLetter]] form-control" /></td>
    </tr>
    <tr>
      <td>Request_status</td>
      <td><p>
          <input name="req_status" id="req_status" type="radio" value="yes" class="validate[required] " />
      Yes</p>
      <p>
        <input name="req_status" id="req_status" type="radio" value="no" class="validate[required]" />
No      </p></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" class="btn btn-primary" name="Submit" value="Submit" />
      <input type="reset" name="Reset" class="btn btn-danger value="Reset" /></td>
    </tr>
  </table>
 
</form>
</div>

           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
  </body>
</html>



