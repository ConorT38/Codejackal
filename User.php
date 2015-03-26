<?php
session_start();
if(!$_SESSION['email']){
header("location:Login");
}
?>
<!DOCTYPE html>
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
            <?php echo '<li class="active"><a href="User.php?id='.$_SESSION["id"].'">Home</a></li>'; ?>  
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
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Info <span class="caret"></span></a>
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
        <h1>Welcome!</h1>
         <br>
         <p>Hey <?php echo $_SESSION['fname'];?>, ready to make a tutorial?</p>
   
         <h3>Why don't you check out some new tutorials:</h3>
         </div>
         </div>
            <div class="container">
    <?php
 $dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "codejackal_database"; // the name of the database that you are going to use for this project
$dbuser = "codejackal_admin"; // the username that you created, or were given, to access your database
$dbpass = "Waltherp99"; // the password that you created, or were given, to access your database
 
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    if(!isset($_GET['by'])){
 $sql = "SELECT *FROM blog LIMIT 0, 10";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){

$title =$row['title'];
	$description=$row['description'];
	$id=$row['postID'];
	$reg=$row['reg_date'];
	$points =$row['points'];
		
//-display the result of the array
echo '</div></div>';
echo '<div class="container">';
echo '<div class="jumbotron">';
echo '<h3><u>Title:</u> <a href="Userblog.php?id='.$id.'">'  .$title .'</a></h3><br><small>Date: <i>' .$reg. '</i></small>';
echo "<h4><u>Description: </u><i>" .$description. "</i></h4><br><h5><b>Points: ".$points. "</b></h5>";
echo "</div>";
echo "</div>";
}
}
?>
<hr>
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
