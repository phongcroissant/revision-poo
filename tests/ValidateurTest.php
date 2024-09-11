<?php
require_once './vendor/autoload.php';
use App\Validateur;
use PHPUnit\Framework\TestCase;

Class ValidateurTest extends TestCase {

        private \App\Validateur $validateur;
    protected function setUp():void
    {
        // Cette méthode est appelé lors de l'exécution de chaque test
        $this->validateur = new \App\Validateur();
    }
    #[\PHPUnit\Framework\Attributes\Test]
    public function VerifieNombre2_NombrePositif_True() {
        $nombre=2;
        $validateur =  $this->validateur;
        $this->assertTrue($validateur->verifieNombre2($nombre));

    }
    #[\PHPUnit\Framework\Attributes\Test]
    public function VerifieNombre2_NombreNegatif_Exception() {
        // Verification de l'exception
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Nombre invalide");
        // Arrange
        $nombre=-2;
        $validateur = $this->validateur;
        // Act
        $validateur->verifieNombre2($nombre);
        // Assert
    }


}