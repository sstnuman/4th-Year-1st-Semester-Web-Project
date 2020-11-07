<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Profile</title>
 
	<meta charset="UTF-8">
	<link rel="icon" type="image/jpeg" sizes="60x60" href="assets/images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Cholo_Bangladesh/assets/bootstrap-5.css">
	<link rel="stylesheet" href="http://localhost/Cholo_Bangladesh/assets/travel-styles.css">
	<link rel="stylesheet" href="http://localhost/Cholo_Bangladesh/assets/fontawesome-all.min.css">

	<title>Web Engineering Project</title>
</head>
<body>
 <div class="col-md-10 col-sm-10 col-lg-10">
 </div>
 <div class="col-md-2 col-sm-2 col-lg-2">
<a href="logout.php" class="btn btn-success pull-right"  >Logout</a>

</div>
    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Welcome ".$_SESSION['username']." </h1>" ?>

     


<section class="features"> 
<div class="container">
<div class="row">
				
	<div class="col-md-4">
<div class="feature-box">
	<div class="feature-img">
	<img src="http://localhost/Cholo_Bangladesh/assets/images/2.jpg" alt="Saintmartin Island">
							
							
	</div>

		<div class="feature-details">
			<h4>Bandarban</h4>
		<p>Bandarban, is a district in South-Eastern Bangladesh, and a part of the Chittagong Division. It is one of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District. Bandarban city is the headquarters of the Bandarban district</p>
        <form action="bookHistory.php" method="post">
        <input type="submit" name="ban-btn" class="bbtn btn-danger pull-right" value="Book Now">
      </form>
                            
		</div>
						
	</div>
	</div>
				
		<div class="col-md-4">
		<div class="feature-box">
			<div class="feature-img">
			<img src="http://localhost/Cholo_Bangladesh/assets/images/5.jpg" alt="Hazi Danesh">
							
		</div>

		<div class="feature-details">
	 	<h4>Sylhet.</h4>
		<p>Sylhet is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal. It has a subtropical climate and lush highland terrain. The city has a population of more than half a million.</p>
 <form action="bookHistory.php" method="post">
         <input type="submit" name="syl-btn" class="bbtn btn-danger pull-right" value="Book Now">
         </form>
	</div>
						
		</div>
	</div>
				
	<div class="col-md-4">
	<div class="feature-box">
	<div class="feature-img">
	<img src="http://localhost/Cholo_Bangladesh/assets/images/4.jpg" alt="Kuthibari">
							
	</div>

	<div class="feature-details">
	<h4>CoxsBazar.</h4>
		<p>Cox's Bazar is a district in the Chittagong Division of Bangladesh. It is named after Cox's Bazar town. It is located 150 kilometres south of Chittagong. Cox's Bazar is also known by the name Panowa.It is one of the fishing ports of Bangladesh. At Cox's Bazar is one of the world's longest natural sea beaches</p>
         <form action="bookHistory.php" method="post">
        <input type="submit" name="cox-btn" class="bbtn btn-danger pull-right" value="Book Now">
   </form>
		</div>
	</div>
		</div>
</div>
</div>
</section>
</body>
</html>