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
          <h1><i class="fa fa-table"></i>&nbsp; former details form</h1>
        </div>
    </div>
      <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">

<?php include('val.php') ?>
<form name="form1" id="formID" method="post" action="former_details_insert.php">

  <table width="562" height="393" border="0">
    <tr>
      <td width="214">Former_name</td>
      <td width="610"><input name="name" type="text" id="name" class="validate[required,custom[onlyLetter]] form-control"  /></td>
    </tr>
    <tr>
      <td>Former_code</td>
      <td><input name="code" type="text" id="code" class="validate[required,custom[onlyNumber]] form-control"  /></td>
    </tr>
    <tr>
      <td>address</td>
      <td><textarea name="address" id="address"  class="validate[required] form-control" ></textarea></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="age" type="text" id="age" class="validate[required,custom[onlyNumber]] form-control" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><p>
          <input name="gender" type="radio" value="male" class="validate[required]"/>
        Male</p>
        <p>
          <input name="gender" type="radio" value="female" class="validate[required]" />        
        Female</p></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><input name="contact" type="text" id="contact" class="validate[required,custom[mobile]] form-control"  /></td>
    </tr>
    <tr>
      <td>Email-id</td>
      <td><input name="mail_id" type="text" id="mail_id" class="validate[required,custom[email]] form-control" /></td>
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
