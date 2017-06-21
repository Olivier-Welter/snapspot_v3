<?php 

require_once 'Vue/VueAdmin.php';
require_once 'Modele/MediaManager.php';
require_once 'Modele/media.php';

class ControleurAdminData {

  // Affiche la liste de tous les billets du blog
  public function admindata() {
   
    $vue = new VueAdmin("AdminData");
    $vue->generer(array());

}
        }
