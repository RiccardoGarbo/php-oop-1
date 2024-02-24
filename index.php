<?php class Movie {

    public $title;
    public $type;
    public $duration;
    public $year;
    public $actor; 

  public function __construct( $title ,$type,$duration,$year, $actor) {
    $this->title = $title;
    $this->type = $type;
    $this->duration= $duration;
    $this->year = $year;
    $this->actor = $actor;
  }

  public function infoMovie(){
     echo "Titolo : {$this->title} <br> Genere : {$this->type} <br> Durata : {$this->duration} minuti <br> Anno: {$this->year}<br> Attore protagonista : {$this->actor} <hr>";
  }

}
$movie1 = new Movie('Io sono leggenda', 'Azione/Shi-fi', 101 , 2007, 'Will Smith');
$movie1->infoMovie();

$movie2 = new Movie('The Wolf of Wall Street ', 'Giallo/Commedia', 180 , 2013, 'Leonado DiCaprio');
$movie2->infoMovie();






