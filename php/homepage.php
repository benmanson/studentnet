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
<h1>STUDENTNET</h1>
<h2>Welcome <?php echo $username; ?></h2> 
<p>StudentNet is the all new student exclusive social network site! Whether you want to ask others about homework, or just communicate with fellow students, StudentNet is definitely the place for you! Visit your profile to see your own customisable page or jump stright onto the message board and get networking!</p>
<img src="E:\Project\Graphics\networking.png" alt="Networking"/>
</body>

</html>
