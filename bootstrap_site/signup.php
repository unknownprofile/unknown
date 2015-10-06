<!--  
 - Filename: signup.php
 - Created On: Dec. 12, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<!-- start of index.html -->
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
      <div class="container">
        <h1>Sign up now!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque vestibulum augue sed tincidunt. Pellentesque tempor dui quis massa ullamcorper tempus. Donec tempus eu tortor at ornare. Donec ac tempus orci. Curabitur at nisl eget lacus scelerisque commodo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Nunc faucibus gravida quam a posuere. Maecenas fringilla dui at tincidunt tempor.</p>
		</div>
		<div class="container">
			<div class="col-md-5">
           <form action="signup_insert.php" method="POST" class="form-signin" role="form">
			 <h2 class="form-signin-heading">Please fill up all required fields.</h2>
			 <input type="text" class="form-control contact" placeholder="Username" name="user_name" required>
			 <input type="text" class="form-control contact" placeholder="Address" name="user_add" required>
			 <input type="text" class="form-control contact" placeholder="Mobile number" name="user_num" required>
			 <input id="birthdate" type="date" class="form-control contact" placeholder="Birthdate" name="user_birthdate">
			 <select class="form-control contact" name="user_gender" required>
				<option  value="male">Male</option>
				<option  value="female">Female</option>
			 </select>
			 <input type="email" class="form-control contact" placeholder="Email" name="user_email" required autofocus>
			 <input type="password" class="form-control contact" placeholder="Password" name="user_password" required>
			 <input type="password" class="form-control contact" placeholder="Confirm Password" name="user_cpassword" required>
			 <label class="checkbox">
			<input type="checkbox" value="remember-me" name="user_agree" required><a href="terms.php" >Agree in Terms</a>
			</label>
			<button class="btn btn-lg btn-primary btn-block contact" type="submit" name="user_send" >Sign up</button>
			 </form>
        </div>
		
        <div class="col-md-7">
			<img class="featurette-image img-responsive" src="_assets/images/involved_image.png" alt="Generic placeholder image">
		 </div>
      </div>		   
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
        <p>&copy; FISH 2014. To God Be The Glory &middot; <a href="privacy.php">Privacy</a> &middot; <a href="#">Terms</a> &middot; Email:<a href="#"> fish@gmail.com</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="_assets/js/bootstrap.min.js"></script>
    <script src="_assets/js/docs.min.js"></script>
    <script src="_assets/js/datepicker.js"></script>
	<!-- Jquery Ui Datepicker -->
	<script src="_assets/js/jquery_ui_datepicker.js"></script>
	<!-- Js Datepicker -->
	<script src="_assets/js/datepicker.js"></script>
  </body>
</html>
<!-- End of index.html -->
