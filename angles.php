<?php
$timestamp_debut = microtime(true);
require_once 'vendor/autoload.php';

function convertirDegresEnRadian($valeur) {
  $en_ms = $valeur * (3.14 / 180);
  return $en_ms;
}

$valeur = 1;
$valeur_kc = convertirDegresEnRadian($valeur);


$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['title' => 'by Simon ' . date('h:i:s'), 'val1' => $valeur, 'unite1' => 'degrés', 'val2' => $valeur_kc, 'unite2' => 'radian  ']);

$timestamp_fin = microtime(true);
$difference_ms = $timestamp_fin - $timestamp_debut;
echo '<p>Build in '.$difference_ms.' seconde(s) by Simon</p>';
?>