<?php

class Movie {
    public $title;
    public $genre;
    public $plot;
    public $releaseDates;
    public $director;
    public $runningTimes;
    public $budget;

    public function __construct($title, $genre, $plot, $releaseDates, $director, $runningTimes, $budget){
        $this->title = $title;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->releaseDates = $releaseDates;
        $this->director = $director;
        $this->runningTimes = $runningTimes;
        $this->budget = $budget;
    }

    public function printMovie() {
        echo '<h1>';
        echo $this->title;
        echo '</h1>';

        echo '<h2>';
        echo $this->genre;
        echo '</h2>';

        echo '<h3>';
        echo $this->plot;
        echo '</h3>';
    }
}

$newMovie = new Movie('Interstellar', 'Epic science fiction film', 'Interstellar is a 2014 epic science fiction film co-written, directed, and produced by Christopher Nolan. It stars Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn, Matt Damon, and Michael Caine. Set in a dystopian future where humanity is struggling to survive, the film follows a group of astronauts who travel through a wormhole near Saturn in search of a new home for mankind.', 2014, 'Christopher Nolan', 169, '$165 million');

// var_dump($newMovie);

$newMovie->printMovie();
