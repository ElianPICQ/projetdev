<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8" />
    <title>Site E-learning</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="stylesheet" type="text/css" href="./style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    </style>

</head>

<body>
    <div id="page-container">

        <?php include("header.php"); ?>



        <main id="groupe_page">

<div class="global">
<section class="layout">
  <div><img src="./src/groupe/personne1.jpg" alt="Personne 1" class="group_image"></div>
  <div class="group-infos">
    <div>Mathieu WILKOSZ</div>
    <div><a href="./src/groupe/cv1.pdf" target="_blank">CV ICI</a></div>
  </div>
</section>
<section class="layout">
  <div><img src="./src/groupe/personne2.jpg" alt="Personne 2" class="group_image"></div>
  <div class="group-infos">
    <div>Elian PICQ</div>
    <div><a href="./src/groupe/cv2.pdf" target="_blank">CV ICI</a></div>
  </div>
</section>
<section class="layout">
  <div><img src="./src/groupe/personne3.jpg" alt="Personne 3" class="group_image"></div>
  <div class="group-infos">
    <div>Baptiste LUCBERT</div>
    <div><a href="./src/groupe/cv3.pdf" target="_blank">CV ICI</a></div>
  </div>
</section>
</div>

        </main>

        <?php include("footer.php"); ?>
    </div>
</body>

</html>