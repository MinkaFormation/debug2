<?php
require_once 'vendor/autoload.php';

function convertirM2EnCm2($surface) {

    $en_cm2 = $surface * 10000;
  return $en_cm2
}

$valeur = 100;
$valeur_kc = convertirM2EnCm2($surface_en_m2);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'm²', 'val2' => $valeur_kc, 'unite2' => 'cm²']);

?>
