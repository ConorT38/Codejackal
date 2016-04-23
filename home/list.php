<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:User.php");
}
?>
<!DOCTYPE html>
 <?php
 mysql_connect("localhost","codejackal_admin","Waltherp99") or die(mysql_error());
 mysql_select_db("codejackal_database") or die("Couldn't connect to the database!");
 ?>
<html>
  <head>
    <title>CodeJackal | Archive</title>
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
             <li class="active"><a href="list">Archive</a></li>
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
    <div id = "alert_placeholder"></div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">A little helping hand...</h4>
      </div>
      <div class="modal-body">
        This is an archive or full listing of all the posts that have been put up on this website, hopefully it doesn't have as many bugs as we'd hoped not to have.
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
        <h1>Archive:</h1>      
         <br>
         <p>A list of all the posts/tutorials people have posted.</p>

          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  What's this all about?
</button><br>
<nav>
  <ul class="pagination">
    <li>
      </a>
    </li>
    <li><a href="?by=A">A</a></li>
    <li><a href="?by=B">B</a></li>
    <li><a href="?by=C">C</a></li>
    <li><a href="?by=D">D</a></li>
    <li><a href="?by=E">E</a></li>
    <li><a href="?by=F">F</a></li>
    <li><a href="?by=G">G</a></li>
    <li><a href="?by=H">H</a></li>
    <li><a href="?by=I">I</a></li>
    <li><a href="?by=J">J</a></li>
    <li><a href="?by=K">K</a></li>
    <li><a href="?by=L">L</a></li>
    <li><a href="?by=M">M</a></li>
    <li><a href="?by=N">N</a></li>
    <li><a href="?by=O">O</a></li>
    <li><a href="?by=P">P</a></li>
    <li><a href="?by=Q">Q</a></li>
    <li><a href="?by=R">R</a></li>
    <li><a href="?by=S">S</a></li>
    <li><a href="?by=T">T</a></li>
    <li><a href="?by=U">U</a></li>
    <li><a href="?by=V">V</a></li>
    <li><a href="?by=W">W</a></li>
    <li><a href="?by=X">X</a></li>
    <li><a href="?by=Y">Y</a></li>
    <li><a href="?by=Z">Z</a></li>
    <li>
      </a>
    </li>
  </ul>
</nav>
  
      </div>
    </div>
    <div class="container">
    <?php
    if(!isset($_GET['by'])){
 $sql = "SELECT *FROM blog";
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
echo '<h3><u>Title:</u> <a href="blog.php?id='.$id.'">'  .$title .'</a></h3><br><small>Date: <i>' .$reg. '</i></small>';
echo "<h4><u>Description: </u><i>" .$description. "</i></h4><br><h5><b>Points: ".$points. "</b></h5>";
echo "</div>";
echo "</div>";
}
}
else if(isset($_GET['by'])){
$letter=$_GET['by'];
//connect to the database
//connect to the database
$db=mysql_connect ("localhost", "codejackal_admin", "Waltherp99") or die ('I cannot connect to the database because: ' . mysql_error()); 
//-select the database to use
$mydb=mysql_select_db("codejackal_database");
//-query the database table
$sql="SELECT postID, title, description,reg_date, points FROM blog WHERE title LIKE '%" . $letter . "%'";
//-run the query against the mysql query function
$result=mysql_query($sql); 
//-count results
$numrows=mysql_num_rows($result);
echo "<p>" .$numrows . " results found for " . $letter . "</p>"; 
//-create while loop and loop through result set
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
echo '<h3><u>Title:</u> <a href="blog.php?id='.$id.'">'  .$title .'</a></h3><br><small>Date: <i>' .$reg. '</i></small><br>';
echo "<h4><u>Description</u>:</h4> <p><i>" .$description. "</i></p><br><h5><b>Points: ".$points."</b></h5>";
echo "</div>";
echo "</div>";
}
}
?>
    
    
    
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
