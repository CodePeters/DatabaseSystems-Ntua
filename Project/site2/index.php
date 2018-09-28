<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:http://localhost:8888/site2/login.php");
   exit;
}
?>
<!DOCTYPE html>
<html lang="en">
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
  	  <li class="dropdown">
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
	html, body{
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

<h1>Description</h1>
<br/>
<p>
This system provides a simple and of course</br>
a user-friendly graphical user interfafce that</br>
allows the user to perform actions in the database.</br><br/></p>

<center><img src="images/earth1.png" alt="database" height="300" width="300"></center>

<p>
</br>More specifically it allows a user to alter certain</br>
tables of the database by insert new records, delete</br>
already existed records or even update them.
</p>

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
