<?php
//* On crée la classe Acteur qui herite les attributs de la classe Personne

class Acteur extends Personne{
//*  on crée la liste des films d'un acteur
    protected array $castings;
 
//* on utilise le constructeur pour la liste des fims d'un acteur    
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->castings = [];
    }

//* on créé les méthodes: un accesseur "get" et mutateur "set" pour accéder et modifier les  éléments de la liste des films d'un acteur  
    public function getCastings()
    {
        return $this->castings;
    }


    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }



//* pour ajouter un film dans la liste des films d'un acteur

    public function ajouterCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

//* afficher la liste des films d'un réalisateur

    public function afficherFilmographieActeur(){
        $result =  "<h1>Films de l'acteur/actrice $this</h1>";
        foreach ($this->castings as $casting) {
            $result .= $casting->getFilm()." - ".$casting->getRole()."<br>";
        }
        return $result;
    }

}