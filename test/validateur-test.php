<?php

use App\Validateur;

require_once '../vendor/autoload.php';

$validateur= new Validateur();
$nombre=-2;
if ($validateur->verifieNombre($nombre)){
    echo "Le nombre $nombre est valide";
}else{
    echo "Le nombre $nombre n'est pas valide";
}
echo PHP_EOL;
// Avec gestion des Exceptions
try {
    // Code surveillé (susceptible de lancer une exception)
    $validateur->verifieNombre2($nombre);
    echo "Le nombre $nombre est valide";
} catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}
echo PHP_EOL;
$password="azeRtyuiop";
// Avec gestion des Exceptions
try {
    // Code surveillé (susceptible de lancer une exception)
    $validateur->verifieMdp($password);
    echo "Le mot de passe est valide";
} catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}
echo PHP_EOL;
try {
    // Code surveillé (susceptible de lancer une exception)
    $validateur->verifieMdp2($password);
    echo "Le mot de passe est valide";
} catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}