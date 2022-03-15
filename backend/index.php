<?php

use Controller\utilisateurs;

require('./Controller/UtilisateursController.php')
  ?>
<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>

    <div class="sucess">
    <h1>Bienvenue </h1>
    
    <p>C'est votre tableau de bord.</p>
    <p><?php $testtest = 1 ?>
    
    <?php $instance = new utilisateurs();
      $appelNormal = $instance->afficherUtilisateurs(); ?>
    <?php  echo ("<script>console.log( 'Debug Objects: " . $testtest. "' );</script>");?></p>
    </div>
    
  