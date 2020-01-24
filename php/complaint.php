<?php
include('session.php');
session_start();
?>
<html>

<head>

<title>Registration Confirmation</title>
<link rel="stylesheet" href="main.css"/>
<style>p {
	font-family:Arial;
	font-size:60px;
	text-align:justify;
	font-weight:bolder;
	text-decoration:none;
	background-color:teal;
	text-align:center;
}</style>

</head>

<body>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="message.php">Message Board</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li style="float:right"><a class="active" href="login.html">Login</a></li>
</ul>
<div style="padding:15px;margin-top:20px;background-color:#D3D3D3;height:1500px;"/>


<br>

<?php 
$servername="localhost";
$username="root";
$password="";
$database="studentnet";
$link=mysql_connect($servername,$username,$password);

if (! $link)
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }

mysql_select_db($database, $link);

$complaint = $_POST['complaint'];

$query = "INSERT INTO complaint (userID, complaintContent, complaintDate) VALUES ('$userID', '".mysql_real_escape_string($complaint)."', NOW())";
$data = mysql_query($query)or die(mysql_error());

echo '<p>Complaint has been lodged and will be reviewed by and admin promptly.</p>';

	
mysql_close($link);

?>
