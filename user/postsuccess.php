<?php
session_start();
if(isset($_POST['submitted']))
{
$dbhost = 'localhost';
$dbuser = 'codejackal_admin';
$dbpass = 'Waltherp99';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $title = addslashes ($_POST['title']);
   $description = addslashes ($_POST['description']);
   $content = addslashes ($_POST['content']);
   $tags = addslashes ($_POST['tags']);
}
else
{
   $title = $_POST['title'];
   $description = $_POST['description'];
   $content = $_POST['content'];
   $tags = $_POST['tags'];
}
$sectitle = htmlentities($title);
$sectitle = mysql_real_escape_string($sectitle);
$secdesc = htmlentities($description);
$secdesc = mysql_real_escape_string($secdesc);
$seccont = htmlentities($content);
$seccont = mysql_real_escape_string($seccont);
$sectags = htmlentities($tags);
$sectags = mysql_real_escape_string($sectags);
$id = $_SESSION['id'];

$sql = "INSERT INTO blog ".
       "(title,description,content,tags,id) ".
       "VALUES('$sectitle','$secdesc','$seccont','$sectags','$id')";
mysql_select_db('codejackal_database');
$retval = mysql_query( $sql, $conn );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

mysql_close($conn);

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | Success!</title>
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
<body onload="timer = setTimeout(function() {
                window.location = 'Userlist';
            }, 2000)">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="User">CodeJackal</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="User">Home</a></li>
             <li><a href="Userlist">My Posts</a></li>
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
        <h1>Tutorial Successfully posted!</h1>      
         <br>
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
