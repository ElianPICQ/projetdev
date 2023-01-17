<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="utf-8" />
    <title>Site E-learning</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="stylesheet" type="text/css" href="./style.css" />

<!-- Import fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap'); </style>

</head>

<body>
  <div id="page-container">

    <?php include("header.php"); ?>

    <main>

      <div id="carrousel-container">
<!-- 
  If you want to add an image:
    - add it to the src folder
    - add a carrousel selector
    - add background img in style.css (search for .img-selector:nth-child())
    - add ref in "slide" array in js file
-->
        <div id="carrousel">
          <!-- Conteneur de l'image -->
          <div id="slider"></div>
          <!-- Flèches précédent & suivant -->
          <div id="precedent" onclick="ep_changeSlide(-1)">&#10094;</div>
          <div id="suivant" onclick="ep_changeSlide(1)">&#10095;</div>
        </div>

        <!-- Icones défilantes -->
        <div id="carrousel-selector">
          <div id="carrousel-selector__container">
            <div class="img-selector img-focus" onclick="ep_moveSlide(0)"><div class="darkFilterImg" style="opacity: 0;"></div></div>
            <div class="img-selector" onclick="ep_moveSlide(1)"><div class="darkFilterImg"></div></div>
            <div class="img-selector" onclick="ep_moveSlide(2)"><div class="darkFilterImg"></div></div>
            <div class="img-selector" onclick="ep_moveSlide(3)"><div class="darkFilterImg"></div></div>
            <div class="img-selector" onclick="ep_moveSlide(4)"><div class="darkFilterImg"></div></div>
          </div>
        </div>

        <!-- Image Modal -->

        <div id="myModal">
          <div id="modal-container" onClick="ep_closeModal()">
            <span id="close" onClick="ep_closeModal()">&times;</span>
            <img src="" class="modal-content" id="img01" />
          </div>
        </div>

      </div>
    </main>

    <?php include("footer.php"); ?>
  </div>
<script src="./caroussel.js"></script>
</body>
</html>