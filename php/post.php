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

$message = $_POST["message"];

$query = "INSERT INTO message (userID, messageContent, messageDate) VALUES ('$userID', '".mysql_real_escape_string($message)."', NOW())";
$data = mysql_query($query)or die(mysql_error());

header("Location: message.php");
	
mysql_close($link);

?>
