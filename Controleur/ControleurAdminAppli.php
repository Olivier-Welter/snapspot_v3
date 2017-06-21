<?php

require_once 'Vue/VueAdmin.php';
require_once 'Modele/Parametres.php';

class ControleurAdminAppli {

  // Affiche la liste de tous les billets du blog
  public function adminappli() {
   
    $vue = new VueAdmin("AdminAppli");
    $vue->generer(array());

    
   $parametres = new Parametres();
    
    if (isset($_FILES['image_fond'])){
        //Vérification image uploadée
    if ($_FILES['image_fond']['error'] > 0) {
    $erreur = "Erreur lors du transfert";
    }
        
    // ENREGISTREMENT DE L'IMAGE UPLOADEE
    move_uploaded_file($_FILES["image_fond"]["tmp_name"], 'contenu/css/accueil.jpg');
    //header('location:adm.php');
    }
    //appel traitement changement mot de passe 
    if(isset($_POST['changePassword'])){
    $parametres->updateParametres($_POST['evenement'],$_POST['slogan'],$_POST['mdp'],$parametres->getId());
    
} 
    
    //appel traitement changement parametres
    if(isset($_POST['valider']))
    {
      
    }

	}
}