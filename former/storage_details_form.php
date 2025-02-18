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
          <h1><i class="fa fa-table"></i>&nbsp; Storage details Form</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">
<form action="storage_details_insert.php"  method="post" enctype="multipart/form-data" name="form1" id="formID">
  <table width="423" height="277" border="0">
    <tr>
      <td width="54">Storage Name </td>
      <td width="282"><input name="storage_name" type="text" id="storage_name" class="validate[required,custom[onlyLetter]] form-control" /></td>
    </tr>
    <tr>
      <td>Storage No </td>
      <td><input name="storage_no" type="text" id="storage_no" class="validate[required,custom[onlyNumber]] form-control" /></td>
    </tr>
    <tr>
      <td>Capacity</td>
      <td><input name="capacity" type="text" id="capacity" class="validate[required] form-control" /></td>
    </tr>
    <tr>
      <td>image </td>
      <td><input name="storage_image" type="file" id="storage_image" class="validate[required] form-control" /></td>
    </tr>
    <tr>
      <td>Location</td>
      <td><input name="location" type="text" id="location" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" class="btn btn-primary" name="Submit" value="Submit" />        <input type="reset" class="btn btn-danger" name="Reset" value="Reset" /></td>
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
