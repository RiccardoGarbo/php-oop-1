<?php
class Movie {

    public $title;
    public $type;
    public $duration;
    public $year;
    public $actor; 
    public $director;

  public function __construct( $title ,$type,$duration,$year, $actor, Director $director) {
    $this->title = $title;
    $this->type = $type;
    $this->duration= $duration;
    $this->year = $year;
    $this->actor = $actor;
    $this->director = $director;
  }

  public function infoMovie(){
     echo "Titolo : {$this->title} <br> Genere : {$this->type} <br> Durata : {$this->duration} minuti <br> Anno: {$this->year}<br> Attore protagonista : {$this->actor}<br> Regista: {$this->director->name} <hr>";
  }

}

class Director {

    public $name;

    public function __construct($name){
    $this->name = $name;
}

}


$director1 = new Director('Martin Scorsese');
$director2 = new Director('Francis Lawrence');

$movie1 = new Movie('Io sono leggenda', 'Azione/Shi-fi', 101 , 2007, 'Will Smith', $director1);
$movie1->infoMovie();

$movie2 = new Movie('The Wolf of Wall Street ', 'Giallo/Commedia', 180 , 2013, 'Leonado DiCaprio', $director2);
$movie2->infoMovie();






