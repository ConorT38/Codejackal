<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:User.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>CodeJackal | Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Motherfucking Angularjs in this bitch-->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/superhero/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <link async href="http://fonts.googleapis.com/css?family=Warnes" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
 <link rel="stylesheet" src="socialbtn.css" type="text/css"/>
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
             <li><a href="list">Archive</a></li>
            <li><a href="about">About Us</a></li>
            <li class="active"><a href="contact">Contact</a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="This is a leaderboard of the best CodeJackal users!! "><a href="leaderboard">Leaderboard</a></li>
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
            <li><a href="Signup" data-toggle="tooltip" data-placement="bottom" title="Keep up to date with everything CodeJackal!!" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
          <h4 class="modal-title" id="myModalLabel">What this is all about...</h4>
         </div>
          <div class="modal-body">
        This page is for getting in contact with the creators of this website, just enter in your credentials and e-mail and a comment or query and they will try and get back to you
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id ="alert_placeholder">
</div>
    <div class="container">
      <div class="jumbotron">
        <h1>Make sure to contact us!</h1>      
        <p>Please send us an E-mail and we will reply as soon as possible!!</p>
        <br>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  What's this?
</button>      
      </div>
    </div>

    <div class="container">
      <div class ="jumbotron">
          <?php 
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_REQUEST['firstname'])) {
  $firstname = $_REQUEST['firstname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$firstname)){ $firstname = $_REQUEST['firstname'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your First Name.';}
  
  // Check for a proper Last name
  if (!empty($_REQUEST['lastname'])) {
  $lastname = $_REQUEST['lastname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$lastname)){ $lastname = $_REQUEST['lastname'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Last Name.';}
  
  //Check for a valid Email
  if (!empty($_REQUEST['Email'])) {
  $Email = $_REQUEST['Email'];
  $pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
  if (preg_match($pattern,$Email)){ $Email = $_REQUEST['Email'];}
  else{ $errors[] = 'Your Email can only be numbers and letters.';}
  } else {$errors[] = 'You forgot to enter your Email.';}
  
  if (!empty($_REQUEST['comment1'])) {
  $comment1 = $_REQUEST['comment1'];
  $pattern = "/(.*?){1,2000}/";
  if (preg_match($pattern,$comment1)){ $comment1 = $_REQUEST['comment1'];}
  else{ $errors[] = 'Your comment is whack yo.';}
  } else {$errors[] = 'You forgot to enter your Comment.';}
  
  }
  


    //End of validation 
  if (isset($_REQUEST['submitted'])) {
  if (empty($errors)) { 
  $from = "Fucking comment from " . $firstname. ""; //Site name
  // Change this to your email address you want to form sent to
  $to = "info@codejackal.com"; 
  $subject = "Faggots! Someone Commented in from " . $name . "";
  
  $message = "Message from " . $firstname . " " . $lastname . " 
  
  E-Mail: " . $Email . " 
  
  Comment: ". $comment1 . "";
  mail($to,$subject,$message,$from);
  }
}
?>
<?php 
  //Print Errors
  if (isset($_REQUEST['submitted'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
   else{echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr /><p>Below is the message that you sent.</p>'; 
  echo "<u>Message from " . $firstname . " " . $lastname . " </u><br /><b>E-mail: </b> ".$Email."<br /><b>Comment:</b><br /><i> '".$comment1."' </i><br />";
  }
  }
//End of errors array
  ?>
        <h4>E-mail us at: info@codejackal.com</h4>
        <br>
        <p>Try get in contact with use if you have any queries on our site or services!<br>We're nice, we reply sometimes if we like you.</p>
      </div>
        <div class="clearfix visible-lg"></div>
      </div>
      <div class="container">
        <div class="jumbotron">

    <h2>Contact us</h2>
  <p>Fill out the form below.</p>
  <div class ="form-group">
  <form role ="form" action="" method="post">
  <label>First Name: <br />
  <input name="firstname" type="text" class="form-control" placeholder="- Enter First Name -" /><br /></label>
</div>
   <div class ="form-group">
  <label>Last Name: <br />
  <input name="lastname" type="text" class="form-control" placeholder="- Enter Last Name -" /><br /></label>
  </div>
   <div class ="form-group">
  <label>E-Mail: <br />
  <input name="Email" type="text" class="form-control" placeholder="- Enter Email -" /><br /></label>
</div>
<div>
    <div class="form-group">
  <label for="comment1">Comment:</label>
  <textarea  class="form-control" rows="5" type="text" id="comment1" name="comment1"  placeholder="Leave us a comment!"></textarea>
</div>
</div>
   <div class ="form-group">
  <input name="" type="reset"  class="btn btn-default" value="Reset Form" />&nbsp;&nbsp;&nbsp;
  <input name="submitted" class="btn btn-primary" type="submit" value="Submit" />
</div>

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
