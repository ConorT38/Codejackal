<?php
if(isset($_SESSION['email'])){
header("Location:User");
}
?>
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
          <a class="navbar-brand" href="index">CodeJackal</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index">Home</a></li>
             <li><a href="list">Archive</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is the most highly rated tutorial post"><a href="leaderboard">LeaderBoard</a></li>
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Slide Content -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="img1.png" alt="image1"></center>
       <div class="carousel-caption">
    <h2>Welcome to CodeJackal!</h2>
    <p>Home of tutorials</p>
  </div>
    </div>

    <div class="item">
      <center><img src="img2.png" alt="Image2"></center>
       <div class="carousel-caption">
    <h4>...</h4>
    <p>...</p>
  </div>
    </div>

    <div class="item">
      <center><img src="img3.jpg" alt="Image3"></center>
       <div class="carousel-caption">
    <h4>...</h4>
    <p>...</p>
  </div>
    </div>

    <div class="item">
      <center><img src="img4.jpg" alt="Image4"></center>
       <div class="carousel-caption">
    <h4>...</h4>
    <p>...</p>
  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


	
 </div>
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
		What's this?
	</button>    
	<br>
    </div>


<!-- these are all of the columns, we can debate later whether or not these will stay -->

    <div class="container">
      <div class="row">
        <div class="col-md-3">
         <h2 >Welcome</h2>
          <p>Welcome to codejackal where you can find all the tutorials you will need on computing, programming, web development and hardware. Simply search the topic you are looking for and we will have something here for you!</p>
          <p><a href="about">more...</a></p>
        </div>
        <div class="col-md-3"> 
          <h2><a href="tutorial">Tutorial</a></h2>
          <p>So, to get you started, we're gonna have to go through all the steps to setting up, creating and using a profile.</p>
		 <p>&nbsp;</p>
		 <p>We'll walk you through the full process with these simple steps:</p>
          
          <p><a href="tutorial">more...</a></p></div>
        <div class="col-md-3"> 
          <h2>Twitter Feed</h2>
          
          <!-- fix, we did and it's awesome -->
<a class="twitter-timeline" href="https://twitter.com/CptCodeJackal" data-widget-id="562646270217814016">Tweets by @CptCodeJackal</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
     <div class="col-md-3">
         <h2 >Facebook Feed</h2>
           <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com
%2Fcodejackal&width=300&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=605" scrolling="yes" 

frameborder="0" style="border:none; overflow:hidden; width:300px; height:600px; background: white; float:left; " 

allowtransparency="true">
	</iframe>
        </div>


        <div class="clearfix visible-lg"></div>
      </div>
      <hr>
      <div class="container">
        <div class="well">
       <h2>What's been happening lately</h2>
       <hr>
     We've been working a lot lately on getting the site up and running.<br>
     This is an example of what the blog post api will look like once we get everthing finished!<br>
     Click <b><a href="exampleblog">Here</a></b> to view it!
     
     <br><h3>How much work we have left to do:</h3>
     
     We've been working like mad on the website, but that damn FTP just won't stop glitching like crazy.<br>
     We'll be updating and putting buttons on our site from our social networks 
     

      <!-- This is where the content for the blog api will go, be sure to leave plenty of space for this -->
        
        <button class="btn btn-warning btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Check it!
</button>
<div class="collapse" id="collapseExample">
  <div class="well">
    <center><h4>How hard we've been working:</h4>
    <br>
    To the point of having to consume a bottle of whiskey while powerhousing through some of the backend and front-end code, we've been going full on with this code.<br>
    
    <h2>Here is a series of photos of us coding/building your beloved website:</h2><br>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="coding.jpg" alt="us codin' ">
      <div class="carousel-caption">
       
      </div>
    </div>
    <div class="item">
      <img src="coding2.jpg" alt="us codin'">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="coding3.jpg" alt="us codin'">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="coding4.jpg" alt="us codin'">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
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
