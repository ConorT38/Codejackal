<!DOCTYPE html>

<?php
if(isset($_POST['submitted']))
{
$dbhost = 'localhost';
$dbuser = 'codejackal_admin';
$dbpass = 'Waltherp99';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $title = addslashes ($_POST['title']);
   $content = addslashes ($_POST['content']);
}
else
{
   $title = $_POST['title'];
   $content = $_POST['content'];
}
$id = $_POST['id'];

$sql = "INSERT INTO blog ".
       "(title,content,id) ".
       "VALUES('$title','$content','$id')";
mysql_select_db('codejackal_database');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
header('Location: redirect.php');
mysql_close($conn);
}
else
{
?>

<!--Session data, sorry if it's messy -->
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$dbhost = 'localhost';
$dbuser = 'codejackal_admin';
$dbpass = 'Waltherp99';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

// Selecting Database
$db = mysql_select_db("codejackal_database", $conn);

session_start();// Starting Session This is important to put this in the right position faggots

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from users where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: Logout.php'); // Redirecting To Home Page
}
?>

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
            <li class="active"><a href="User.php">Home</a></li>
             <li><a href="Userlist.php">My Posts</a></li>
            <li><a href="Games.php">Games</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is the most highly rated tutorial post"><a href="leaderboard.php">Code of the Month!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Post.php" data-toggle="tooltip" data-placement="bottom" title="Post a new blog" ><span class="glyphicon glyphicon-user"></span>Post</a></li>
            <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
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
          <form role ="form" action="<?php $_PHP_SELF ?>"method="post">
          <label>Title: <br />
          <input name="title" id="title" type="text" class="form-control" placeholder="- Enter Your Blog Title Here -" /><br /></label>
      </div>
      
   

  <div class="form-group">
  <label for="Content">Content:</label>
  <textarea name ="content" id = "content" class="form-control" rows="5" type="text" placeholder="Post your blog content!"></textarea>
  
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


<?php
  }
  ?>
