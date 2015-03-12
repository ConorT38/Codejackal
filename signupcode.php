 <?php
 if(isset($_SESSION['user']))
{
    header("Location: User.php");
    exit;
}
else if(!isset($_POST['fname'])&&($_POST['lname'])&&($_POST['email'])&&($_POST['pass']))
{
    header("Location: Signup.php");
    exit;
}
else{
 $dbhost = 'localhost';
$dbuser = 'codejackal_admin';
$dbpass = 'Waltherp99';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
           
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
mysql_select_db('codejackal_database');
$retval = mysql_query( $sql, $conn );
header('Location: Login.php');
}
}
?>
