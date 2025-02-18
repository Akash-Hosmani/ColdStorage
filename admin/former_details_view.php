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