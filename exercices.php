<!DOCTYPE html>
<html lang="FR-fr">
<head>
	<meta charset="utf-8" />
	<title>GROUPE CFA | EXERCICES</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
	<link rel="stylesheet" type="text/css" href="./exercices.css" />
	<link rel="stylesheet" type="text/css" href="./style.css" />
<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<!-- Import fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <style> @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap'); </style>

</head>
<body>
  <?php include("header.php"); ?>

  <main id="exercices_page">
  	<div id="exercice_index_container">
  		<span id="exercice_index_head">
  			<label id="exercice_index_label">
  				<input type="checkbox" id="exercice_index_btn" name="exercice_index_btn" />
  				<span id="exercice_index_span">
  					<i class="fa-solid fa-chevron-down"></i>
  				</span>
  			</label>
  			INDEX
  		</span>
  		<div id="exercice_index">
  			<ul>
	  			<li><a href="#exercice1_anchor">Perimètre Aire</a></li>
	  			<li><a href="#exercice2_anchor">Heures, minutes, secondes en secondes</a></li>
	  			<li><a href="#exercice3_anchor">Age père fils</a></li>
	  			<li><a href="#exercice4_anchor">Perimètre Aire Volume</a></li>
  			</ul>
  		</div>
  	</div>

		<h2>Exercices</h2>

		<?php include("exercices/exercice1.php"); ?>
		<?php include("exercices/exercice2.php"); ?>
		<?php include("exercices/exercice3.php"); ?>
		<?php include("exercices/exercice4.php"); ?>
	</main>

  <?php include("footer.php"); ?>


<script src="./exercices.js"></script>
</body>
</html>