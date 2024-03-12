<?php
//* On crée la classe Acteur qui herite les attributs de la classe Personne

class Acteur extends Personne{
//*  on crée la liste des films d'un acteur
    protected array $filmsActeur;
 
//* on utilise le constructeur pour la liste des fims d'un acteur    
    public function __construct($prenom, $nom, $sexe, $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->filmsActeur = [];
    }

//* on créé les méthodes: un accesseur "get" et mutateur "set" pour accéder et modifier les  éléments de la liste des films d'un acteur  
    public function getFilmsActeur()
    {
        return $this->filmsActeur;
    }


    public function setFilmsActeur($filmsActeur)
    {
        $this->filmsActeur = $filmsActeur;

        return $this;
    }

//* on créé les fonctions
//* pour affichier l'objet avec les attributs précisés(prénom, nom etc.)
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

//* pour ajouter un film dans la liste des films d'un acteur

    public function ajouterFilmActeur(Film $film) {
        $this->filmsActeur[] = $film;
    }

//* afficher la liste des films d'un réalisateur

    public function afficherFilmographieActeur(){
        $result =  "<h1>Films de $this</h1>";
        foreach ($this->filmsActeur as $film) {
            $result .= $film."<br>";
        }
        return $result;
    }

}