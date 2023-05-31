<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Liste des trames.</title>
</head>

<body>
  <div class="container">
    <h1>POSTE DE CONSULTATION</h1>
    <form method="POST" action="index.php">
      <input type="submit" name="button" value="Afficher la liste des trames">
    </form>
    <?php

      if(isset($_POST['button']) == 0)
      {
          echo "doesn't work";
      }
      else
      {
          $ipserv = "192.168.56.1:3306";
          $user = "root";
          $mdp = "12345";
          $nombdd = "SpeedBDD";
          $requetesql = "SELECT * FROM tramecamion"; 

          //conexion serveur
          $lien = mysqli_connect($ipserv,$user,$mdp,$nombdd);
          if($lien == false)
          {
              echo "Connexion au serveur mySQL a échoué \n<BR>";
          }
          else
          {
              $result = mysqli_query($lien,$requetesql);
              if($result == false)
              {
                  echo "Requete SQL Echoué";
              }
              else
              {
                  echo "                
                  <table>
                  <tr>
                      <th>Clé</th>
                      <th>Trame</th>
                      <th>Commentaires</th>
                  </tr>";

                  while ($ligne = mysqli_fetch_array($result)) {
                      echo "
                      <tr>
                          <td>",$ligne['cle'],"</td>
                          <td>",$ligne['trame'],"</td>
                          <td>",$ligne['commentaire'],"</td>
                      </tr>
                      ";
                  }
                            
                  echo '                    
                          </tbody>
                      </table>';
              }
          }
      }

    ?>
  </div>

  <div>
    <form action="envoiemail.php" method="post">
      <input type="submit" value="Execute">
    </form>
  </div>
</body>

</html>