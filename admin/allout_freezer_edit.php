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
          <h1><i class="fa fa-table"></i>&nbsp; Allout Freezer edit</h1>
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

$sql="select * from allout_freezer where Allout_id='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  

?>

<form name="form1" id="formID" method="post" action="allout_freezer_update.php">
<input type="hidden" value="<?php echo $row['Allout_id'];?>" name="Allout_id" />

  <table width="560" height="531" border="0">
    <tr>
      <td width="186">Freezer_id</td>
      <td width="516">        <select name="freezer_id" id="freezer_id" class="validate[required] form-control" >
          <option>Select</option>
          <?php
  
 
  $sql2="select * from freezer_details";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  ?>
          <option value="<?php echo $row2['Freezer_id']; ?>" <?php if($row2['Freezer_id']==$row['Freezer_id']) {?> selected <?php } ?> ><?php echo $row2['Freezer_no']; ?></option>
          <?php
  }
  ?>
        </select></td>
    </tr>
    <tr>
      <td>Former_id</td>
      <td>        <select name="former_id" id="former_id" class="validate[required] form-control">>
        <option value="">Select</option>
        <?php
 
 
  $sql3="select * from former_details";
  $res3=mysqli_query($conn,$sql3);
  while($row3=mysqli_fetch_array($res3))
  {
  ?>
        <option value="<?php echo $row3['Former_id']; ?>" <?php if($row3['Former_id']==$row['Former_id']) {?> selected <?php } ?> ><?php echo $row3['Former_name']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Item_id</td>
      <td><select name="item_id" id="item_id" class="validate[required] form-control">>
        <option value="">Select</option>
        <?php
 
 
  $sql4="select * from items";
  $res4=mysqli_query($conn,$sql4);
  while($row4=mysqli_fetch_array($res4))
  {
  ?>
        <option value="<?php echo $row4['Item_id']; ?>" <?php if($row4['Item_id']==$row['Item_id']) {?> selected <?php } ?> ><?php echo $row4['Name']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" value="<?php echo $row['Quantity'];?> " class="validate[required,custom[onlyNumber]] form-control"/></td>
    </tr>
    <tr>
      <td>Allout_Start_Date</td>
      <td><input name="start_date" type="date" id="start_date" value="<?php echo $row['Allout_start_date'];?>" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td>Allout_end_date</td>
      <td><input name="end_date" type="date" id="end_date" value="<?php echo $row['Allout_end_date'];?>" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td>Allout_date</td>
      <td><input name="allout_date" type="date" id="allout_date" value="<?php echo $row['Allouted_date'];?>" class="validate[required] form-control"/>      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" class="btn btn-primary" name="Submit" value="Submit" />
      <input type="reset" class="btn btn-danger" name="Reset" value="Reset" /></td>
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


