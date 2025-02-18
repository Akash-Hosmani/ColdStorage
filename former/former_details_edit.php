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
          <h1><i class="fa fa-table"></i>&nbsp; former details edit</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">

<?php
include('../dbconnect/dbconnect.php');

$uname=$_SESSION['uname'];

$sql="select * from former_details where Former_code='$uname'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  

?>

<form name="form1" id="formID" method="post" action="former_details_update.php">
<input type="hidden" value="<?php echo $row['Former_id'];?>" name="Former_id" />
  
  <table width="557" height="393" border="0">
    <tr>
      <td width="214">Former_name</td>
      <td width="610"><input name="name" type="text" id="name" value="<?php echo $row['Former_name'];?>" class="validate[required,custom[onlyLetter]] form-control" /></td>
    </tr>
    <tr>
      <td>Former_code</td>
      <td><input name="code" type="text"  readonly="" id="code" value="<?php echo $row['Former_code'];?>" class="validate[required,custom[onlyNumber]] form-control" /></td>
    </tr>
    <tr>
      <td>address</td>
      <td><textarea name="address" id="address" class="validate[required] form-control"><?php echo $row['address'];?></textarea></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="age" type="text" id="age" value="<?php echo $row['Age'];?>" class="validate[required,custom[onlyNumber]] form-control" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><p>
          <input name="gender" id="gender" type="radio" <?php if($row['Gender']=='male') { ?> checked <?php } ?> value="male" class="validate[required]"/>
        Male</p>
        <p>
          <input name="gender" id="gender" <?php if($row['Gender']=='female') { ?> checked <?php } ?> type="radio" value="female" class="validate[required]"/>        
        Female</p></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><input name="contact" type="text" id="contact" value="<?php echo $row['Contact'];?>" class="validate[required,custom[mobile]] form-control"/></td>
    </tr>
    <tr>
      <td>Email-id</td>
      <td><input name="mail_id" type="text" id="mail_id" value="<?php echo $row['Email-id'];?>" class="validate[required,custom[email]] form-control"/></td>
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



