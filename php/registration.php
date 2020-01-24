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

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$bday =	$_POST['bday'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$result1 = mysql_query("SELECT username FROM userdetails WHERE username='$username'");

if (mysql_num_rows($result1)==0)
	{
	$query = "INSERT INTO userdetails (firstName,surname,gender,dateOfBirth,email,username,password) VALUES ('$firstname','$surname','$gender','$bday','$email','$username','$password')";
	$data = mysql_query($query)or die(mysql_error());
	
	if($data)
	{
		echo '<p>YOU HAVE SUCCESSFULLY REGISTERED WITH STUDENTNET!</p>';
	}
}
else
	{
		echo '<p>The username is already taken! Try again!</p>';
	}
	

mysql_close($link);

?>


</body>

</html>
