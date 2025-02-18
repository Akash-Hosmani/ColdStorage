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
          <h1><i class="fa fa-table"></i>&nbsp; freezer details edit</h1>
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

$sql="select * from freezer_details where Freezer_id ='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<body>

<form name="form1" id="formID" method="post" action="freezer_details_update.php">
<p>
  <input type="hidden" value="<?php echo $row['Freezer_id'];?>" name="Freezer_id" />
</p>
<table width="587" height="254" border="0">
    <tr>
      <td>Storage_details_id</td>
      <td><select name="Storage_details_id" id="Storage_details_id">
        <option>select</option>
        <?php
  include('../dbconnect/dbconnect.php');
 
  $sql2="select * from storage_details";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  ?>
        <option value="<?php echo $row2['Storage_details_id']; ?>" <?php if($row2['Storage_details_id']==$row['Storage_details_id']) {?> selected <?php } ?> ><?php echo $row2['Storage_name']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Freezer_no</td>
      <td><input name="Freezer_no" type="text" id="Freezer_no" value="<?php echo $row['Freezer_no'];?>" class="validate[required,custom[onlyNumber]] form-control"/></td>
    </tr>
    <tr>
      <td>Capacity</td>
      <td><input name="Capacity" type="text" id="Capacity" value="<?php echo $row['Capacity'];?>" class="validate[required,custom[onlyNumber]] form-control"/></td>
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
