<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:User.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/superhero/bootstrap.min.css">
<link rel="stylesheet" src="socialbtn.css" type="text/css"/>

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
            <li class="active"><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is a leaderboard of the best CodeJackal users!! "><a href="leaderboard">Leaderboard</a></li>
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
            <li><a href="Signup" data-toggle="tooltip" data-placement="bottom" title="Keep up to date with everything CodeJackal!!" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
      <div class="modal-body">
        This page is all about the <i>tasty</i> creators of this website, the good folks down at <b>Codejackal</b>.
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
        <h1>About us:</h1>      
         <br>
      <p> This is our site that we designed and made ourselves for our team project module in college, please don't ever see fit other than to use the contact page to get in touch with us!</p>
      <!--I put in a modal button, for the pop-up and shit -->
       <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  What's this about?
</button> 
      	
      </div>


<div class="well">
       <h3 class="guilded"><span>Conor</span></h3>
       <img src = "Conor.jpg" data-toggle="tooltip" height="400" width ="500" data-placement="top" class="img-responsive" title="This is Conor!">
    <br>
    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="This is Conor Thompson, the project manager our team!">
 Who is this?
</button>
<blockquote>
  <p>"It must be whiskey day by now!"</p>
  <small>Conor Thompson on <cite title="CodeJackal.com">Codejackal.com</cite></small>
</blockquote>
    </div>

    <div class="well">
     <h3 class="guilded"><span>Seamus</span></h3>
     <img src = "Seamus.jpg" data-toggle="tooltip" data-placement="top" height="400" width ="500" class="img-responsive" title="This is Seamus!">
    <br>
    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="This is Seamus Fanning, a programmer and designer for the site!">
 Who is this?
</button>
<blockquote>
  <p>"I live and breathe code. Apart from when its time to actually do work."</p>
  <small>Seamus Fanning on <cite title="CodeJackal.com">Codejackal.com</cite></small>
</blockquote>
    </div>
    <div class="well">
     <h3 class="guilded"><span>Jelico</span></h3>
     <img src ="jelly.jpg" data-toggle="tooltip" data-placement="top"class="img-responsive" height="400" width ="500" title="This is Jelico!">
          <br>
          <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="This is Jelicho Bachin, one of the programmers and planners for the site!">
 Who is this?
</button>
<blockquote>
  <p>"Who the hell is PHP?"</p>
  <small>Jelico Bachin on <cite title="CodeJackal.com">Codejackal.com</cite></small>
</blockquote>
    <br>
  </div>
    <div class="well">
     <h3 class="guilded"><span>Niall</span></h3>
     <img src ="Niall.jpg" data-toggle="tooltip" data-placaement="top" class="img-responsive" height="400" width ="500" title="This is Niall!">
          <br>
          <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="This is Niall Curran, Niall is one of our programmers, and our guy!">
 Who is this?
</button>
<blockquote>
<!--Important update of form-->
  <p>"He's our guy."</p>
  <small>Codejackal team on <cite title="Niall Curran">Niall Curran</cite></small>
</blockquote>
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
