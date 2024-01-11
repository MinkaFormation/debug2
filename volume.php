<?php
require_once 'vendor/autoload.php';

function convertirM3EnLitre($volume) {

    $en_ms = $volume * 1000;
  return $en_ms
}

$valeur = 100;
$valeur_kc = convertirKmhEnMs($valeur);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'm3 ', 'val2' => $valeur_kc, 'unite2' => ' litres']);

?>