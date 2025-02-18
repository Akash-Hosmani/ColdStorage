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
          <h1><i class="fa fa-th-list"></i> Former Details</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="former_details_form.php" class="btn btn-primary"><i class="fa fa-plus fa-lg"></i>ADD NEW</a></li>
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
    <th>Sl No </th>
    <th>Former Name </th>
    <th>Code</th>
    <th>Address</th>
    <th>Age </th>
    <th>Gender</th>
    <th>Contact </th>
    <th>Email Id </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  
  <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  $sql="select * from former_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['Former_name'];?></td>
    <td>&nbsp;<?php echo $row['Former_code'];?></td>
    <td>&nbsp;<?php echo $row['address'];?></td>
    <td>&nbsp;<?php echo $row['Age'];?></td>
    <td>&nbsp;<?php echo $row['Gender'];?></td>
    <td>&nbsp;<?php echo $row['Contact'];?></td>
    <td>&nbsp;<?php echo $row['Email-id'];?></td>
    <td><a href="former_details_edit.php?id=<?php echo $row['Former_id'];?>"><i class="fa fa-edit"></i>Edit</a></td>
    <td><a href="former_details_delete.php?id=<?php echo $row['Former_id'];?>" onClick="return confirm('Are U sure want to delete')"><i class="fa fa-trash"></i>Delete</a></td>
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