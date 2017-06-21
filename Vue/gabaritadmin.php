<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snap - <?= $titre ?></title>   <!-- Titre Onglet Dynamique -->
    <link href="contenu/css/default.css" rel="stylesheet">
    <link href="contenu/bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
      
    <div id="main-container" class="container-fluid">
      <h3 class="btn btn-primary" id="deco"><a class="heading" href="?deconnexion=1">Déconnexion</a></h3>
      <div class ="text-center"><h1><a class="heading"  href="index.php">Snap Snap Spot !</a></h1> 
                  <h3 class="heading text-center"><?= $titre ?></h3>
             <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-12">
                <div class="row">
                  <form action="" method="get">
                    <input class="btn btn-primary" type="submit" name="Appli" value="Appli" style="margin-right:2em">
                  <input class="btn btn-primary" type="submit" name="Data" value="Data">
                  </form>
                    </div>
<?= $contenu ?>
                </div>
        </div>
    </div>
    <footer class="text-center">
        <p>&copy;2017 - David Fournier&nbsp;&amp;&nbsp;Olivier Welter.</p>
    </footer>
  
    <script type="text/javascript" src="contenu/js/jquery.js" ></script>
    <script type="text/javascript" src="contenu/js/snapspotIndex.js" ></script>
    <script type="text/javascript" src="contenu/js/snapspotAdm.js" ></script>
  </body>
</html>