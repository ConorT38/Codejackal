<?php
  //Session Details 
      if (!isset($_SESSION['email'])) {
        header("Location: Login.php");
      
      else{
    
      session_start(); // Starting Session
        $error=''; // Variable To Store Error Message
      if (isset($_POST['submit'])) {
        if (empty($_POST['email']) || empty($_POST['pass'])) {
          $error = "Username or Password is invalid";
      }

    else{

    // Define $email and $pass
      $email=$_POST['email'];
      $pass=$_POST['pass'];
    

    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
      $dbhost = 'localhost';
      $dbuser = 'codejackal_admin';
      $dbpass = 'Waltherp99';
      $conn = mysql_connect($dbhost, $dbuser, $dbpass);

    // To protect MySQL injection for Security purpose
      $email = stripslashes($email);
      $pass = stripslashes($pass);
      $email = mysql_real_escape_string($email);
      $pass= mysql_real_escape_string($pass);

    // Selecting Database, make sure to change this to user if you mix it up
      $db = mysql_select_db("codejackal_database", $conn);

    // SQL query to fetch information of registerd users and finds user match.
      $query = mysql_query("select * from users where pass='$pass' AND email='$email'", $conn);
      $rows = mysql_num_rows($query);

    if ($rows == 1) {
      $_SESSION['login_user']=$email; // Initializing Session
      $row = $rows->fetch_assoc();
     }
     else {
        header("Location: Login");
      }
      mysql_close($conn); // Closing Connection
      }
    }
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


<!--Start of Body-->


  <body>
  	<div class="page-header">
  		<h1><img alt="Logo" src="netsoc.jpg"/> NCI NetSoc <small>Learn | Experiment | Do</small></h1>
	</div>
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
            <li data-toggle="tooltip" data-placement="bottom" title="This is a leaderboard of the best CodeJackal users!!"><a href="leaderboard">Leaderboard</a></li>
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
            <li><a href="Signup" data-toggle="tooltip" data-placement="bottom" title="Create a blog post" ><span class="glyphicon glyphicon-user"></span>Blog</a>  </li>
            
            <li><a href="Log"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
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
        Welcome to your account page where you can edit and review your own blog posts as well as staying upi to date with everything that codejackal has to offer.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id ="alert_placeholder">
</div>
  <div class="alert alert-info" role="alert">Welcome back<?php echo $row['fname'];?></div>
    <div class="container">
   <div class="jumbotron">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Content of Image container -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="codejackalbanner.png" alt="cjbanner"></center>
       <div class="carousel-caption">
        <h2>Welcome back to CodeJackal <?php echo $row['fname'];?> </h2>
          
  </div>
    </div>

    
    

    
  </div>

  


<!-- these are all of the columns, we can debate later whether or not these will stay -->

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
        echo "<h4><u>Description: </u><i>" .$description. "</i></h4><br><h5><b>Points: '.$points.'</b></h5>";
        echo "</div>";
        echo "</div>";
        }
      }
      

      else if(isset($_GET['by'])){
        $letter=$_GET['by'];
      
      //connect to the database
      
        $db=mysql_connect ("localhost", "codejackal_admin", "Waltherp99") or die ('Connection Error: ' . mysql_error()); 

      //-select the database to use
        $mydb=mysql_select_db("codejackal_database");

      //-query the database table
        $sql="SELECT postID, title, description,reg_date, points FROM blog WHERE title LIKE '%" . $letter . "%' OR description LIKE '%" . $letter ."%'";

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
     

<!-- Footer content(Same for every page) -->
        
      
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
