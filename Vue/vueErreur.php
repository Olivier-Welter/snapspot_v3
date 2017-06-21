<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$titre = 'SnaSpot'; 
ob_start();
echo '<p>Une erreur est survenue : '.$msgErreur.'</p>';
$contenu = ob_get_clean();
require 'gabarit.php'; 
