<?php
 mysql_connect("localhost","codejackal_admin","Waltherp99") or die(mysql_error());
 mysql_select_db("codejackal_database") or die("Couldn't connect to the database!");
 
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['email'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from users where email='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: Login.php'); // Redirecting To Home Page
}
?>
