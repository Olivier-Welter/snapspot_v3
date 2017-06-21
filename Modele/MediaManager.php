<?php
require_once 'Modele/Modele.php';
class MediaManager extends Modele
{
 
  
  public function add(Media $media)
  {
    $q = $this->getDb()->prepare('INSERT INTO media(oldName, fileSize, pseudo, commentaire, evenement) VALUES(:oldName, :fileSize, :pseudo, :commentaire, :evenement)');
    
    $q->bindValue(':oldName', $media->oldName());
    $q->bindValue(':fileSize', $media->fileSize());
    $q->bindValue(':pseudo', $media->pseudo());
    $q->bindValue(':commentaire', $media->commentaire());
    $q->bindValue(':evenement', $media->evenement());
    $q->execute();
    
    $media = $this->get(intval($this->getDb()->lastInsertId()));
    $media->updateNewName($media);
    $this->update($media);
    $media->saveFile();
  }

  public function count()
  {
    return $this->getDb()->query('SELECT COUNT(*) FROM media')->fetchColumn();
  }
  
  public function delete(Media $media)
  {
    $this->getDb()->exec('DELETE FROM media WHERE id = '.$media->mediaId());
  }
  public function get($info)
  {
    if (is_int($info))
    {
      $q = $this->getDb()->query('SELECT mediaId, oldName, newName, fileSize, timestamp,pseudo, commentaire, evenement FROM media WHERE mediaId = '.$info);
      $dataMedia = $q->fetch(PDO::FETCH_ASSOC);
      return new Media($dataMedia);
    }
    else
    {
        echo 'erreur de type d\'informations';
    }
  }
  
 
  
  
   public function getList() {
    $sql = 'select * from media';
    $medias = $this->executerRequete($sql);
    return $medias;
  }
  
  
  
  
  
  public function update(Media $media)

  {
$q = $this->getDb()->prepare('UPDATE media SET newName = :newName, pseudo = :pseudo, commentaire = :commentaire WHERE mediaId = :mediaId');
$q->bindValue(':mediaId', $media->mediaId(), PDO::PARAM_INT);
$q->bindValue(':newName', $media->newName(), PDO::PARAM_STR);
$q->bindValue(':pseudo', $media->pseudo(), PDO::PARAM_STR);
$q->bindValue(':commentaire', $media->commentaire(), PDO::PARAM_STR);
$q->execute();
 }
  

}