<?php
require_once '../vendor/autoload.php';

use App\Championnat;
use App\Entite\Equipe;
use App\Personne;

$kc= new Equipe ("KarmineCorp");
$m8= new Equipe ("GentleMate");
$vct = new Championnat ("VCT EMEA");
$kameto = new Personne("Kameto");
$gotaga = new Personne("Gotaga");

$vct->ajouterEquipe($kc);
$vct->ajouterEquipe($m8);
echo "Il y a ".$vct->getNombreEquipe()." équipes au VCT EMEA";
echo PHP_EOL;
$kameto->liker($kc);
$gotaga->liker($m8);
echo $kc->getNom(). " a ". $kc->getNbLike(). " like au VCT EMEA";
dump($vct);