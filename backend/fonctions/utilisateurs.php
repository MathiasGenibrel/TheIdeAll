<?php
namespace utilisateurs;
use DatabaseLinker;

class utilisateurs {
  function afficherUtilisateurs()
{
 
    $sql = "SELECT utilisateurs.nom_utilisateurs,utilisateurs.prenom_utilisateurs,evenements.lieu_evenement FROM evenements INNER JOIN utilisateurs on evenements.id_utilisateurs=utilisateurs.id_utilisateurs WHERE nom_utilisateurs = 'FILE'
    ";
    $stmt = DatabaseLinker::getConnexion()->prepare($sql);
   // $stmt->bindParam(":code", $code);
    $stmt->execute();
    $obj = $stmt->fetch();
    return $obj;
    var_dump($obj);
}
  function creerUtilisateurs()
  {
  
      $sql = "SELECT utilisateurs.nom_utilisateurs,utilisateurs.prenom_utilisateurs,evenements.lieu_evenement FROM evenements INNER JOIN utilisateurs on evenements.id_utilisateurs=utilisateurs.id_utilisateurs WHERE nom_utilisateurs = 'FILE'
      ";
      $stmt = DatabaseLinker::getConnexion()->prepare($sql);
    // $stmt->bindParam(":code", $code);
      $stmt->execute();
      $test = $stmt->fetch();
      return $test;
      var_dump($test);
  }


  function deleteLangues()
  {
 
    $sql = "SELECT utilisateurs.nom_utilisateurs,utilisateurs.prenom_utilisateurs,evenements.lieu_evenement FROM evenements INNER JOIN utilisateurs on evenements.id_utilisateurs=utilisateurs.id_utilisateurs WHERE nom_utilisateurs = 'FILE'
    ";
    $stmt = DatabaseLinker::getConnexion()->prepare($sql);
   // $stmt->bindParam(":code", $code);
    $stmt->execute();
    $obj = $stmt->fetch();
    return $obj;
    var_dump($obj);
  }
  function updateLangues()
  {
 
    $sql = "SELECT utilisateurs.nom_utilisateurs,utilisateurs.prenom_utilisateurs,evenements.lieu_evenement FROM evenements INNER JOIN utilisateurs on evenements.id_utilisateurs=utilisateurs.id_utilisateurs WHERE nom_utilisateurs = 'FILE'
    ";
    $stmt = DatabaseLinker::getConnexion()->prepare($sql);
   // $stmt->bindParam(":code", $code);
    $stmt->execute();
    $obj = $stmt->fetch();
    return $obj;
    var_dump($obj);
  }



}
