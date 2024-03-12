<?php

//*Création de la classe Role
class Role {
    private string $nomPersonnage;
    private array $castings;

//* Constructeur pour initialiser l'objet en assignant directement les valeurs
    public function __construct(string $nomPersonnage){
        $this->nomPersonnage=$nomPersonnage;
        $this->castings= [];
    }

    
//* on créé les méthodes : un accesseur "get" et un mutateur "set" pour accéder et modifier les éléments
    public function getNomPersonnage() : string
    {
        return $this->nomPersonnage;
    }


    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }


    public function getCastings() : array
    {
        return $this->castings;
    }


    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }


    //* On créé les fonctions:
//* pour affichier l'objet avec les attributs précisés(prénom, nom etc.)
    public function __toString(){
        return $this->nomPersonnage;
    }

    public function ajouterRoleCasting(Acteur $acteur){
        $this->castings[]=$acteur;
    }
    //* ajouter chaque objet acteur dans le tableau Casting contenant  acteurs, roles, films

    public function afficherRoleActeur(){
        $result =  "<h1>Acteurs ayant interprétés $this</h1>";
        foreach ($this->castings as $acteur) {
            $result .= $acteur."<br>";
        }
       //* afficher les acteurs qui ont interprete ce role     
        return $result;
    }
}