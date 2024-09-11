<?php
namespace App;
class Acteur
{
    private $nom;
    private $prenom;

    /**
     * @param $nom
     * @param $prenom
     */
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }



}