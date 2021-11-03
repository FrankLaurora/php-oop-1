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
?>