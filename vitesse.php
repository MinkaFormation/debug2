<?php
require_once 'vendor/autoload.php';

function convertirKmhEnMs($vitesse) {

    $en_ms = $vitesse / 3.6;
  return $en_ms
}

$valeur = 100;
$valeur_kc = convertirKmhEnMs($vitesse_kmh);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'km/h', 'val2' => $valeur_kc, 'unite2' => ' m/s']);

?>