<?php

//* On créé une classe Film
class Film{
    private Genre $genre;
    private Realisateur $realisateur;
    private string $titreFilm;
    private int $anneeSortieFilm;
    private int $dureeFilm;
    private string $resume;
    private array $castings;


//* //* Constructeur pour initialiser Genre, Realisateur, Casting et Film en assignant directement les valeurs


    public function __construct(Genre $genre, Realisateur $realisateur, string $titreFilm, int $anneeSortieFilm, int $dureeFilm, string $resume){
        $this->genre=$genre;
        $this->realisateur=$realisateur;
        $this->titreFilm=$titreFilm;
        $this->anneeSortieFilm=$anneeSortieFilm;
        $this->dureeFilm=$dureeFilm;
        $this->resume=$resume;
        $this->genre->ajouterGenreFilm($this);
        $this->realisateur->ajouterFilmRealisateur($this);
        $this->castings = [];

    }
    //*On créé les méthodes : accesseur "get" et mutateur "set" pour récupérer et modifier un attribut d'objet
    
        public function getGenre() : Genre
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function getRealisateur() : Realisateur
    {
        return $this->realisateur;
    }


    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }


    public function getTitreFilm() : string
    {
        return $this->titreFilm;
    }


    public function setTitreFilm($titreFilm)
    {
        $this->titreFilm = $titreFilm;

        return $this;
    }


    public function getAnneeSortieFilm() : int
    {
        return $this->anneeSortieFilm;
    }

 
    public function setAnneeSortieFilm($anneeSortieFilm)
    {
        $this->anneeSortieFilm = $anneeSortieFilm;

        return $this;
    }


    public function getDureeFilm() : int
    {
        return $this->dureeFilm;
    }


    public function setDureeFilm($dureeFilm)
    {
        $this->dureeFilm = $dureeFilm;

        return $this;
    }


    public function getResume() : string
    {
        return $this->resume;
    }


    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }



    //* fonctions pour l'affichage
        
    public function __toString(){
        return $this->titreFilm." (".$this->anneeSortieFilm.")";
    }

    public function ajouterCasting(Casting $casting) {
        $this->castings[] = $casting;
        // array_push($this->castings, $casting);
    }

    public function afficherCastings(){
        $result =  "<h1>Acteurs du film $this</h1>";
        foreach ($this->castings as $casting) {
            $result .= $casting->getActeur()." ".$casting->getRole()."<br>";
        }
        return $result;
    }
    public function afficherInfoFilm(){
        return $this." est un film de genre ".$this->genre." ; durée - ".$this->dureeFilm." minutes ; réalisateur - ".$this->realisateur." ; résumé :<br>".$this->resume;
    }



}