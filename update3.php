<?php 
include('session.php');
session_start();

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
$dateOfBirth = $_POST['bday'];

$query = "UPDATE userdetails SET dateOfBirth = '$dateOfBirth' WHERE username = '$username'";
$data = mysql_query($query)or die(mysql_error());

header("Location: profile.php");

mysql_close($link);

?>
