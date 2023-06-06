<?php 
session_start();

include '../script/connexionBDD.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/general.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/carte_camions.css" />
  <style></style>
  <link rel="stylesheet" href="https://basemaps.arcgis.com/arcgis/rest/services/World_Basemap_v2/VectorTileServer" />
  <link rel="stylesheet" href="https://js.arcgis.com/4.26/esri/themes/light/main.css" />
  <script src="https://js.arcgis.com/4.26/"></script>
  <script src="../js/map.js"></script>
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
  <main class="main_carte_camion">
    <h1 class="heading_primary">Carte des camions</h1>
    <div id="viewDiv"></div>
    <h1 class="heading_primary">Tableau des camions</h1>
    <div class="btn_table">
      <form action="carte_camions.php" method="post">
        <input name="afficher_camion" type="submit" value="Afficher les camions" class="btn" />
      </form>
      <a href="#" class="btn add_link">Ajouter un camion</a>
    </div>
    <?php
      $connexion = "";
      $connexion = connexionbdd();
      if ($connexion != NULL) {
        if (isset($_POST['afficher_camion']) != NULL) {
          $requetesql = "SELECT * FROM ListeCamion"; 
            $result = mysqli_query($connexion,$requetesql);
              if($result == false) {  
                echo "Requete SQL Echoué";
              } else {
                echo "<table class='tab_camion'>
                <thead>
                  <tr>
                    <th>Camion</th>
                    <th colspan='2'>Position</th>
                  </tr>
                </thead>
                <tbody>";
  
                  while ($ligne = mysqli_fetch_array($result)) {
                    echo "<tr>
                      <td>",$ligne['Camion'],"</td>
                      <td>",$ligne['Position_x'],"</td>
                      <td>",$ligne['Position_y'],"</td>
                    </tr>";
                  }   
                echo '</tbody>
                  </table>';
                }
              }
            }
    ?>
  </main>
  <footer class="footer_page">
    <div class="footer_link_logo">
      <img src="../img/logo/logo_speed.png" alt="Logo Speed" class="logo_speed logo_footer" />
      <nav class="nav_bar">
        <a href="tab_trame.html" class="nav_link nav_footer">Liste des trames</a>
        <a href="carte_camions.html" class="nav_link nav_footer">Carte des camions</a>
        <a href="contact.html" class="nav_link nav_footer">Contact</a>
      </nav>
    </div>
    <span class="copyright">Copyright © 2023 Lucas Madranges</span>
  </footer>
</body>

</html>