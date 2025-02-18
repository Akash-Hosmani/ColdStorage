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
          <h1><i class="fa fa-th-list"></i> Former Request</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="former_request_form.php" class="btn btn-primary"><i class="fa fa-plus fa-lg"></i>ADD NEW</a></li>
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
    <th>Storage Name </th>
    <th>Item Name </th>
    <th>Request date </th>
    <th>Req status </th>
    <th>Edit </th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  $sql="select * from former_request fr, storage_details sd, items i where fr.Storage_id=sd.Storage_details_id and fr.Item_id=i.Item_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['Storage_name'];?></td>
    <td>&nbsp;<?php echo $row['Name'];?></td>
    <td>&nbsp;<?php echo $row['Request_date'];?></td>
    <td>&nbsp;<?php echo $row['request_status'];?></td>
    <td><a href="former_request_edit.php?id=<?php echo $row['Former_req_id'];?>" ><i class="fa fa-edit"></i>Edit</a></td>
    <td><a href="former_request_delete.php?id=<?php echo $row['Former_req_id'];?>" onClick="return confirm('Are U sure want to delete')"><i class="fa fa-trash"></i>Delete</a></td>
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
