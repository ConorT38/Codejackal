<?php
session_start();
if(!isset($_SESSION['email'])){
header('location:Login');	
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
<!-- TinyMCE text editor -->
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>

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
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
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
            <?php echo '<li class="active"><a href="Post.php?id='.$_SESSION["id"].'" data-toggle="tooltip" data-placement="bottom" title="Post a new blog" ><span class="glyphicon glyphicon-pencil"></span>Post</a></li>';?>
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
        <h1>Hey, <?php echo $_SESSION['fname'];?>. You should post something.</h1>      
         <br>
    </div>
</div>
 <div class="container">
        <div class="jumbotron">
      <!-- Beginning of blog post(Beta)_Seamus-->
      <h2>Post your Blog here</h2>
        <p>Fill out the form below.</p>
          <div class ="form-group">
          <form action="postsuccess.php" method="post">
          <label>Title: </label>
          <input type ="text" name="title" id="title" type="text" class="form-control" rows="1" placeholder="- Enter Your Blog Title Here -"></input>
      <br /><br /></div>
      
          <div class ="form-group">
          <label>Description: </label>
          <input type ="text" name="description" id="description" type="text" class="form-control" rows = "2" placeholder="- Describe Your Blog Here -"></input>
          <br /><br /></div>

          <div class="form-group">
          <label for="Content">Content:</label>
          <textarea name ="content" id = "content" class="form-control" rows="15" type="text" placeholder="Post your blog content!"></textarea>  
          <br /><br /></div>

          <div class ="form-group">
          <label>Tags: </label>
          <input type ="text" name="tags" id="tags" type="text" class="form-control" rows="1" placeholder="- Tag Your Blog Here (use , to seperate tags) -"></input>
          <br /><br /></div>


   <div class ="form-group">
  <input name="" type="reset"  class="btn btn-default" value="Reset Form" />&nbsp;&nbsp;&nbsp;
  <input name="submitted" id="clickme" data-loading-text="Loading..." class="btn btn-primary" type="submit" value="Submit" />
</div>
<script>
  $('#clickme').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script>
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
