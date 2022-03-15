<?php



require_once('./Controller/DatabaseLinker.php');
  ?>
<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>

    <div class="sucess">
    <h1>Bienvenue </h1>
    
    <p>C'est votre tableau de bord.</p>
    <p><?php 
    $pdo = DataBaseLinker::getDataBaseLinker();
    $pdo ->testLogin();
    
    
    ?>
    
    <?php  /*$instance = new UtilisateursController();
      $appelNormal = $instance->afficherUtilisateurs(); ?>
    <?php  echo ("<script>console.log( 'Debug Objects: " . $testtest. "' );</script>")*/?></p>
    </div>
    
  