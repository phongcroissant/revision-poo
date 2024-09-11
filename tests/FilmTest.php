<?php
require_once './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Film;


Class FilmTest extends TestCase {
    private \App\Film  $film;
    private \App\Acteur  $acteur;

    protected function setUp():void
    {
        $this->film = new \App\Film("Chinois de la caille", "Phongito",\DateTime::createFromFormat("d/m/Y","12/01/2020"));
        $this->acteur = new \App\Acteur("Nguyen","Phong");

    }
    #[\PHPUnit\Framework\Attributes\Test]
    public function AddActeur_ActeurDejaExistant_Exception() {
        // Arrange
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Cet acteur existe déjà");
        // Act
        $this->film->addActeur($this->acteur);
        $this->film->addActeur($this->acteur);
        // Assert
    }
    #[\PHPUnit\Framework\Attributes\Test]

    public function AddActeur_ActeurNonExistant_PasDeMessageDerreur() {
        // Arrange

        // Act
        $this->film->addActeur($this->acteur);
        // Assert
        $this->assertNotEquals($this->acteur, $this->film->getActeur());
    }
    #[\PHPUnit\Framework\Attributes\Test]
    public function getAnciennete_DateCorrect_() {

    }
}