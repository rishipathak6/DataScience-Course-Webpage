<?php
   include('MyConfig.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $des_check = $_SESSION['designation'];
   
   $ses_sql = mysqli_query($db,"select * from People where username = '$user_check' and designation = '$des_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $login_designation = $row['designation'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>