<?php

function creerEvenements()
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
function deleteEvenements()
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
function updateEvenements()
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



