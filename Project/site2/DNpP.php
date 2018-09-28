<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:http://localhost:8888/site2/login.php");
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
		<li class="active">
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
	
	h1,h4{
		margin-top: 1em; 
		color:#00DCFC;
		text-align:center;
	}
	
	table, th, td {
	    border: 1px solid #00DCFC;
	    border-collapse: collapse;
		empty-cells: hide;
/*		background-color:#1F1F1F;*/
		background: RGBA(31, 31, 31, 0.5);
	}
	th, td {
	    padding: 5px;
	    text-align: center;
	}
</style>
<!-- END of CSS -->

<br />

<!-- DNpP.php script -->
<?php

		require_once('mysqli_connect.php');
		// set the number of records to display per page
		$display = 5;
		if (isset($_GET['p']) && is_numeric($_GET['p'])){
			$pages = $_GET['p'];
		}else{
		
			// count the number of records
			$q = "SELECT Patient.LastName, Patient.FirstName, Doctor.LastName, Doctor.FirstName FROM Patient, Doctor WHERE Patient.DoctorId = Doctor.DoctorId";
			$r = @mysqli_query($conn, $q);
			$num_rows = mysqli_num_rows($r);
			
			echo '<h4>Γιατρός ανα ασθενή</h4>';
			$row = @mysqli_fetch_array($num_rows, MYSQLI_NUM);
			$records = $num_rows;

			// calculate the number of pages
			if ($records > $display){
				// it is going to be more than one page
				$pages = ceil($records/$display);
			}else{
				$pages = 1;
			}
		}
	
		// determine where in the database to start returning results
		if (isset($_GET['s']) && is_numeric($_GET['s'])){
			$start = $_GET['s'];
		}else{
			$start = 0;
		}
		// define the query
		$q = "SELECT Patient.LastName, Patient.FirstName, Doctor.LastName, Doctor.FirstName FROM Patient, Doctor WHERE Patient.DoctorId = Doctor.DoctorId LIMIT $start, $display";
		$r = @mysqli_query($conn, $q);
		
		
		
		// table headers formating
		echo '</br><table align="center" cellspacing="3" cellpadding="3" width="50%">
			<tr>
				<td align="left"><h4><b>Patient LastName</b></h4></td>
				<td align="left"><h4><b>Patient FirstName</b></h4></td>
				<td align="left"><h4><b>Doctor LastName</b></h4></td>
				<td align="left"><h4><b>Doctor FirstName</b></h4></td>
			</tr>';
			
		// <td align="left"><a href="delete_drug.php?id=' . $row['DrugId'] . '"><font color="red">Delete</font></a></td> - works fine but if a button prefered
		
		// fetch and print all the records
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
			echo '<tr>
					<td align="left">' . $row['LastName'] . '</td>
					<td align="left">' . $row['FirstName'] . '</td>
					<td align="left">'  . $row['LastName'] . '</td>
					<td align="left">'  . $row['FirstName'] . '</td>
				  </tr>';
		}// end of while loop
		echo '</table>';
		mysqli_free_result($r);
		mysqli_close($conn);
	
		// make the links to other pages if necessary
		if ($pages > 1){
			echo '<br /><p>';
			// determine what page the script is
			$current_page = ($start/$display)+1;
		
			// if it is not the first page make a previous link:
				if ($current_page !=1 ){
					echo '<a href="DNpP.php?s=' . ($start - $display) . '&p=' . $pages . '">Previous</a> ';
				}
				// make all the numbered pages:
				for ($i=1; $i<=$pages; $i++){
					if ($i != $current_page){
						echo '<a href="DNpP.php?s=' . (($display *
						($i - 1))) . '&p=' . $pages . '">' . $i . '</a> ';
					}else{
						echo $i . ' ';
					}
				}// end for loop
			
				// if it is not the last page make next button
				if ($current_page != $pages){
					echo '<a href="DNpP.php?s=' . ($start + $display) . '&p=' . $pages . '">Next</a>';
				}
				echo '</p>'; // close the paragraph
		}	
?>
<!-- end of view_drugs.php script -->

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