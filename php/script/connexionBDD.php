<?php

function connexionbdd() {
  $ipserv = "172.25.0.1:3306"; #ADRESSE IP WIFI
  $user = "root";
  $mdp = "12345";
  $nombdd = "SpeedBDD";

  //conexion serveur
  $lien = mysqli_connect($ipserv,$user,$mdp,$nombdd);
  if($lien == false)
  {
    echo "Connexion au serveur mySQL a échoué";
  }
  else
  {
    return $lien;
  }
}

?>