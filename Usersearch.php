 <?php
session_start();
 mysql_connect("localhost","codejackal_admin","Waltherp99") or die(mysql_error());
 mysql_select_db("codejackal_database") or die("Couldn't connect to the database!");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | <?php echo $_POST['srchterm']; ?></title>
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
        So you've made it to the Login part of the site, good for you, you're brilliant. That means you made a page, and are trying to Login to that page, so you can get started That's good. I like you.<br>        Judging by you clicking on this, you need help. That's no problem. Just means you're not a techy perhaps.<hr>
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
        <h1>Search results for : <?php echo $_POST['srchterm']; ?></h1>      
        
  <?php

if(isset($_POST['submit'])){
if(isset($_GET['go'])){
if(preg_match("/[A-Z | a-z]+/", $_POST['srchterm'])){
$srchterm=$_POST['srchterm'];

//connect to the database
$db=mysql_connect ("localhost", "codejackal_admin", "Waltherp99") or die ('I cannot connect to the database because: ' . mysql_error()); 

//-select the database to use
$mydb=mysql_select_db("codejackal_database");

//-query the database table
$sql="SELECT postID, title, description, reg_date, points FROM blog WHERE title LIKE '%" . $srchterm . "%'";

//-run the query against the mysql query function
$result=mysql_query($sql);

//-count results

$numrows=mysql_num_rows($result);

echo "<p>" .$numrows . " results found for " . stripslashes($srchterm) . "</p>"; 

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
echo '<h3><u>Title:</u> <a href="Userblog.php?id='.$id.'">'  .$title .'</a></h3><br><small>Date: <i>' .$reg. '</i></small><br>';
echo "<h4><u>Description</u>:</h4> <p><i>" .$description. "</i></p><br><h5><b>Points: ".$points."</b></h5>";
echo "</div>";
echo "</div>";
}
}
else{
echo "<p>Please enter a search query</p></div></div>";
}
}
}

if(isset($_GET['by'])){
$letter=$_GET['by'];

//connect to the database
//connect to the database
$db=mysql_connect ("localhost", "codejackal_admin", "Waltherp99") or die ('I cannot connect to the database because: ' . mysql_error()); 

//-select the database to use
$mydb=mysql_select_db("codejackal_database");

//-query the database table
$sql="SELECT postID, title, description, points, reg_date FROM blog WHERE title LIKE '%" . $letter . "%'";


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
echo '<h3><u>Title:</u> <a href="Userblog.php?id='.$id.'">'  .$title .'</a></h3><br><small>Date: <i>' .$reg. '</i></small><br>';
echo "<h4><u>Description</u>:</h4> <p><i>" .$description. "</i></p><br><h5><b>Points: ".$points."</b></h5>";
echo "</div>";
echo "</div>";
}
}

if(isset($_GET['id'])){
$contactid=$_GET['id'];

//connect to the database
$db=mysql_connect ("localhost", "codejackal_admin", "Waltherp99") or die ('I cannot connect to the database because: ' . mysql_error()); 

//-select the database to use
$mydb=mysql_select_db("codejackal_database");

//-query the database table
$sql="SELECT * FROM blog WHERE postID=" . $id;


//-run the query against the mysql query function
$result=mysql_query($sql); 

//-create while loop and loop through result set
while($row=mysql_fetch_array($result)){

  $title =$row['title'];
	$description=$row['description'];
	$content=$row['content'];

//-display the result of the array
echo '</div></div>';
echo '<div class="container">';
echo '<div class="jumbotron">\n';
echo "<h3><u>Title:</u> "  .$title ."</h3><br><hr>";
echo "<h5><u>Description:</u> <i>" .$description. "</i></h5><br>";
echo "<p>" .$content. "</p>";
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



