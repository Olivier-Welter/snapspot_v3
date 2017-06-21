<?php $this->titre = "AdminAppli";

	require_once'Modele/Parametres.php'; 

	$parametres = new Parametres();
	$slogan = $parametres->getSlogan();
	$evenement = $parametres->getEvenement();
	?>

<!--<div class="col-lg-12 col-md-offset-2 col-md-8 col-xs-12">-->
<form class="row" action="" method="post">


    
    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-xs-12"><br>
<label for="evenement">Nom de l'événement:</label>
<div class="input-group">
<input id="evenement" class="form-control" type="text" name="evenement" value="<?php echo $evenement; ?>" />
<div class="input-group-btn">
<input class="btn btn-primary" type="submit" name="changeEvent" value="Valider"/></div></div></div>

<div class="col-lg-8 col-md-offset-2 col-md-8 col-xs-12"><br>
<label for="slogan">Slogan:</label>
<div class="input-group">
<input id="slogan" class="form-control" type="text" name="slogan" value="<?php echo $slogan; ?>" />
 <div class="input-group-btn">
 <input class="btn btn-primary" type="submit" name="changeSlogan" value="Valider"/></div></div></div>

 
<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-xs-12"><br>
<label for="password">Mot de Passe:</label>
<div class="input-group">
<input class="form-control" type="password" name="mdp" value = "" placeholder="*******" /><br>
<div class="input-group-btn">
<input class="btn btn-primary" type="submit" name="changePassword" value="Valider"/></div></div></div>
</form>


<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-xs-12"><br>
<label for="change_fond">Changer Fond d\'Ecran</label>
<div class="input-group">
<form class="row" method="post" id="change_fond" action="" enctype="multipart/form-data">
<input style="cursor:pointer" type="file" id="image_fond" name="image_fond"   /></div></div>
</form>


<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-xs-12"><br>  
<label for>Utilisation du disque</label>
<div class="row">
<div class="col-xs-12">
<div class="progress text-center" style="text-indent: -89%;">
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: 89%;"></div>
<span>89% / 14.0 Go disponible</span></div></div></div></div> 


<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-8 col-xs-12"><br>
<label for>Nettoyage du disque</label>

<div class="input-group-btn">
<input class="btn btn-primary confirm-delete disabled" type="submit" name="delete_backup_submit" value="Vider les sauvegardes (0)"/>
<input class="btn btn-primary confirm-delete disabled" type="submit" name="delete_photos_submit" value="Vider les images (0)"/>
</div></div></div>