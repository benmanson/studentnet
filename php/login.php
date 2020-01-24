<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>StudentNet</title>
<link rel="stylesheet" href="main.css"/>
<script type="text/javascript" src="validationFunctions.js"></script>
</head>

<body>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="message.php">Message Board</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li style="float:right"><a class="active" href="login.html">Login</a></li>
</ul>
<div style="padding:15px;margin-top:40px;background-color:#D3D3D3;height:1500px;"/>

<?php
$servername="localhost";
$username="root";
$password="";
$database="studentnet";
$link=mysqli_connect($servername,$username,$password,$database);

if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

$username = $_POST['username'];
$userPassword = $_POST['password'];


$query = "SELECT * FROM userdetails WHERE username='$username'";
$rows = mysqli_query($link, $query) or die(mysqli_error());


$count = mysqli_num_rows($rows);
if($count==0)
	{
	echo '<h1>Sorry, username is unregistered. <a href="registration.html">Click here to register</a></h1>';
	}
	
	
while($info = mysqli_fetch_array( $rows))
	{
	if ($userPassword == $info['password'])
		{ 
		$userID = $info['userID'];
		$firstName = $info['firstName'];
		$surname = $info['surname'];
		$gender = $info['gender'];
		$dob = $info['dateOfBirth'];
		header("Location: homepage.php");
		$_SESSION["userID"] = $userID;
		$_SESSION["username"] = $username;
		$_SESSION["firstName"] = $firstName;
		$_SESSION["surname"] = $surname;
		$_SESSION["gender"] = $gender;
		$_SESSION["dob"] = $dob;


		}
	else
		{
		echo '<h1>Incorrect password. <a href="login.html">Click here to return to Login Page</a></h1>';
		}
}

mysqli_close($link);

?>

</body>

</html>
