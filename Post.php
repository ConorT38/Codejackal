<!--Start using sessions so that when the user goes through pages, it will know the same variables -Conor-->
<?php
if(!isset($_SESSION['submitted'])){ //if login in session is not set
    header("Location: http://www.codejackal.com/Login.php");
}
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal |<?php echo $fname?></title>
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
            <li><a href="User.php">Home</a></li>
             <li><a href="Userlist.php">My Posts</a></li>
            <li><a href="Games.php">Games</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is the most highly rated tutorial post"><a href="leaderboard.php">Code of the Month!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li>
	
          <form class="navbar-form" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-

term">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-

search"></i></button>
			</div>
		</div>
		</form>
		</li>
            <li class="active"><a href="Post.php" data-toggle="tooltip" data-placement="bottom" title="Post a new blog" ><span class="glyphicon glyphicon-user"></span>Post</a></li>
            <li><a href="redirect.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
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
      This is your user profile, do stuff with it!
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
        <h1>Hey, <?php echo $fname?>! We missed you kinda.</h1>      
         <br>
    </div>
</div>
 <div class="container">
        <div class="jumbotron">
      <!-- Beginning of blog post(Beta)_Seamus-->
      <h2>Post Your Blog Hommie!!!</h2>
        <p>Fill out the form below.</p>
          <div class ="form-group">
          <form role ="form" action="dbinsert.php" method="post">
          <label>Title: <br />
          <input name="title" type="text" class="form-control" placeholder="- Enter Your Blog Title Here -" /><br /></label>
      </div>
      
   
<div ng-controller="countCtrl">
  <div class="form-group">
  <label for="comment1">Content:</label>
  <textarea ng-model="content" class="form-control" rows="5" type="text" id="comment1" name="comment1"  placeholder="Post your blog content!!!!"></textarea>
  <small>Number of characters left: <span style ="color:orange"ng-bind="left()"></span></small>
</div>
</div>
   <div class ="form-group">
  <input name="" type="reset"  class="btn btn-default" value="Reset Form" />&nbsp;&nbsp;&nbsp;<input name="submitted" id="clickme" class="btn btn-primary" type="submit" value="Submit" />
</div>
 <script>
  bootstrap_alert = function() {}
bootstrap_alert.warning = function(message) {
            $('#alert_placeholder').html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>'+message+'</span></div>')
        }
    

$('#clickme').on('click', function() {
            bootstrap_alert.warning('Your e-mail has been received by the team!');
});
  </script>
  </form>
<script src="contactformcount.js"></script>
<script src="countCtrl.js"></script>

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
