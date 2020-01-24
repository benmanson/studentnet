<?php 
include('session.php');
session_start();
?>


<html>

<head>

<title>Update Confirmation</title>
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
  <li style="float:right"><a class="active" href="logout.html">Logout</a></li>
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

$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE userdetails SET password = '$password' WHERE username = '$username'";
$data = mysql_query($query)or die(mysql_error());

if($data)
	{
		echo '<p>YOU HAVE SUCCESSFULLY UPDATED YOUR PASSWORD!</p>';
	}

mysql_close($link);

?>


</body>

</html>
