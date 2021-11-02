<?php
class Movie {
    private $title;
    private $director;
    private $distribution;
    private $runningTime;
    private $originalLanguage;

    function __construct($_title, $_director, $_distribution, $_runningTime, $_originalLanguage)
    {
        $this -> title = $_title;
        $this -> director = $_director;
        $this -> distribution = $_distribution;
        $this -> runningTime = $_runningTime;
        $this -> originalLanguage = $_originalLanguage;
    }
    
    public function getTitle()
    {
        return $this -> title;
    }

    public function getDirector()
    {
        return $this -> director;
    }

    public function getDistribution()
    {
        return $this -> distribution;
    }

    public function getRunningTime()
    {
        return $this -> runningTime;
    }

    public function getOriginalLanguage()
    {
        return $this -> originalLanguage;
    }
}

$movies = [
    $arrival = new Movie("Arrival", "Denis Villeneuve", "Paramount Pictures", 116, "en-EN"),

    $her = new Movie("Her", "Spike Jonze", "Warner Bros. Pictures", 126, "en-EN"),
];

foreach ($movies as $movie) {
    echo "
        <h2>Titolo: <em>{$movie -> getTitle()}</em></h2>
        <h3>Regista: {$movie -> getDirector()}</h3>
        <h3>Ditribuito da {$movie -> getDistribution()}</h3>
        <div><strong>durata:</strong> {$movie -> getRunningTime()} minuti, <strong>Lingua originale:</strong> {$movie -> getOriginalLanguage()}</div>
    ";       
};
?>