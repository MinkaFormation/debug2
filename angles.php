<?php
require_once 'vendor/autoload.php';

function convertirDegresEnRadian($valeur) {

    $en_ms = $valeur * (3.14 / 180);
  return $en_ms
}

$valeur = 1;
$valeur_kc = convertirDegresEnRadian($valeur);


$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'degrés', 'val2' => $valeur_kc, 'unite2' => 'radian  ']);
?>