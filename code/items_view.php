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
          <h1><i class="fa fa-th-list"></i> Item Details</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="items_form.php" class="btn btn-primary"><i class="fa fa-plus fa-lg"></i>ADD NEW</a></li>
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
    <th>Sl no </th>
    <th>name</th>
    <th>Image</th>
    <th>Type</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  $sql="select * from items";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['Name'];?></td>
    <td>&nbsp;<img src="../uploads/<?php echo $row['Image'];?>" width="200" height="120"></td>
    <td>&nbsp;<?php echo $row['Type'];?></td>
    <td><a href="items_edit.php?id=<?php echo $row['Item_id'];?>" ><i class="fa fa-edit"></i>Edit</a></td>
    <td><a href="items_delete.php?id=<?php echo $row['Item_id'];?>" onClick="return confirm('Are U sure want to delete')"><i class="fa fa-trash"></i>Delete</a></td>
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
