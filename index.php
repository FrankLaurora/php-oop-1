<?php
require_once __DIR__ . '/classes/Movie.php';

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