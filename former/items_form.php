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
          <h1><i class="fa fa-table"></i>&nbsp; Item details Form</h1>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">


<form name="form1" id="formID" enctype="multipart/form-data" method="post" action="items_insert.php">
  <table width="341" height="324" border="0">
    <tr>
      <td width="107">Name </td>
      <td width="484"><input name="name" type="text" id="name" class="validate[required,custom[onlyLetter]] form-control" /></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input name="image" type="file" id="image" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><input name="type" type="text" id="type" class="validate[required,custom[onlyLetter]] form-control" /></td>
    </tr>
    <tr>
      <td height="52" colspan="2"><input type="submit" class="btn btn-primary" name="Submit" value="Submit" />
      <input type="reset" name="Reset" class="btn btn-danger" value="Reset" /> </td>
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
