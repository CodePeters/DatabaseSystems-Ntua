<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="icon" href="images/favicon.ico">
  <title>Drugstore Login</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body background="images/30.jpg">
<div>
<!-- Navigation Bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost:8888/site2/login.php">DrugStore Login</a>
    </div>
  </div>
</nav>
<!-- End of navigation bar -->

<!-- BEGIN of CSS -->
<style>

	/* make the from transparent*/
	.panel-default {
		opacity: 0.9;
	 	margin-top:30px;
	}
	.form-group.last {
	   margin-bottom:0px;
	}
	/* till here for the form transparecy*/

	html, body {
		background-repeat:no-repeat;
		background-size:cover;  
		width: 100%;  
		height: 100%;  
	}
	footer {
		background: #1F1F1F;
		bottom: 0;
		position:fixed;
		right:0;
		left:0;
	}
	footer .copyright-section {
		background: #1F1F1F;
		padding: 10px 1000; 
	}
	footer .copyright-section .logo {
		max-width: 100%;
		margin: 0 auto; 
	}
	footer .copyright-section .copyright {
		margin-top: 5px; 
	}
	footer .copyright-section .copyright p {
		text-align: center;
		color: #577; 
	}
	footer .demo-logo{
		margin: 0;
		padding: 0;
		text-align: center;
		font-size: 36px;
		text-transform: uppercase;
		color: #1F1F1F;
	}
	footer .demo-logo strong{
		color: #4EB14D;
	}
	
	p,td,b{
		color:#00DCFC;
		text-align:center;
		font-family: "Comic Sans MS";
	}
	
	h1,h3,h4{
		margin-top: 1em; 
		color:#00DCFC;
		text-align:center;
	}
</style>
<!-- END of CSS -->

</br></br>
<!-- form -->
	<div class="container center_div">
    	<div class="row">
    	    <div class="col-md-4 col-md-offset-4">
    	        <div class="panel panel-default">
    	            <div class="panel-heading">
    	              <strong>Login</strong>
    	            </div>
    	            <div class="panel-body">
    	                <form class="form-horizontal" role="form" action="login.php" method="post">


						<div class="form-group">
    	                    <label for="inputName" class="col-sm-3 control-label">
								Username</label>
    	                    <div class="col-sm-9">
    	                        <input type="text" class="form-control" id="inputName" 	placeholder="Your Username" required="True" name="username">
    	                    </div>
    	                </div>

						<div class="form-group">
    	                    <label for="inputName" class="col-sm-3 control-label">
								Password</label>
    	                    <div class="col-sm-9">
    	                        <input type="password" class="form-control" id="inputName" 	placeholder="Your Password" required="True" name="password">
    	                    </div>
    	                </div>

    	                <div class="form-group last">
    	                    <div class="col-sm-offset-3 col-sm-9">
    	                        <button type="submit" class="btn btn-success btn-sm">
									Login</button>
    	                    </div>
    	                </div>
    	                </form>
    	            </div>
    	             <div class="panel-footer">
            </div>
    	    </div>
    	</div>
	</div>
<!-- end of form -->

<?php # login.php
	// this is the login page for the site
	
	// Site URL (base for all redirections):
	define ('BASE_URL', 'http://localhost:8888/site2/');
	// Adjust the time zone for PHP 5.1 and greater:
	date_default_timezone_set('UTC');
	
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		// require the connection script for
		// the credentials table
		require('mysqli_connect1.php');
		
		// make sure that the username is entered
		if (!empty($_POST['username'])){
			$u = mysqli_real_escape_string($conn, $_POST['username']);
		}else{
			echo '<h3>Error! You forgot to enter your username!</h3>';
		}
		
		// make sure that the password is entered
		if (!empty($_POST['password'])){
			$p = mysqli_real_escape_string($conn, $_POST['password']);
		}else{
			echo '<h3>Error! You forgot to enter your Password!</h3>';
		}
		
		if ($u && $p){ // if both username and password are entered
			// query the credentials database for user validation
			$q = "SELECT userid FROM credentials WHERE (username='$u' AND password=SHA1('$p'))";
			$r = mysqli_query($conn, $q);
			if (mysqli_num_rows($r)==1){
				// a match was made - establish a connection
				session_start();
				$_SESSION['username'] = $_POST['username'];
				mysqli_free_result($r);
				mysqli_close($conn);
				// now we can redirect the user:
				$url = BASE_URL . 'index.html';
				// delete the buffer
				ob_end_clean();
				echo("<script>location.href='http://localhost:8888/site2/';</script>");
				exit(); // quit the script
			}else{
				// no match was made - wrong credentials
				echo '<h3>Error! Wrong credentials!</h3>';
				// echo '<p>' . mysqli_error($conn) . '<br /><br />Query: ' . $q . '</p>';
			}
		}else{
			echo '<h3>Error! Please try again later!</h3>';
		}
		mysqli_close($conn);
	}

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- footer from: http://www.nextbootstrap.com/2016/01/bootstrap-minimal-footer.html -->
<footer>
<section class="copyright-section">
<div class="container">
<div class="row">
<div class="col-sm-12">
<!-- <div class="logo">
<h2 class="demo-logo"><strong>Drugstore</strong></h2>
</div> -->
<div class="copyright">
<p>Copyright &copy; 2017. All Rights Reserved.</p>
</div>
</div>
</div>
</div>
</section>
</footer> 
<!--  End of footer -->

</div>
</body>
</html>
