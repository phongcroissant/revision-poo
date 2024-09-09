<?php
require_once '../src/Film.php';
require_once '../src/Acteur.php';


$film1 = new Film("Choinois de la caille", "Phongito",DateTime::createFromFormat("d/m/Y","12/01/2020"));

echo $film1 ->getTitre()."\n";
echo $film1->getAnciennete();

echo PHP_EOL;
$film1->addActeur( new Acteur("Nguyen","Khang"));
$film1->addActeur( new Acteur("Nguyen","Phong"));
echo PHP_EOL;
print_r($film1->getActeur());
echo PHP_EOL;
// Afficher seulement le nom des acteurs
foreach($film1->getActeur() as $acteur){
    echo $acteur->getNom()."\n";
}