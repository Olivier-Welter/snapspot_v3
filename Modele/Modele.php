<?php
abstract class Modele {
    
// Objet PDO d'accès à la BD
private $db; 
    
// Exécute une requête SQL éventuellement paramétrée
protected function executerRequete($sql, $params = null) {
if ($params == null) {
$resultat = $this->getDb()->query($sql);    // exécution directe
}
else {
$resultat = $this->getDb()->prepare($sql);  // requête préparée
$resultat->execute($params);
}
return $resultat;
}

// Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
    protected function getDb() {
if ($this->db == null) {
// Création de la connexion
$this->db = new PDO('sqlite:db/snapspot.sqlite','','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
return $this->db;
}
}







