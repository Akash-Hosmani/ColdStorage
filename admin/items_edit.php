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
          <h1><i class="fa fa-table"></i>&nbsp; Item Details edit</h1>
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

$sql="select * from items where Item_id ='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php include('val.php') ?>
<form name="form1" id="formID" method="post" enctype="multipart/form-data" action="items_update.php">
<input type="hidden" value="<?php echo $row['Item_id'];?>" name="Item_id" />
  
  <table width="381" height="324" border="0">
    <tr>
      <td width="107">Name      </td>
      <td width="484"><input name="name" type="text" id="name" value="<?php echo $row['Name'];?>" class="validate[required,custom[onlyLetter]] form-control"/></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input name="image" type="file" id="image" value="<?php echo $row['Image'];?>" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="type" type="text" id="type" value="<?php echo $row['Type'];?>" class="validate[required,custom[onlyLetter]] form-controol"/></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input name="rate" type="text" id="rate" value="<?php echo $row['rate'];?>" class="validate[required,custom[onlyNumber]] form-controol"/></td>
    </tr>
    <tr>
      <td height="52" colspan="2"><input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Reset" value="Reset" /> </td>
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
