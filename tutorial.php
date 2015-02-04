<!DOCTYPE html>
<html ng-app="">
  <head>
    <title>CodeJackal | Login</title>
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
            <li><a href="Signup.php" data-toggle="tooltip" data-placement="bottom" title="This is not quite ready yet, sozzles." ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
        This page is about showing you how to use our site and how to manage all of the data going through it and your blogs.<br>
        Initially we'll show you how to set up, login and finally make a post! <br>
        Each blog post will have to be followed by 5 questions you post on what your post was about (to see if the viewer understood the content you're uploading)<br>
        <hr>
        A blog will look something like this: Click <a href="exampleblog.php">Here!</a>
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

          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">What's this all about?</button>    
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
      <p>First things first, have a look through our site and familiarize yourself with the homepage and the corresponding pages.<br>
      Then, go to the "Sign Up" link, at the top right of the menu</p><img src="signup.png" width="200" height="300"/>
      </div>
      </div>
      <div class="container">
      <div class="jumbotron">
      
      <h3 id="Step2">Step 2:</h3>
      <p>Enter in your credentials carefully and without errors, the first password will only work if it matches up with the second one.<br>
      On completeion of the form, press the submit button and you will be moved forward to the userID page!</p><img src="signup2.png" width="200" height="300"/>
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
