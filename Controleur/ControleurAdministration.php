<?php

require_once 'Vue/VueAdmin.php';

class ControleurAdministration {

  // Affiche la liste de tous les billets du blog
  public function administration() {
   
    $vue = new VueAdmin("Administration");
    $vue->generer(array());
    
	}
}