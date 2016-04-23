 <?php
 mysql_connect("localhost","codejackal_admin","Waltherp99") or die(mysql_error());
 mysql_select_db("codejackal_database") or die("Couldn't connect to the database!");

if(isset($_POST['clickme']))

{


if(! get_magic_quotes_gpc() )

{
 if(!empty($_REQUEST['fname'])) {
  $fname = $_REQUEST['fname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$fname)){ $fname = $_REQUEST['fname'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your First Name.';}
  
  
    // Check for a proper Last name
  if (!empty($_REQUEST['lname'])) {
  $lname = $_REQUEST['lname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$lname)){ $lname = $_REQUEST['lname'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Last Name.';}

  
   //Check for a valid Email
  if (!empty($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  $pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
  else{ $errors[] = 'Your Email can only be numbers and letters.';}
  } else {$errors[] = 'You forgot to enter your Email.';}
  
  
  if(!empty($_POST["pass"]) && ($_POST["pass"] == $_POST["cpass"])) {
    $pass = test_input($_POST["pass"]);
    $cpassword = test_input($_POST["cpass"]);
    if (strlen($_POST["pass"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!"; }
    elseif(!preg_match("#[0-9]+#",$pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";}
    elseif(!preg_match("#[A-Z]+#",$pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";}
    elseif(!preg_match("#[a-z]+#",$pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";}
}
elseif(!empty($_POST["passw"])) {
    $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";}
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
