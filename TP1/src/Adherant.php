<?php
declare(strict_types=1);

final class Adherant
{
    private $nom;
    private $prenom;
    private $dateDeNaissance;

    public function __construct($nom, $prenom, $dateDeNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
    }

}