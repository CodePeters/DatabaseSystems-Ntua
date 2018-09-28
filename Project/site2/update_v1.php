<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:http://localhost:8888/site2/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="icon" href="images/favicon.ico">
  <title>Drugstore</title>
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
      <a class="navbar-brand" href="http://localhost:8888/site2/index.php">DrugStore</a>
    </div>
    <ul class="nav navbar-nav">
	  <li class="dropdown">
	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Φάρμακα
	    	<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	        	<li><a href="med_insert.php">Εισαγωγή</a></li>
	            <li><a href="view_drugs.php">Διαχείριση</a></li>
	        </ul>
	        </li>
      <li>
	  <li class="dropdown">
	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Γιατροί
	    	<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	        	<li><a href="doc_insert.php">Εισαγωγή</a></li>
	            <li><a href="view_doc.php">Διαχείριση</a></li>
	        </ul>
	        </li>
      <li>
  	  <li class="dropdown">
  	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Φαρμακευτική εταιρεία
  	    	<span class="caret"></span></a>
  	        <ul class="dropdown-menu">
  	        	<li><a href="PharmaceuticalCompany_insert.php">Εισαγωγή</a></li>
  	            <li><a href="view_PharmaceuticalCompany.php">Διαχείριση</a></li>
  	        </ul>
  	        </li>
        <li>
  	  <li class="active">
  	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Όψη 1
  	    	<span class="caret"></span></a>
  	        <ul class="dropdown-menu">
  	        	<li><a href="v1_insert.php">Εισαγωγή</a></li>
  	            <li><a href="view_v1.php">Διαχείριση</a></li>
  	        </ul>
  	        </li>
        <li>	
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">DB Information
		  	<span class="caret"></span></a>
		      <ul class="dropdown-menu">
		      	<li><a href="DNpP.php">Γιατρός ανα ασθενή</a></li>
		          <li><a href="DpP.php">Φάρμακα ανα ασθενή (group by patient id)</a></li>
					<li><a href="date.php">Συμβόλαια εταιρειών με φαρμακεία που λήγουν πριν την Χ ημερομηνία λήξης</a></li>
					<li><a href="dexp.php">Γιατροί με περισσότερα από X χρόνια υπηρεσίας</a></li>
					<li><a href="pgc.php">Αναζήτηση φαρμακείων στην X πόλη</a></li>
					<li><a href="percentage.php">Ποσοστό Γιατρών με X ειδικότητα</a></li>
					<li><a href="deal.php">Φαρμακεία στην Χ πόλη που πωλείται το Υ φάρμακο σε τιμή μικρότερη από Ζ </a></li>
					<li><a href="avgprc.php">Φαρμακεία με τις μέσες τιμές φαρμάκων που πουλάνε να είναι μικρότερες από την αντίστοιχη μέση τιμή όλων των φαρμακείων</a></li>
					<li><a href="atleast.php">Φάρμακα που έχουν συνταγογραφιθεί από τουλάχιστον έναν γιατρό.</a></li>
					<li><a href="pelateia.php">Γιατροί σε φθίνουσα σειρά με βάση των αριθμό πελατών τους </a></li>
					<li><a href="view1.php">Όψη 1: Φαρμακεία και οι πόλες στις οποίες βρίσκονται</a></li>
					<li><a href="view2.php">Όψη 2: Φαρμακεία με τη μέση τιμή που πουλούν τα φάρμακα του</a></li>					
		      </ul>

		      </li>
		<li>
    	  <li class="dropdown">
    	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">View tables
    	    	<span class="caret"></span></a>
    	        <ul class="dropdown-menu">
    	        	<li><a href="view_contract.php">Contract table</a></li>
    	            <li><a href="view_patient.php">Patient table</a></li>
  				<li><a href="view_pharmacy.php">Pharmacy table</a></li>
  				<li><a href="view_prescription.php">Prescription table</a></li>
  				<li><a href="view_sell.php">Sell table</a></li>
    	        </ul>
    	        </li>
          <li>
			  <button class="btn btn-danger navbar-btn navbar-right"><a href="logout.php"><font color="white">Log out</font></a></button>
    </ul>
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
		margin: 0; 
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
	
	p{
		color:#00DCFC;
		text-align:center;
	}
	
	h1{
		/*delete margin-top if you want the message of every action being higher*/
		margin-top: 1em; 
		color:#00DCFC;
		text-align:center;
	}
</style>
<!-- END of CSS -->

<!-- form -->
	<div class="container center_div">
    	<div class="row">
    	    <div class="col-md-4 col-md-offset-4">
    	        <div class="panel panel-default">
    	            <div class="panel-heading">
    	              <strong>Update</strong>
    	            </div>
    	            <div class="panel-body">
    	                <form class="form-horizontal" role="form" action="update_v1.php" method="post">
    	                
						<div class="form-group">
    	                    <label for="inputName" class="col-sm-3 control-label">
								Town</label>
    	                    <div class="col-sm-9">
    	                        <input type="text" class="form-control" id="inputName" 	placeholder="Pharmacy's Town" required="True" name="town">
    	                    </div>
    	                </div>
						
						<div class="form-group">
    	                    <label for="inputFormula" class="col-sm-3 control-label">
								Name</label>
    	                    <div class="col-sm-9">
    	                        <input type="text" class="form-control" id="inputFormula" 	placeholder="Pharmacy's Name" name="name" required="True">
    	                    </div>
    	                </div>
						
						
						<div class="form-group">
    	                    <label for="inputDrugId" class="col-sm-3 control-label">
							</label>
    	                    <div class="col-sm-9">
    	                        <input type="hidden"  id="inputDrugid"  name="did" value="<? echo intval($_GET['id']) ?>">
    	                    </div>
    	                </div>

    	                <div class="form-group last">
    	                    <div class="col-sm-offset-3 col-sm-6 pull-left">
    	                        <button type="submit" class="btn btn-warning btn-sm pull-left">
									Update</button>
								 <button class="btn btn-info btn-sm pull-right"><a href="view_v1.php">Manage</a></button>
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

<!-- med_insert.php script -->
<?php
	
	// check for form submission
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		require('mysqli_connect.php');
		// safely get the information
		$nm = mysqli_real_escape_string($conn, trim($_POST['town']));
		$ci = mysqli_real_escape_string($conn, trim($_POST['name']));
		$di = mysqli_real_escape_string($conn, trim($_POST['did']));
		
		// make the update query
		$q = "UPDATE v1 SET Town='$nm', PharmacyName='$ci' WHERE PharmacyId=$di";
		$r = @mysqli_query($conn, $q);
		
		// now we have to check if the
		// update was successful
		if (mysqli_affected_rows($conn)==1){
			// print a success message
			echo '<h1>Thank you!</h1><p>The record has been successfuly updated.</br></p>';
		}else{
			// another problem occured - print an error message(optional)
			echo '<h1>System Error!</h1><p>Something went wrong and the update was not completed!</p>';
			// echo '<p>' . mysqli_error($conn) . '<br /><br />Query: ' . $q . '</p>';
			
		}
		mysqli_close($conn);		
	}
	
?>
<!-- end of med_insert.php script -->

<!-- footer inspired from: http://www.nextbootstrap.com/2016/01/bootstrap-minimal-footer.html -->
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>