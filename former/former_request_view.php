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
      </div>
	 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
			  <thead>
  <tr>
    <th>Sl no </th>
    <th>Former Name </th>
    <th>Storage Name </th>
	 <th>Freezer No </th>
    <th>Item Name </th>
	 <th>Request Quantity </th>
    <th>Request date </th>
    <th>Req status </th>
    
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  $uname=$_SESSION['uname'];
  $sql="select * from former_request fr,former_details fd, freezer_details frd, storage_details sd, items i where fr.Former_id=fd.Former_id and fr.Freezer_id=frd.Freezer_id and fr.Item_id=i.Item_id and frd.Storage_details_id=sd.Storage_details_id and fd.Former_code='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['Former_name'];?></td>
    <td>&nbsp;<?php echo $row['Storage_name'];?></td>
	<td>&nbsp;<?php echo $row['Freezer_no'];?></td>
    <td>&nbsp;<?php echo $row['Name'];?></td>
	<td>&nbsp;<?php echo $row['req_quantity'];?></td>
    <td>&nbsp;<?php echo $row['Request_date'];?></td>
    <td><div <?php if($row['request_status']=='PENDING'){ ?> class="btn btn-warning" <?php } ?>
	<?php if($row['request_status']=='APPROVED'){ ?> class="btn btn-success" <?php } ?>
	<?php if($row['request_status']=='ALLOTED'){ ?> class="btn btn-primary" <?php } ?>
	<?php if($row['request_status']=='REJECTED'){ ?> class="btn btn-danger" <?php } ?>
	><?php echo $row['request_status'];?></div></td>
    <td><?php if($row['request_status']=='APPROVED' || $row['request_status']=='ALLOTED' ){ } else { ?><a href="former_request_delete.php?id=<?php echo $row['Former_req_id'];?>" onClick="return confirm('Are U sure want to delete')"><i class="fa fa-trash"></i>Cancle</a><?php } ?></td>
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
