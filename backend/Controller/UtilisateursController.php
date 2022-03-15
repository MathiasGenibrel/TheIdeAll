<?php
namespace Controller;
use DatabaseLinker;

class utilisateurs {

    public function afficherUtilisateurs()
    {
  
      $sql = "SELECT utilisateurs.nom_utilisateurs,utilisateurs.prenom_utilisateurs,evenements.lieu_evenement FROM evenements INNER JOIN utilisateurs on evenements.id_utilisateurs=utilisateurs.id_utilisateurs WHERE nom_utilisateurs = 'FILE'
      ";
      $test = new DatabaseLinker();
      $stmt = $test->getConnexion()->prepare($sql);
     
    // $stmt->bindParam(":code", $code);
      $stmt->execute();
      $obj = $stmt->fetchAll();

      foreach ($obj as $value)
      {
        $nomUtilisateurs=$value[0];
      }
      $testtest=1;
      return $testtest;
      require(".backend/index.php");
      
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
