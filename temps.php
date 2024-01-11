<?php
require_once 'vendor/autoload.php';

function secondesEnHeuresMinutesSecondes($secondes) {
    $H = floor($seconds / 3600);
    $i = floor(($seconds / 60) % 60);
    $s = $seconds % 60;

    return $H.':'.$i.':'.$s
}

$valeur = 3850;
$valeur_kc = secondesEnHeuresMinutesSecondes($temps_en_seconde);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('resultat.html',['val1' => $valeur, 'unite1' => 'seconde(s)', 'val2' => $valeur_kc, 'unite2' => ' Heure(s) Minute(s) Seconde(s)']);

?>