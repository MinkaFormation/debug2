<?php
require_once 'vendor/autoload.php';

function convertirKiloJoulesEnKiloCalorie($valeur) {

    $en_ms = $valeur / 4.184;
  return $en_ms
}

$valeur = 100;
$valeur_kc = convertirKiloJoulesEnKiloCalorie($valeur);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'Kilojoules', 'val2' => $valeur_kc, 'unite2' => 'KiloCalories']);

?>