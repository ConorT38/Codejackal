<?php
setcookie(time() + (86400 * 30), "/");
?>
<?php
$dbhost = 'localhost';
$dbuser = 'codejackal_admin';
$dbpass = 'Waltherp99';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | Signup</title>
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

  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index">CodeJackal</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index">Home</a></li>
             <li><a href="list">Archive</a></li>
            <li><a href="random">Random</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is the most highly rated tutorial post"><a href="leaderboard">Code of the Month!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li>
          <form class="navbar-form" action="search.php" method="get" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srchterm" id="srchterm">
			<div class="input-group-btn">
				<button class="btn btn-default" name ="submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
		</form>
		</li>
            <li class="active"><a href="Signup" data-toggle="tooltip" data-placement="bottom" title="This is not quite ready yet, sozzles." ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>            
            <li><a href="Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
      <!-- Updated Wording -Niall -->
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
<!--Updated DB Details -->

         <form role="form" method="post" action="signupsuccess.php">

      <label for="usr">First Name:</label>
      <input type="text" class="form-control"    id="fname" name="fname">
      <br>
      <br>

      <label for="usr">Last Name:</label>
      <input type="text" class="form-control"  id="lname" name="lname">
<br>
      <br>
      <label for="usr">E-mail:</label>
      <input type="text" class="form-control"  id="email" name="email">
<br>
      <br>
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  id="password" placeholder ="Enter in dat password yo." name="pass">
  <br>
  <br>
    <div class="col-sm-offset-0 col-sm-10">
        <input type = "submit" class="btn btn-success" id = "clickme" value="Submit!" name="clickme"/>&nbsp;&nbsp;&nbsp;
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Does someone need help?
</button>

</div>
      </div>
  </form>
  <script src = "myUsers.js"></script>

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
