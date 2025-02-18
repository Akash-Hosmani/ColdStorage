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
          <h1><i class="fa fa-table"></i>&nbsp; Change Password</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">
  <script>
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
  </script>
        
    <form name="form1" id="formID" method="post" action="changepassword.php" class="form-horizontal">
  <table class="table table-striped table-bordered" id="example">
    
    <tr>
      <td width="163"><strong>Old Password*</strong></td>
      <td width="328"><input name="old_password" type="text" id="old_pwd" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td><strong>New Password* </strong></td>
      <td><input name="new_password" type="text" id="password" maxlength="6" minlength="6" title="Enter 6 characters minimum" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td><strong>Confirm Password* </strong></td>
      <td><input name="confirm_password" type="text" id="con_pwd"  minlength="6" maxlength="6" title="Enter 6 characters minimum" class="form-control validate[required]"><span id='message'></span></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
       </div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
</div>

           
          </div>
        </div>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
  </body>
</html>