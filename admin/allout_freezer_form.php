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
          <h1><i class="fa fa-table"></i>&nbsp; Allout Freezer Form</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">
<?php
include('../dbconnect/dbconnect.php');
 $rid=$_REQUEST['id'];
  $sqlr="select * from former_request where Former_req_id='$rid'";
  $resr=mysqli_query($conn,$sqlr);
  $rowr=mysqli_fetch_array($resr);
  
  $Former_id=$rowr['Former_id'];
  $Freezer_id=$rowr['Freezer_id'];
   $Item_id=$rowr['Item_id'];
  $req_quantity=$rowr['req_quantity'];

?>

<form name="form1" id="formID" method="post" action="allout_freezer_insert.php">
  <input type="hidden" value="<?php echo $rid;?>" name="rid">
  <table width="513" height="531" border="0">
    <tr>
      <td width="186">Freezer_no</td>
      <td width="516"><select name="freezer_id" id="freezer_id" class="validate[required] form-control">
        
        <?php
  
 
  $sql="select * from freezer_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['Freezer_id']; ?>" <?php if($row['Freezer_id']==$Freezer_id) {?> selected <?php }?>><?php echo $row['Freezer_no']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Former_name</td>
      <td>        <select name="former_id" id="former_id" class="validate[required] form-control">
        
        <?php
 
 
  $sql="select * from former_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['Former_id']; ?>" <?php if($row['Former_id']==$Former_id) {?> selected <?php }?>><?php echo $row['Former_name']; ?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Item Name</td>
      <td>        <select name="item_id" id="item_id" class="validate[required] form-control">
          
          <?php
 
 
  $sql="select * from items";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
          <option value="<?php echo $row['Item_id']; ?>" <?php if($row['Item_id']==$Item_id) {?> selected <?php }?>><?php echo $row['Name']; ?></option>
          <?php
  }
  ?>
        </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" value="<?php echo $req_quantity; ?>" class="validate[required] form-control" /></td>
    </tr>
    <tr>
      <td>Allout_Start_Date</td>
      <td><input name="start_date" type="date" class="validate[required] form-control" id="start_date" />
      </td>
    </tr>
    <tr>
      <td>Allout_end_date</td>
      <td><input name="end_date" type="date" class="validate[required] form-control" id="end_date" /></td>
    </tr>
    <tr>
      <td>Allout_date</td>
      <td><input name="allout_date" type="date" value="<?php echo date('Y-m-d');?>" readonly="" class="validate[required] form-control" id="allout_date" />      </td>
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