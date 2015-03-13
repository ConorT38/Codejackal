 <?php
 mysql_connect("localhost","codejackal_admin","Waltherp99") or die(mysql_error());
 mysql_select_db("codejackal_database") or die("Couldn't connect to the database!");

if(isset($_POST['clickme']))

{


if(! get_magic_quotes_gpc() )
{
   $fname = addslashes ($_POST['fname']);
   $lname = addslashes ($_POST['lname']);
   $email = addslashes($_POST['email']);
   $pass = addslashes($_POST['pass']);
}
else
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $pass= $_POST['pass'];
}

$sql = "INSERT INTO users ".
       "(fname,lname,email,pass,) ".
       "VALUES('$fname','$lname','$email','$pass')";
$retval = mysql_query( $sql, $conn );

}
?>
