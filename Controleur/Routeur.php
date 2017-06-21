<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Routeur
 *
 * @author Olivier
 */
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurConnexion.php';
require_once 'Controleur/ControleurAdministration.php';
require_once 'Controleur/ControleurAdminAppli.php';
require_once 'Controleur/ControleurAdminData.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlConnexion;
  private $ctrlAdministration;
  private $ctrlAdminAppli;
  private $ctrlAdminData;


  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlConnexion = new ControleurConnexion();
    $this->ctrlAdministration = new ControleurAdministration();
    $this->ctrlAdminAppli = new ControleurAdminAppli();
    $this->ctrlAdminData = new ControleurAdminData();
  }

  public function accueil(){
      $this->ctrlAccueil->accueil();
  }

  public function connexion() {
    $this->ctrlConnexion->connexion();
  }

  public function administration() {
    $this->ctrlAdministration->administration();
  }

  public function adminappli() {
    $this->ctrlAdminAppli->adminappli();    
  }

  public function admindata() {
    $this->ctrlAdminData->admindata();
  }




  // Affiche une erreur
  private function erreur($msgErreur) {
    $vue = new Vue("Erreur");
    $vue->generer(array('msgErreur' => $msgErreur));
  }
}