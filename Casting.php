<?php

//* On créé la classe Casting (tableau associatif "jouer")
class Casting {

    private Film $film;
    private Acteur $acteur;
    private Role $role;

//* Constructeur pour initialiser l'objet en assignant directement les valeurs    
    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->film=$film;
        $this->film->ajouterCasting($this);
        $this->role=$role;
        $this->role->ajouterCasting($this);
        $this->acteur=$acteur;
        $this->acteur->ajouterCasting($this);
     
        
    }

    //*On créé les méthodes : accesseur "get" et mutateur "set" pour récupérer et modifier un attribut d'objet    
    public function getFilm() : Film
    {
        return $this->film;
    }

    public function setFilm(Film $film)
    {
        $this->film = $film;

        return $this;
    }
 
    public function getActeur() : Acteur
    {
        return $this->acteur;
    }

    public function setActeur(Acteur $acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getRole() : Role
    {
        return $this->role;
    }

    public function setRole(Acteur $role)
    {
        $this->role = $role;

        return $this;
    }

}