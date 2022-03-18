<?php



require_once('./Controller/DatabaseLinker.php');

setcookie('user_id', '1234',time()+36000); 
  ?>
<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>

    <div class="sucess">
    <h1>Bienvenue </h1>
    
    <p>C'est votre tableau de bord.</p>
    <?php
    $pdo = DataBaseLinker::getDataBaseLinker();
      $users =$pdo->afficherUtilisateurs();
      $JSONResponse = [];

      foreach ($users as $index => $user)
      {
        $userData = [];
        foreach ($user as $columnName => $value) 
        {
            if (!is_numeric($columnName)) $userData[$columnName] = $value;
        }
        array_push($JSONResponse, $userData);
      }
      print_r(json_encode($JSONResponse));
     ?>

    
    <?php
    $pdo = DataBaseLinker::getDataBaseLinker();
    $users =$pdo->cookieIdentification();
    print_r($users);
   /* $email=$_POST["email"];
    $motDePasse=$_POST["motDePasse"];*/


    /*if (isset($_COOKIE["user_id"]))
    echo 'Le cookie existe ' . $_COOKIE["user_id"] . '!<br />';
    else
    echo 'Le cookie n\'existe pas <br />';/*$instance = new UtilisateursController();
      $appelNormal = $instance->afficherUtilisateurs(); ?>
    <?php  echo ("<script>console.log( 'Debug Objects: " . $testtest. "' );</script>")*/
  ?>
    </div>
  