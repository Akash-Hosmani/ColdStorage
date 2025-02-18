<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Registration Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  form {
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  td {
    padding: 10px;
    vertical-align: top;
  }
  input[type="text"], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  textarea {
    resize: vertical;
    height: 100px;
  }
  input[type="radio"] {
    margin-right: 5px;
  }
  .btn {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
  }
  .btn-primary {
    background-color: #5cb85c;
  }
  .btn-primary:hover {
    background-color: #4cae4c;
  }
  .btn-danger {
    background-color: #d9534f;
  }
  .btn-danger:hover {
    background-color: #c9302c;
  }
  .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .form-control:focus {
    border-color: #66afe9;
    outline: none;
  }
  .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  .form-group input[type="text"], 
  .form-group textarea {
    width: calc(100% - 22px);
  }
</style>
</head>

<body>
<?php
  include('dbconnect/dbconnect.php');
  include('val.php');
  
  $sql="select max(Former_id) as fid from former_details";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
  $code=$row['fid']+1;

?>
<form name="form1" id="formID" method="post" action="reg_insert.php">
  <div class="form-group">
    <label for="name">Former Name</label>
    <input name="name" type="text" id="name" class="validate[required,custom[onlyLetter]] form-control" />
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="address" class="validate[required] form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input name="age" type="text" id="age" class="validate[required,custom[onlyNumber]] form-control" />
  </div>
  <div class="form-group">
    <label>Gender</label>
    <p>
      <input name="gender" type="radio" id="gender" value="male" class="validate[required]" /> Male
    </p>
    <p>
      <input name="gender" type="radio" id="gender" value="female" class="validate[required]" /> Female
    </p>
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input name="contact" type="text" id="contact" class="validate[required,custom[mobile]] form-control" />
  </div>
  <div class="form-group">
    <label for="mail_id">Email ID</label>
    <input name="mail_id" type="text" id="mail_id" class="validate[required,custom[email]] form-control" />
  </div>
  <div class="form-group">
    <h3>Create Login Details</h3>
  </div>
  <div class="form-group">
    <label for="code">Former Code (Username)</label>
    <input name="code" type="text" id="code" readonly="" value="FCODE<?php echo $code;?>" class="form-control" />
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="text" id="password" class="validate[required] form-control" />
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="Submit" value="Submit" />
    <input type="reset" name="Reset" class="btn btn-danger" value="Reset" />
  </div>
</form>
</body>
</html>
