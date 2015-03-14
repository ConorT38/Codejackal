<?php

$host="localhost"; // Host name 
$username="codejackal_admin"; // Mysql username 
$password="Waltherp99"; // Mysql password 
$db_name="codejackal_database"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$email=$_POST['email']; 
$pass=$_POST['pass']; 

// To protect MySQL injection 
$email = stripslashes($email);
$pass = stripslashes($pass);
$email = mysql_real_escape_string($email);
$pass = mysql_real_escape_string($pass);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and pass='$pass'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "User.php"; 
$count['fname'] = $_SESSION['fname'];
$count['lname'] = $_SESSION['lname'];
$count['email'] = $_SESSION['email'];
$count['id'] = $_SESSION['id'];
header("location:User");
}
else {
echo "Wrong Username or Password";
}
?>
