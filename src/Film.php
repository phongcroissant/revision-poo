<?php
namespace App;

require_once './vendor/autoload.php';
require_once 'Acteur.php';


class Film{
    // Atrributs
    private string $titre;
    private string $realisateur;
    private \DateTime $dateSortie;

    // Association avec la class Acteur
    private array $acteur = [];


    // Méthodes

    // Constructeur permettant de construire des instances d'une classe
    // INSTANCIATION

    /**
     * @param string $titre
     * @param string $realisateur
     * @param DateTime $dateSortie
     */
    public function __construct(string $titre, string $realisateur, \DateTime $dateSortie) // <-- = Prototype
    {
        // Implémentation
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;

    }

    // Accesseurs ( Getteurs )
    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getRealisateur(): string
    {
        return $this->realisateur;
    }

    public function getDateSortie(): \DateTime
    {
        return $this->dateSortie;
    }

    public function getAnciennete(){
        $dateJour = new \DateTime();
        $intervalle = $dateJour->diff($this->dateSortie);
        return $intervalle ->y;
    }

    public function addActeur(Acteur $acteur):void
    {
        for ($i = 0; $i < count($this->acteur); $i++) {
            if ($this->acteur[$i] == $acteur) {
                throw new \Exception("Cet acteur existe déjà");
            }
        }
        $this->acteur[] = $acteur;
    }

    /**
     * @return Acteur[]
     */
    public function getActeur(): array
    {
        return $this->acteur;
    }




}