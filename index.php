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
     echo "Titolo : {$this->title} <br> Genere : {$this->type} <br> Durata : {$this->duration} minuti <br> Anno: {$this->year}<br> Attore protagonista : {$this->actor}";
  }

}










