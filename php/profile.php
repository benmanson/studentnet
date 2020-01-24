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
<style>p {
	font-family:Arial;
	font-size:large;
	text-align:justify;
}</style>
</head>

<body>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="message.php">Message Board</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>
<div style="padding:15px;margin-top:20px;background-color:#D3D3D3;height:1500px;"/>

<h2 style="text-align:left">Welcome <?php echo $username; ?>. Here are your details:</h2><br>
<table><tr><td>Name:</td><td><?php echo $firstName;?> <?php echo $surname;?></td></tr>
<tr><td>Gender:</td><td><?php echo $gender;?></td></tr>
<tr><td>Date of Birth:</td><td><?php echo $dob;?></td></tr></table>
<br>
<br>
<p><a href="updateName.php">Update your name here</a></p>
<p><a href="updateDOB.php">Update your date of birth here</a></p>
<p><a href="updateGender.php">Update your gender here</a></p>
<p><a href="updatePwd.php">Update your password here</a></p>
<p>Logout and back in to see changes to you profile!</p>

</body>

</html>
