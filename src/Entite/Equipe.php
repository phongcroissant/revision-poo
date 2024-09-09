<?php
namespace App\Entite;

class Equipe {
    private string $nom;
    private int $nbLike;

    /**
     * @param string $nom
     * @param int $nbLike
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->nbLike = 0;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getNbLike(): int
    {
        return $this->nbLike;
    }
    public function incrementerNbLike () : void {
        $this->nbLike++;
    }

}