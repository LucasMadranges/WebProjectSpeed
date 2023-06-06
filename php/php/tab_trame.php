<?php 
session_start();

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
  <link rel="stylesheet" href="../css/tab-trame.css" />
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
  <main class="main_tab_trame">
    <h1 class="heading_primary">Tableau des trames</h1>
    <div class="btn_table">
      <form action="tab_trame.php" method="post">
        <input name="afficher_trame" type="submit" value="Afficher les trames" class="btn" />
      </form>
    </div>
    <?php
      $connexion = "";
      $connexion = connexionbdd();
      if ($connexion != NULL) {
        if (isset($_POST['afficher_trame']) != NULL) {
          $requetesql = "SELECT * FROM TrameCamion"; 
            $result = mysqli_query($connexion,$requetesql);
              if($result == false) {  
                echo "Requete SQL Echoué";
              } else {
                echo "<table class='tab_trame'>
                <thead>
                  <tr>
                    <th>Début de Trame</th>
                    <th>Numéro du camion</th>
                    <th>Status du camion</th>
                    <th>Destination x</th>
                    <th>Destination y</th>
                    <th>Vitesse max</th>
                    <th>Fin de trame</th>
                  </tr>
                </thead>
                <tbody>";
  
                  while ($ligne = mysqli_fetch_array($result)) {
                    echo "<tr>
                      <td>",$ligne['debut_trame'],"</td>
                      <td>",$ligne['camion'],"</td>
                      <td>",$ligne['status'],"</td>
                      <td>",$ligne['destination_x'],"</td>
                      <td>",$ligne['destination_y'],"</td>
                      <td>",$ligne['vitesse'],"</td>
                      <td>",$ligne['fin_trame'],"</td>
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
        <a href="tab_trame.php" class="nav_link nav_footer">Liste des trames</a>
        <a href="carte_camions.php" class="nav_link nav_footer">Carte des camions</a>
        <a href="contact.php" class="nav_link nav_footer">Contact</a>
      </nav>
    </div>
    <span class="copyright">Copyright © 2023 Lucas Madranges</span>
  </footer>
</body>

</html>