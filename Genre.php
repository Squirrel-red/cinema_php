<?php
//* On créé la classe Genre

class Genre {
    private string $nomGenre;
    private array $genreFilms;

//* Constructeur pour initialiser l'objet en assignant directement les valeurs   
    public function __construct(string $nomGenre){
        $this->nomGenre=$nomGenre;
        $this->genreFilms= [];
    }

//*On créé les méthodes : accesseur "get" et mutateur "set" pour récupérer et modifier un attribut d'objet        
    public function getNomGenre() : string
    {
        return $this->nomGenre;
    }


    public function setNomGenre($nomGenre)
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }


//* fonctions d'affichage

    public function __toString(){
        return $this->nomGenre;
    }

// ajouter chaque film dans le tableau assemblant les films d'un genre 

    public function ajouterGenreFilm(Film $film) {
        $this->genreFilms[] = $film;
    }
// afficher ce tableau

    public function afficherFilmographieGenre(){
        $result =  "<h1>Films de $this</h1>";
        foreach ($this->genreFilms as $film) {
            $result .= $film."<br>";
        }
        return $result;
    }


}