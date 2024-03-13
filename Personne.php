<?php
//* On créé un fichier par une classe
//* Classe Personne avec les attributs suivants
class Personne {
    protected string $prenom;
    protected string $nom;
    protected string $sexe;
    protected DateTime $dateNaissance;
    
//* Constructeur pour initialiser l'objet en assignant directement les valeurs
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->sexe=$sexe;
        $this->dateNaissance= new DateTime($dateNaissance);
    }
    //*On créé les méthodes : accesseur "get" et mutateur "set" pour récupérer et modifier un attribut d'objet
    public function getPrenom() : string 
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getNom() : string
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }




    public function getSexe() : string
    {
        return $this->sexe;
    }


    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }


    public function getDateNaissance() : dateTimee
    {
        return $this->dateNaissance;
    }

 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    //* on créé les fonctions
    //* pour affichier l'objet avec les attributs précisés(prénom, nom etc.)
    public function __toString(){
        return $this->prenom." ".$this->nom;
    } 

}

