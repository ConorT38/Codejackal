<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/superhero/bootstrap.min.css">
<link rel="stylesheet" href="social-buttons.css" type="text/css"/>

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
  <script>
  bootstrap_alert = function() {}
bootstrap_alert.warning = function(message) {
            $('#alert_placeholder').html('<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>'+message+'</span></div>')
        }
    

$('#clickme').on('click', function() {
            bootstrap_alert.warning('Give us a minute to fix the site.');
});
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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">What this is all about...</h4>
         </div>
          <div class="modal-body">
        This page is all about uploading and reviewing personal projects that people will upload and explain each step and process of the project.<br>
        The basis of each project will be determined by the uploader including programming language or web design.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id ="alert_placeholder">
</div>
  <div class="alert alert-info" role="alert">Be sure to sign up and keep up to date on users uploading material!
</div>
    <div class="container">
      <div class="jumbotron">
        <h1>Welcome to CodeJackal!</h1>      
        <p>Learn about coding projects and shit. </p>  
        <br>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  What's this all about?
</button>    
      </div>
    </div>

<!-- these are all of the columns, we can debate later whether or not these will stay -->

    <div class="container">
      <div class="row">
        <div class="col-md-3">
         <h2 >Welcome</h2>
          <p>Welcome to Codejackal.com! This is the home of all your lovely little needs for tutorials on other peoples projects, work, examples and quizzes for coding<br>
          Be sure to sign-up and have a look through some of the great tutorials that are one the site, or even go for signing one up for yourself! </p>
          <p><a href="about.html">more...</a></p>
        </div>
        <div class="col-md-3"> 
          <h2>Tutorial</h2>
          <p>So, to get yo started, we're gonna have to go through all the steps to setting up, creating and using a profile.</p>
		 <p>&nbsp;</p>
		 <p>We'll walk you through the full process with these simple steps:</p>
          
          <p><a href="tutorial.php">more...</a></p></div>
        <div class="col-md-3"> 
          <h2>Twitter Feed</h2>
          <!--Changed the motherfucking Twitter Feed pointer -->
          <!-- fix, we did and it's awesome -->
<a class="twitter-timeline" href="https://twitter.com/CptCodeJackal" data-widget-id="562646270217814016">Tweets by @CptCodeJackal</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
     <div class="col-md-3">
         <h2 >Facebook Feed</h2>
          <p>We'll put a Facebook API in here also after we make the Facebook page for the site! </p>
          <p><a href="about.html">more...</a></p>
        </div>


        <div class="clearfix visible-lg"></div>
      </div>
      <hr>
      <div class="container">
        <div class="well">
       <h2>What's been happening lately</h2>
       <hr>
     Weve been working a lot lately on getting the site up and running.<br>
     This is an example of what the blog post api will look like once we get everthing finished!<br>
     Click <b><a href="exampleblog.php">Here</a></b> to view it!
     
     <br><h3>How much work we have left to do:</h3>
     
     We've been working like mad on the website, but that damn FTP just won't stop glitching like crazy.<br>
     We'll be updating and putting buttons on our site from our social netwprls
     

      <!-- This is where the content for the blog api will go, be sure to leave plenty of space for this -->
        
        <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Check it!
</button>
<div class="collapse" id="collapseExample">
  <div class="well">
    <center><h4>How hard we've been working:</h4>
    <br>
    To the point of having to consume a bottle of whiskey while powerhousing through some of the backend and front-end code, we've been going full on apeshit with this code.
  </div>
  </div>
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
