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
      <td width="148">Storage_id</td>
      <td width="443">        <select name="storage_id" id="storage_id" class="validate[required] form-control">
          <option value="">Select</option>
          <?php
  include('../dbconnect/dbconnect.php');
 
  $sql="select * from former_request";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
          <option value="<?php echo $row['Storage_id']; ?>"><?php echo $row['Item_id']; ?></option>
          <?php
  }
  ?>
        </select></td>
    </tr>
    <tr>
      <td>Item_id</td>
      <td>        <select name="item_id" id="item_id" class="validate[required] form-control">
            <option value="">Select</option>
            <?php
  include('../dbconnect/dbconnect.php');
 
  $sql="select * from items";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
            <option value="<?php echo $row['Item_id']; ?>"><?php echo $row['Item_id']; ?></option>
            <?php
  }
  ?>
        </select></td></tr>
    <tr>
      <td>Request_date</td>
      <td><input name="request_date" type="date" id="request_date" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td>Request_status</td>
      <td><p>
          <input name="req_status" type="radio" value="yes" class="validate[required]"/>
      Yes</p>
      <p>
<input name="req_status" type="radio" value="no" class="validate[required]"/>
No      </p></td>
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
