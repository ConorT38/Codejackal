 
<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | Error</title>
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

  <body onload="timer = setTimeout(function() {
                window.location = 'index.php';
            }, 3000)">
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
        <h1>Search results for : <?php $srch-term ?></h1>      
        
      <?php 
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['srch-term'])){ 
	  $name=$_POST['srch-term']; 
	  //connect  to the database 
	  $db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db("yourDatabase"); 
	  //-query  the database table 
	  $sql="SELECT  postID, TITLE, DESCR FROM ENTRIES WHERE TITLE LIKE '%" . $srch-term .  "%' OR DESCR LIKE '%" . $srch-term ."%'"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result)){ 
	          $TITLE  =$row['TITLE']; 
	          $postID=$row['postID']; 
	          $Descr=$row['DESCR']; 
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"search.php?id=$postID\">" ."<br><br><u>" .$TITLE . "</u><br><br><u> " . $DESCR ."</u><br>".  "</a></li>\n"; 
	  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Your search gave back like, absolutely no results like.</p>"; 
	  } 
	  } 
	  } 
	?> 
       
         
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



