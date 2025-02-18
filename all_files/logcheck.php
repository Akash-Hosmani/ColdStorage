<?php
session_start();
include('dbconnect/dbconnect.php');

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from login where User_Name='$username' and Password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['Type'];
$_SESSION['uname']=$username;
if($type=='admin')
{
header('location:admin/home.php');
}

if($type=='former')
{
header('location:former/home.php');
}



}
else
{
?>
<script>
alert('Invalid Username Or Password');
history.back();
</script>
<?php
}
?>