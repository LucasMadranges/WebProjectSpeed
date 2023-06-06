<?php 
session_start();
error_reporting(0);

include '../script/connexionBDD.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/general.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/add_camion.css">
  <title>Speed Web Page</title>
</head>

<body>
  <header class="header_page">
    <img src="../img/logo/logo_speed.png" alt="Logo SPEED" class="logo_speed" />
    <nav class="nav_bar">
      <a href="tab_trame.php" class="nav_link">Liste des trames</a>
      <a href="carte_camions.php" class="nav_link">Carte des camions</a>
      <a href="contact.php" class="nav_link btn btn_contact">Contact</a>
    </nav>
  </header>
  <main class="main_add_camion">
    <h1 class="heading_primary">Ajouter un camion</h1>
    <div class="btn_table">
      <a href="carte_camions.php" class="btn retour_link"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
        Retour à la page principale</a>
      <form class="form_add_camion" action="add_camion.php" method="post">
        <div class="input_text">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="form_icon">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
          </svg>


          <input placeholder="Camion" type="text" name="camion" class="input_text_zone" required>
        </div>
        <div class="input_text">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="form_icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
          </svg>

          <input placeholder="Position x" type="text" name="posx" class="input_text_zone" required>
        </div>
        <div class="input_text">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="form_icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
          </svg>

          <input placeholder="Position y" type="text" name="posy" class="input_text_zone" required>
        </div>
        <input name="submit" type="submit" value="Ajouter le camion" class="btn" />
        <?php
          $camion = $_POST['camion'];
          $positionx = $_POST['posx'];
          $positiony = $_POST['posy'];
          $connexion = "";
          $connexion = connexionbdd();
          if ($connexion != NULL) {
            if (isset($_POST['submit']) != NULL) {
              $requetesql = "INSERT INTO `ListeCamion` (`cle`, `Camion`, `Position_x`, `Position_y`) VALUES (NULL, '".$camion."', '".$positionx."', '".$positiony."');
              "; 
              $result = mysqli_query($connexion,$requetesql);
              if($result == false) {  
                echo "<p class='form_text'>Requete SQL Echoué.</p>";
              } else {
                echo "<p class='form_text'>Ajout du camion dans la BDD réussi.</p>";
                }
              }
          }
        ?>
      </form>
  </main>
  <footer class="footer_page">
    <div class="footer_link_logo">
      <img src="../img/logo/logo_speed.png" alt="Logo Speed" class="logo_speed logo_footer" />
      <nav class="nav_bar">
        <a href="tab_trame.php" class="nav_link nav_footer">Liste des trames</a>
        <a href="carte_camions.php" class="nav_link nav_footer">Carte des camions</a>
        <a href="contact.php" class="nav_link nav_footer">Contact</a>
      </nav>
    </div>
    <span class="copyright">Copyright © 2023 Lucas Madranges</span>
  </footer>
</body>

</html>