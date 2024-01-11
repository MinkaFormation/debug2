<?php
require_once 'vendor/autoload.php';

function convertirMetreEnPouces($longueur) {

    $en_pouces = $longueur * 39.37;
  return $en_pouces
}

$valeur = 1;
$valeur_kc = convertirMetreEnPouces($valeur);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'metre', 'val2' => $valeur_kc, 'unite2' => 'pouces']);
?>