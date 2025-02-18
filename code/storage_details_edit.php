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
          <h1><i class="fa fa-table"></i>&nbsp; Storage details Edit</h1>
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

$sql="select * from storage_details where Storage_details_id ='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<body>
<?php include('val.php') ?>
<form action="storage_details_update.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
<input type="hidden" value="<?php echo $row['Storage_details_id'];?>" name="Storage_details_id" />
  <p>Storage Details</p>
  <table width="483" border="0">
    <tr>
      <td>Storage Name </td>
      <td><input name="storage_name" type="text" id="storage_name" value="<?php echo $row['Storage_name'];?>" class="validate[required,custom[onlyLetter]] form-control"/></td>
    </tr>
    <tr>
      <td>Storage No </td>
      <td><input name="storage_no" type="text" id="storage_no" value="<?php echo $row['Storage_no'];?>" class="validate[required,custom[onlyNumber]] form-control"/></td>
    </tr>
    <tr>
      <td>Capacity</td>
      <td><input name="capacity" type="text" id="capacity" value="<?php echo $row['Storage_capacity'];?>" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td>image </td>
      <td><input name="storage_image" type="file" id="storage_image" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td>Location</td>
      <td><input name="location" type="text" id="location" value="<?php echo $row['Location'];?>" class="validate[required] form-control"/></td>
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
