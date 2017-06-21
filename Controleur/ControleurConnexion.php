<?php

require_once 'Vue/Vue.php';
require_once 'Modele/Parametres.php';

class ControleurConnexion {
   

    
    
  public function connexion() {
   
    $vue = new Vue("Connexion");
    $vue->generer(array());
    $parametres = new Parametres();
    if(isset($_POST['ok'])) {
      if(password_verify($_POST['mdp'], $parametres->getMdp()))
        {
        $_SESSION['login'] = 'admin'; 
        header('location:adm.php');
        }
        else
        {
         echo '<h2 class="text-center">Mauvais mot de passe !</h2>'; 
        }
    }
    }
}