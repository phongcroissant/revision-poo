<?php

namespace App;
class Validateur
{
        // Méthode qui vérifie si un nombre est strictement positif
    public function verifieNombre(int $nombre):bool {
        // On teste toujours les cas d'erreur en premier
        if ($nombre<=0) {
            return false;
        } else {
            return true;
        }
    }
    public function verifieNombre2(int $nombre):bool {
        // On teste toujours les cas d'erreur en premier
        if ($nombre<=0) {
            // Lancer une Exception
            throw new \Exception("Nombre invalide");
        } else {
            return true;
        }
    }
    public function verifieMdp(string $password):bool {
        if (strlen($password)<8) {
            throw new \Exception("Votre mot de passe doit contenir 8 caractères");
        }
        if (!preg_match('#^(?=.*[A-Z])#', $password)) {
            throw new \Exception("Votre mot de passe doit contenir au moins une majuscule");
        }
        if (!preg_match('#^(?=.*[a-z])#', $password)) {
            throw new \Exception("Votre mot de passe doit contenir au moins une minuscule");
        }
        if (!preg_match('#^(?=.*[0-9])#', $password)) {
            throw new \Exception("Votre mot de passe doit contenir au moins un chiffre");
        }
        return true;
    }
    public function verifieMdp2(string $password):bool {
        if (strlen($password)<8) {
            throw new \Exception("Votre mot de passe doit contenir 8 caractères");
        }
        $contientChiffre=false;
        $contientMaj=false;
        $contientMin=false;
        for ($i=0; $i<strlen($password); $i++) {
            $char=$password[$i];
            if ($char>='A' && $char<='Z') {
                $contientChiffre=true;
            }
            if ($char>='0' && $char<='9') {
                $contientMaj=true;
            }
            if ($char>='a' && $char<='z') {
                $contientMin=true;
            }
        }
        if(!$contientChiffre){
            throw new \Exception("Votre mot de passe doit contenir au moins un chiffre");
        }
        if(!$contientMaj){
            throw new \Exception("Votre mot de passe doit contenir au moins une majuscule");
        }
        if (!$contientMin){
            throw new \Exception("Votre mot de passe doit contenir au moins une minuscule");
        }
        return true;
    }

}