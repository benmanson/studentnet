<?php 
include('session.php');
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>StudentNet</title>
<link rel="stylesheet" href="main.css"/>
<script type="text/javascript" src="updateGender.js"></script>
</head>

<body>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="message.php">Message Board</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>
<div style="padding:15px;margin-top:20px;background-color:#D3D3D3;height:1500px;"/>

<h3>Update your password:</h3>

<form name="update" onsubmit="return validateFormOnSubmit(this)" action="update2.php" method="post">
<table>
<tr><td>Username:</td><td><select name="username"><?php echo "<option value = '".$username."'>".$username."</option>";?></select></td></tr>
<tr><td>Gender:</td><td> <input id="male" type="radio" name="gender" value="m"/> Male<br/><input id="female" type="radio" name="gender" value="f"/> Female<br/></td></tr>
</table>
<input type="submit" value="Submit" />
</form>

</body>

</html>
