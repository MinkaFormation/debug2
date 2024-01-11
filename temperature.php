<?php
require_once 'vendor/autoload.php';

function fahrenheitEnCelsius($fahrenheit) {
  return ($fahrenheit - 32) * 5/9
}

$valeur = 100;
$valeur_kc = fahrenheitEnCelsius($fahrenheit);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => '°F', 'val2' => $valeur_kc, 'unite2' => '°C']);

?>