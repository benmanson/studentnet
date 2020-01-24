<?php
   include('config.php');
   session_start();
   
   $userID = $_SESSION['userID'];
   $username = $_SESSION['username'];
   $firstName = $_SESSION['firstName'];
   $surname = $_SESSION['surname'];
   $gender = $_SESSION['gender'];
   $dob = $_SESSION['dob'];


   
   $ses_sql = mysqli_query($db,"select username from userdetails where username = '$username' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['username'])){
      header("location:login.html");
   }
?>