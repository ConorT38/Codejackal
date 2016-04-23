<?php 
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | Redirect</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/superhero/bootstrap.min.css">
<link rel="stylesheet" src="socialbtn.css" type="text/css"/>

<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
                window.location = 'Logout';
            }, 3000)">
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
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is the most highly rated tutorial post"><a href="leaderboard">Code of the Month!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li>
          <form class="navbar-form" action="search.php?go" method="post" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srchterm" id="srchterm">
			<div class="input-group-btn">
				<button class="btn btn-default" name ="submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
		</form>
		</li>
            <li><a href="Signup" data-toggle="tooltip" data-placement="bottom" title="This is not quite ready yet, sozzles." ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </div>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
       <div class="jumbotron">
       <h1>You're being redirected!</h1>
       <br>
       <img src="redirect.gif" class="img-responsive">
       
       </div>
    </div>
    
      <div class="clearfix visible-lg"></div>
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
