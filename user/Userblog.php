<!DOCTYPE html>
<?php
session_start();
 mysql_connect("localhost","codejackal_admin","Waltherp99") or die(mysql_error());
 mysql_select_db("codejackal_database") or die("Couldn't connect to the database!");
$id = intval($_REQUEST['id']);  

$sql = "SELECT * from blog where postID = '$id';";  

$result = mysql_fetch_array(mysql_query($sql)) or die(mysql_error()); 
$content= html_entity_decode($result['content']);

?>
<?php
if(isset($_POST['upvote'])){
	$up = 'UPDATE blog SET points = ' .$result['points']. '+ 1 WHERE postID =' .$id. '';
	mysql_query($up);
}
if(isset($_POST['downvote'])){
		$down = 'UPDATE blog  SET points = ' .$result['points']. '- 1 WHERE postID =' .$id. '';
	mysql_query($down);
}
?>
<html>
  <head>
    <title>CodeJackal | <?php echo $_SESSION['fname']; ?></title>
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
  <script>
      $(document).ready(function() {
          $("a.dropdown-toggle").click(function(ev) {
              $("a.dropdown-toggle").dropdown("toggle");
              return false;
          });
          $("ul.dropdown-menu a").click(function(ev) {
              $("a.dropdown-toggle").dropdown("toggle");
              return false;
          });
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
         <?php echo'<a class="navbar-brand" href="User.php?id='.$_SESSION["id"].'">CodeJackal</a>'?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <?php echo '<li><a href="User.php?id='.$_SESSION["id"].'">Home</a></li>'; ?>  
           <?php echo '<li><a href="Userlist.php?id=' .$_SESSION["id"].'">My Posts</a></li>'; ?>  
          </ul>          
            <ul class="nav navbar-nav navbar-right">
            	
       <li>
          <?php echo '<form class="navbar-form" action="Usersearch.php?go" method="post" role="search">';?>
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srchterm" id="srchterm">
			<div class="input-group-btn">
				<button class="btn btn-default" name ="submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
	
		</div>
		</form>
		</li>
 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Info <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
           <?php echo '<li>Name: <small>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</small></li>'; ?>
             <?php echo '<li>Email: <small>'.$_SESSION['email'].'</small></li>'; ?>
            <li class="divider"></li>
            <?php echo '<li>Points:<small> '.$_SESSION['points'].'</small></li>'; ?>
          </ul>
        </li>
            <?php echo '<li><a href="Post.php?id='.$_SESSION["id"].'" data-toggle="tooltip" data-placement="bottom" title="Post a new blog" ><span class="glyphicon glyphicon-pencil"></span>Post</a></li>';?>
            <li><a href="redirect"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
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
        So you've made it to the Login part of the site, good for you, you're brilliant. That means you made a page, and are trying to Login to that page, so you can get started That's good. I like you.<br>
        Judging by you clicking on this, you need help. That's no problem. Just means you're not a techy perhaps.<hr>
        <br>
        What you're gonna want to do, is just enter in all of your silly little credentials (Email, Password) and I'll let the server do the rest.<br>
        Trust me, it's easy!
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
        <h1><?php echo $result['title']; ?></h1>      
         <br>
       <small>Date:"<?php echo $result['reg_date']; ?>"</small>
       <br>
       <br><quote><i>"<?php echo $result['description'];?>"</i></quote>   
    </div>
</div>
 <div class="container">
      <div class="jumbotron">
        <p><?php echo $content;?></p>     
         <br>

    </div>
</div>
<form method="post">
	<div id="na">
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked">
               <button type="submit" name ="upvote" class="btn btn-default">
          <span class="glyphicon glyphicon-chevron-up"></span></button><span>
        <button type="submit" name ="downvote" class="btn btn-default">
          <span class="glyphicon glyphicon-chevron-down"></span></button>&nbsp;&nbsp</span><p>Points: <?php echo $result['points'];?></p>
            </ul>
        </div>
      </div>
      </div>
      </form>
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
