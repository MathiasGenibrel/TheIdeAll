<?php

function creerUtilisateurs()
{
 
};

function saveUrl($query, $idUser)
{
  $saveOriginalURL = $query->prepare("INSERT INTO tp_mathias_khadim_gaspard.url_origine (url_origine, id_utilisateur) 
  VALUES ('$_POST[url]', $idUser)");

  $saveShortenURL = $query->prepare("INSERT INTO tp_mathias_khadim_gaspard.url_raccourcie (id_url_origine, url_raccourcie) VALUES (LAST_INSERT_ID(), '" . createUrl() .  "')");

  $saveOriginalURL->execute();
  $saveShortenURL->execute();
};
