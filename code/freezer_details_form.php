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
          <h1><i class="fa fa-table"></i>&nbsp; freezer details Form</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">

<form name="form1" id="formID" method="post" action="freezer_details_insert.php">
 
  <table width="587" height="254" border="0">
    <tr>
      <td>Storage_details_id</td>
      <td>        <select name="Storage_details_id" id="Storage_details_id" class="validate[required] form-control">>
        <option value="">select</option>
        <?php
  include('../dbconnect/dbconnect.php');
 
  $sql="select * from storage_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['Storage_details_id']; ?>"><?php echo $row['Storage_name']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Freezer_no</td>
      <td><input name="Freezer_no" type="text" id="Freezer_no" class="validate[required,custom[onlyNumber]] form-control" /></td>
    </tr>
    <tr>
      <td>Capacity</td>
      <td><input name="Capacity" type="text" id="Capacity" class="validate[required,custom[onlyNumber]] form-control" /></td>
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
