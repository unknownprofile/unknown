<!--  
 - Filename: signin.php
 - Created On: Dec. 17, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<!-- start of signin.php -->
<?php 
	session_start(); 
?>
<html>
<title>FISH</title>
<head>
<!-- meta -->
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- icon -->
<link rel="shortcut icon" href="_assets/images/fish.png" type="image/png">
<!-- main.css -->
<link rel="stylesheet" type="text/css" href="_assets/css/main.css" />
<!-- js -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="_assets/js/ie-emulation-modes-warning.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="_assets/js/ie10-viewport-bug-workaround.js"></script>
</head>
<!-- NAVBAR -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img class="fish_icon" src="_assets/images/fish.png"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
               </li>
              </ul>
			  <div class="navbar-form navbar-right" role="form" action="login.php" method="POST">
				<a href="signin.php"><button class="btn btn-success">Sign in</button></a>
				<a href="signup.php"><button class="btn btn-success">Sign up</button></a>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>


     <!-- Main Contact Container -->
    <div class="jumbotron">
      
		<div class="container signin_container">

      <form action="login.php" method="POST" class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="email" class="form-control contact" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me  &nbsp; &nbsp; &nbsp; <a href="forgot_password.php">Forgot Password?</a>
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
		   
		</div>
    </div>
	<!-- end of Main Contact Container -->



    <!-- Marketing messaging and featurettes -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
     
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; FISH 2014. To God Be The Glory &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; Email:<a href="#"> fish@gmail.com</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="_assets/js/bootstrap.min.js"></script>
    <script src="_assets/js/docs.min.js"></script>
  </body>
</html>
<!-- End of index.html -->
