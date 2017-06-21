<?php
require_once 'Modele/Modele.php';
class Parametres extends Modele
{
// CLASS ATTRIBUTS //    
  private 
          $_id,
          $_slogan,
          $_evenement,
          $_mdp,
          $_type;
    

  
public function __construct()
  {
    $this->hydrate($this->getParametre(1));
  }


  
  // GETTERS - ACCESSEURS //
  
   public function getId()
  {
    return $this->_id;
  }
  
  public function getSlogan()
  {
    return $this->_slogan;
  }
  public function getEvenement()
  {
    return $this->_evenement;
  }
  public function getMdp()
  {
    return $this->_mdp;
  }
  public function getType()
  {
    return $this->_type;
  }
  
  // SETTERS - MUTATEURS //
  
    public function setId($id)
 {
      $this->_id = $id;
  }
  public function setSlogan($slogan)
 {
      $this->_slogan = $slogan;
  }
  public function setEvenement($evenement)
  {
      $this->_evenement = $evenement;
  }
  public function setMdp($mdp)
  {
      $this->_mdp = password_hash($mdp, PASSWORD_DEFAULT);
  }
     public function setType($type)
  {
      $this->_type = $type;
  }

  // FONCTIONS //
  
    public function getParametre($id)  {
    $sql='SELECT * FROM parametres where id=?';
 $parametre = $this->executerRequete($sql, array($id));
  return $parametre->fetch();
  }
  
    public function getParametres() {
         $sql='SELECT * FROM parametres';
        $parametres = $this->executerRequete($sql);
        return $parametres->fetchall();
    }
  
 
  
    public function updateParametres($evenement, $slogan, $mdp, $id) {
        $this->_evenement = $evenement;
        $this->_slogan = $slogan;
        $this->_mdp = $mdp;
    $sql = 'update parametres set evenement= ?, slogan= ?, mdp= ? where id=?';
    $this->executerRequete($sql, array($evenement, $slogan, $mdp, $id));
    echo var_dump($this);
  }
  
  
  
  public function hydrate(array $parametres)
  {
    foreach ($parametres as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }

}