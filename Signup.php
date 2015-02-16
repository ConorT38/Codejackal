<?php
setcookie(time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html ng-app="">
  <head>
    <title>CodeJackal | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/superhero/bootstrap.min.css">

<!-- Latest compiled Angular.js library-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" src="socialbtn.css" type="text/css"/>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <link async href="http://fonts.googleapis.com/css?family=Warnes" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<script>
  $(function () {
  $('[data-toggle="popover"]').popover()
})
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>

	<link rel="shortcut icon" href="food.ico">
  </head>

  <body ng-controller="userController">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php">CodeJackal</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
             <li><a href="list.php">Archive</a></li>
            <li><a href="random.php">Random</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is the most highly rated tutorial post"><a href="leaderboard.php">Code of the Month!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Signup.php" data-toggle="tooltip" data-placement="bottom" title="This is not quite ready yet, sozzles." ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </div>
          </ul>
        </div>
      </div>
    </nav>
    <div id = "alert_placeholder"></div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">A little helping hand...</h4>
      </div>
      <!-- Updated Wording -Niall --><!-- Problem --> 
      <div class="modal-body">
        HELP!
        <br>
        Please enter your credentials(Name,Email,Password) and click submit to create a CodeJackal account.  <hr>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id = "alert_placeholder"></div>
    <div class="container">
      <div class="jumbotron">
        <h1>Enter your credentials in the corresponding spaces below:</h1>      
         <br>
<!-- Updated db details -Niall -->
           <?php
if(isset($_POST['cilckme']))

{
$dbhost = 'wearefif_codejackal';
$dbuser = 'wearefif_codejac';
$dbpass = 'codejackalsql';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $fname = addslashes ($_POST['fname']);
   $lname = addslashes ($_POST['lname']);
   $email = addslashes($_POST['email']);
   $password = addslashes($_POST['password']);
}
else
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
}
#This is how you comment when you're in the parameters of php
$sql = "INSERT INTO users ".
       "(fname,lname, pass, email, timestamp) ".
       "VALUES('$fname','$lname',$password, NOW())";
mysql_select_db('wearefif_codejackal');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
         <form role="form" method="post" action="<?php $_PHP_SELF ?>">

      <label for="usr">First Name:</label>
      <input type="text" class="form-control"   ng-disabled="!edit" ng-model="fName" id="fname" name="fname">
      <br>
      <br>

      <label for="usr">Last Name:</label>
      <input type="text" class="form-control" ng-disabled="!edit"  ng-model="lName" id="lname" name="lname">
<br>
      <br>
      <label for="usr">E-mail:</label>
      <input type="text" class="form-control"  ng-disabled="!edit" ng-model="email" id="email" name="email">
<br>
      <br>
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" ng-model="passw1" id="password" placeholder ="Enter in dat password yo." name="password">
  <br>
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" ng-model="passw2" id="password2" placeholder ="Enter in dat password yo." name="password2">
  <br>
  <br>
    <div class="col-sm-offset-0 col-sm-10">
        <input type = "button" class="btn btn-success" ng-disabled="error || incomplete" id = "clickme" value="Submit!" name="clickme"/>&nbsp;&nbsp;&nbsp;
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Does someone need help?
</button>

</div>
      </div>
  </form>
  <script src = "myUsers.js"></script>
  <?php
}
?>
      </div>
    </div>

    <center>
	  <footer class ="footer">
	  <div class = "container">
	  <p class=" text-muted">Code Jackal &copy; 2015</p>
	  </div>
	  </footer>
	  </center>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
