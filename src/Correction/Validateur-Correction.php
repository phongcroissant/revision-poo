<?php

namespace App;

class Validateur
{
    // Méthode qui vérifie si un nombre est strictement positif
    public function verifieNombre(int $nombre) : bool
    {
        // On teste toujours les cas d'erreurs en premier
        if ($nombre <= 0) {
            return false;
        }
        return true;
    }

    public function verifieNombre2(int $nombre) : bool
    {
        // On teste toujours les cas d'erreurs en premier
        if ($nombre <= 0) {
            // Lancer une Exception
            throw new \Exception("Le nombre est invalide");
        }
        return true;
    }

    public function verifieMotDePasse(string $motDePasse) : bool {
        // Vérification de la longueur minimale
        if (strlen($motDePasse) < 8) {
            throw new \Exception("Le mot de passe doit contenir au moins 8 caractères.");
        }
        // Vérification s'il contient au moins un chiffre
        $contientChiffre = false;
        $contientMajuscule = false;
        $contientMinuscule = false;
        for ($i = 0; $i < strlen($motDePasse); $i++) {
            $char = $motDePasse[$i];
            if ($char >= '0' && $char <= '9') {
                $contientChiffre = true;
            }
            if ($char >= 'A' && $char <= 'Z') {
                $contientMajuscule = true;
            }
            if ($char >= 'a' && $char <= 'z') {
                $contientMinuscule = true;
            }
        }
        if (!$contientChiffre) {
            throw new \Exception("Le mot de passe doit contenir au moins un chiffre.");
        }
        if (!$contientMajuscule) {
            throw new \Exception("Le mot de passe doit contenir au moins une lettre majuscule.");
        }
        if (!$contientMinuscule) {
            throw new \Exception("Le mot de passe doit contenir au moins une lettre minuscule.");
        }
        return true;
    }
}