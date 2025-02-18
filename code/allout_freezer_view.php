<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content" style="width:fit-content;">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Allout Freezer Details</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="allout_freezer_form.php" class="btn btn-primary"><i class="fa fa-plus fa-lg"></i>ADD NEW</a></li>
         <!-- <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>-->
        </ul>
      </div>
	 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
			  <thead>
  <tr>
    <th width="47">sl no</th>
    <th width="66">freezer No </th>
    <th width="73">former Name </th>
    <th width="67">item Name</th>
    <th width="67">quantity </th>
    <th width="119">allout start date </th>
    <th width="119">allout end date </th>
    <th width="101">allouted date </th>
    <th width="51">allouted status </th>
    <th width="27">Edit</th>
    <th width="50">Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  $sql="select * from allout_freezer af, freezer_details fd,former_details f, items i where af.Freezer_id=fd.Freezer_id and af.Former_id=f.Former_id and af.Item_id=i.Item_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['Freezer_no'];?></td>
    <td>&nbsp;<?php echo $row['Former_name'];?></td>
    <td>&nbsp;<?php echo $row['Name'];?></td>
    <td>&nbsp;<?php echo $row['Quantity'];?></td>
    <td>&nbsp;<?php echo $row['Allout_start_date'];?></td>
    <td>&nbsp;<?php echo $row['Allout_end_date'];?></td>
    <td>&nbsp;<?php echo $row['Allouted_date'];?></td>
    <td>&nbsp;<?php echo $row['Allouted_status'];?></td>
    <td><a href="allout_freezer_edit.php?id=<?php echo $row['Allout_id'];?>" ><i class="fa fa-edit"></i>Edit</a></td>
    <td><a href="allout_freezer_delete.php?id=<?php echo $row['Allout_id'];?>" onClick="return confirm('Are U sure want to delete')"><i class="fa fa-trash"></i>Delete</a></td>
  </tr>
   <?php
  
  }
  ?>
  </tbody>
</table>
</div>
          </div>
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>
  </body>
</html>