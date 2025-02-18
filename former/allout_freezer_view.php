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
	<th width="119">Allout Days </th>
	<th width="119">Rate </th>
	<th width="119">Allout Amount </th>
    <th width="101">allouted date </th>
    <th width="51">allouted status </th>
    
  </tr>
  </thead>
  <tbody>
  <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  $uname=$_SESSION['uname'];
  $sql="select * from allout_freezer af, freezer_details fd,former_details f, items i where af.Freezer_id=fd.Freezer_id and af.Former_id=f.Former_id and af.Item_id=i.Item_id and f.Former_code='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  
  
  $startDate = $row['Allout_start_date'];
$endDate = $row['Allout_end_date'];

// Create DateTime objects for each date
$date1 = new DateTime($startDate);
$date2 = new DateTime($endDate);

// Calculate the difference between the two dates
$interval = $date1->diff($date2);

// Extract the number of days from the interval
$days = $interval->days;

$rate=$row['rate'];

$tamount=($days*$rate);
// Output the number of days
//echo "Number of days between $startDate and $endDate is: $days";
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['Freezer_no'];?></td>
    <td>&nbsp;<?php echo $row['Former_name'];?></td>
    <td>&nbsp;<?php echo $row['Name'];?></td>
    <td>&nbsp;<?php echo $row['Quantity'];?></td>
    <td>&nbsp;<?php echo $row['Allout_start_date'];?></td>
    <td>&nbsp;<?php echo $row['Allout_end_date'];?></td>
	<td>&nbsp;<?php echo $days;?></td>
	<td>&nbsp;<?php echo $row['rate'];?></td>
	<td>&nbsp;<?php echo $tamount; ?></td>
    <td>&nbsp;<?php echo $row['Allouted_date'];?></td>
    <td>&nbsp;<?php echo $row['Allouted_status'];?></td>
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