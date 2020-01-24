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
<br/>
<a href="message.html"><p>Click here to post a message!</p></a>

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

$messageContent = 'messageContent';
$messageDate = 'messageDate';
$username = 'username';

$query = "SELECT * FROM userdetails, message WHERE userdetails.userID = message.userID ORDER BY messageDate DESC";
$result = mysql_query($query)or die(mysql_error());

?>

<table>
<tr><th style='border:1px solid black; font-size:16';>Message Content</th><th style='border:1px solid black; font-size:16';>Message Date</th><th style='border:1px solid black; font-size:16;'>Message Poster</th></tr>
<?php  while($rows = mysql_fetch_array($result)) {  ?>
<tr>
<td style='border:1px solid black; font-size:16; width:500px'><?php echo $rows[$messageContent]; ?></td>
<td style='border:1px solid black; font-size:16;'><?php echo $rows[$messageDate]; ?></td>
<td style='border:1px solid black; font-size:16;'><?php echo $rows[$username]; } ?></td>
</tr>
</table>
<a href="complaint.html"><p>Click here to regisiter a complaint about a specific message!</p></a>
</body>

</html>
