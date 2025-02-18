<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Login Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  form {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  p {
    margin: 10px 0;
  }
  input[type="text"] {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #4cae4c;
  }
  a.signup-link {
    display: block;
    width: 300px;
    margin: 10px auto;
    text-align: center;
    text-decoration: none;
    color: #5cb85c;
    font-size: 14px;
    font-weight: bold;
  }
  a.signup-link:hover {
    text-decoration: underline;
  }
</style>
</head>

<body>
<form name="form1" method="post" action="logcheck.php">
  <p align="center"><b>Log In </b></p>
  <br>
  <p>USER_NAME:
  <br><br>
    <input name="username" type="text" id="username">
  </p>
  <br>
  <p>PASSWORD:
  <br><br> 
    <input name="password" type="text" id="password">
  </p>
  <br>
  <p>
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Login Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }

  /* Style for the form */
  form {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  
  p {
    margin: 10px 0;
  }
  
  input[type="text"] {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type="submit"]:hover {
    background-color: #4cae4c;
  }
  
  /* Style for the Sign Up link */
  a.signup-link {
    display: block;
    width: 300px;
    margin: 20px auto;
    text-align: center;
    text-decoration: none;
    color: #fff; /* Text color */
    background-color: #708090; /* Background color */
    padding: 12px;
    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    font-weight: bold; /* Font weight */
    transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Shadow for depth */
  }
  
  a.signup-link:hover {
    background-color: #31b0d5; /* Darker blue on hover */
    transform: translateY(-2px); /* Slight lift effect on hover */
    text-decoration: none; /* Ensure text decoration is removed on hover */
  }
  
  a.signup-link:active {
    background-color: #1f8cba; /* Even darker blue when clicked */
    transform: translateY(0); /* Reset the lift effect */
  }
</style>
</head>


<a href="reg_form.php" class="signup-link">Sign Up</a>


</body>
</html>
