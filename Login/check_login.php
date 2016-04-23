<?php
ob_start();

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

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$pass = stripslashes($pass);
$email = mysql_real_escape_string($email);
$email = md5($email);
$pass = mysql_real_escape_string($pass);
$pass = md5($pass);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and pass='$pass'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	session_start();
$row=mysql_fetch_array($result);
// Register $myusername, $mypassword and redirect to file "login_success.php"; 
$_SESSION['fname'] =$row['fname'];
$_SESSION['lname'] =$row['lname'];
$_SESSION['email'] =$row['email'];
$_SESSION['id'] =$row['id']; 
$_SESSION['points'] =$row['points']; 
$sow = $row['id'];
header("location:User.php?id=$sow");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>