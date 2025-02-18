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
          <h1><i class="fa fa-table"></i>&nbsp; Former request Form</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">

<form name="form1" id="form1" method="post" action="former_request_insert.php" >
  <table width="607" height="302" border="0">
    <tr>
      <td width="148">Former</td>
      <td width="443">        <select name="Former_id" id="Former_id" class="validate[required] form-control">
         
          <?php
  include('../dbconnect/dbconnect.php');
 $uname=$_SESSION['uname'];
  $sql="select * from former_details where Former_code='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
          <option value="<?php echo $row['Former_id']; ?>"><?php echo $row['Former_name']; ?></option>
          <?php
  }
  ?>
        </select></td>
    </tr>
 
    <tr>
      <td width="148">Freezer</td>
      <td width="443">       
	  
	   <select name="Freezer_id" id="Freezer_id" class="validate[required] form-control">
         
          <?php
 
 $Freezer_id=$_REQUEST['Freezer_id'];
  $sql="select * from freezer_details where Freezer_id='$Freezer_id'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
          <option value="<?php echo $row['Freezer_id']; ?>"><?php echo $row['Freezer_no']; ?></option>
          <?php
  }
  ?>
        </select></td>
    </tr>
 
    <tr>
      <td>Select Item</td>
      <td>        <select name="item_id" id="item_id" class="validate[required] form-control">
            <option value="">Select Item</option>
            <?php

 
  $sql="select * from items";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
            <option value="<?php echo $row['Item_id']; ?>"><?php echo $row['Name']; ?></option>
            <?php
  }
  ?>
        </select></td></tr>
    <tr>
      <td>Request Quantity</td>
      <td><input name="request_qnt"  type="number" id="request_qnt" class="validate[required,custom[onlyNumber]] form-control"/></td>
    </tr>

    <tr>
      <td>Request_date</td>
      <td><input name="request_date" value="<?php echo date('Y-m-d');?>" readonly="" type="date" id="request_date" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" class="btn btn-primary" name="Submit" value="Submit" />
      <input type="reset" name="Reset" class="btn btn-danger" value="Reset" /></td>
    </tr>
  </table>

</form>
</div>

           
          </div>
        </div>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
  </body>
</html>
