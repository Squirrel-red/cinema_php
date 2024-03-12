<?php

// Classe Réalisateur herite les propriétés de la classe Personne---------------------

class Realisateur extends Personne{
//*on créé la liste des films d'un réalisateur    
    protected array $filmsRealisateur;

//*on créé le constructeur pour la liste des films d'un réalisateur
    public function __construct($prenom, $nom, $sexe, $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->filmsRealisateur = [];
    }

//* on créé les méthodes : un accesseur "get" et un mutateur "set" pour accéder et modifier les éléments de la liste des films d'un réalisateur
    public function getFilmsRealisateur() : array
    {
        return $this->filmsRealisateur;
    }


    public function setFilmsRealisateur($filmsRealisateur)
    {
        $this->filmsRealisateur = $filmsRealisateur;

        return $this;
    }

    //* On créé les fonctions:
//* pour affichier l'objet avec les attributs précisés(prénom, nom etc.)
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }


//* pour ajouter un film dans la liste des films d'un réalisateur 

    public function ajouterFilmRealisateur(Film $film) {
        $this->filmsRealisateur[] = $film;
    }

//* afficher la liste des films d'un réalisateur

    public function afficherFilmographieRealisateur(){
        $result =  "<h1>Films de $this</h1>";
        foreach ($this->filmsRealisateur as $film) {
            $result .= $film."<br>";
        }
        return $result;
    }



}