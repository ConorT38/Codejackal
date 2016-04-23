<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:User.php");
}
?>
<!DOCTYPE html>
<html ng-app="">
  <head>
    <title>CodeJackal | Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/superhero/bootstrap.min.css">

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
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is a leaderboard of the best CodeJackal users!!"><a href="leaderboard">Leaderboard</a></li>
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
        This page is here to show you how to use our site effectively and how to manage all of the data going through it, including your blogs.<br>
        Initially we'll show you how to set up, login and finally make a post! <br>
        Each blog post must be followed by 5 questions based on what your post is about (to see if the viewer understood the content you're uploading)<br>
        <hr>
        A blog will look something like this: Click <a href="exampleblog">Here!</a>
        <br>
        <br>
             <div class="jumbotron">
             <h4><u> My first blogging tutorial </u><h4>
              <ul>In this tutorial, I will demonstrate the key basics and fundamentals of Java programming:<br>
                <li>-Classes</li>
                <li>-Objects</li>
                <li>-Variables</li>
                <li>-Declarations of each</li>
              </ul>
             

        </div>
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
        <h1>Tutorial for this site:</h1> 

          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">What's this?</button>    
         <br>
    </div>
</div>
<!--Just updating the tutorial content, will add images and such later, just to get it out of the way -->
 <div class="container">
    <div class="jumbotron">
			<h1>How to use this site:</h1>
		<br>
		<br>
			<center><h3>The basics.</h3></center>
		<br>
			<h3 id="Step1">Step 1:</h3>
				<p>First things first, have a look through our site and familiarize yourself with the pages displayed in our navigation bar above<br>
				Now, go to the "Sign Up" link, in the far right of the navigation bar 
				</p><center><img src="SignUp.png" class="img-responsive" width="400" height="500"/></center>
	</div>
</div>
      
		<div class="container">
		<div class="jumbotron">
      
			<h3 id="Step2">Step 2:</h3>
				<p>Enter in your credentials carefully and without errors, you must have both password fields identical before you can proceed<br>
				On completion of the form, press the submit button and you will be moved forward to the userID page!</p>
				<center><img src="signup1.png" class="img-responsive" width="400" height="500"/></center>
		</div>
		</div>
     
		<div class="container">
      <div class="jumbotron">
      
      <h3 id="Step3">Step 3:</h3>
      <p>You can now proceed to post your own blog/tutorial demonstrating your project or snippet etc.. by simply putting in the necessary details, your post will be added to the site!</p><center><img src="signup2.png" class="img-responsive" width="400" height="500"/></center>
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
