<?php
require_once 'vendor/autoload.php';

function convertirBarEnPsi($valeur) {

    $en_ms = $valeur * 14.5038;
  return $en_ms
}

$valeur = 1;
$valeur_kc = convertirBarEnPsi($valeur);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'Bar', 'val2' => $valeur_kc, 'unite2' => 'Psi']);
?>