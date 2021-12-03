<?php

class Movie {

    // Proprietà
    public $title;
    public $author;
    public $year;
    public $lng;

    // Costruttore
    function __construct($title, $author, $year, $lng){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->lng = $lng;
    }

    // Getters and Setters
    function set_title($title){
        $this->title = $title;
    }
    function get_title(){
        return $this->title;
    }

    function set_author($author){
        $this->author = $author;
    }
    function get_author(){
        return $this->author;
    }

    function set_year($year){
        $this->year = $year;
    }
    function get_year(){
        return $this->year;
    }

    function set_lng($lng){
        $this->lng = $lng;
    }
    function get_lng(){
        return $this->lng;
    }


    // Metodi
    function raggruppa(){
        echo "<strong>Film scelto:</strong> $this->title , $this->author , $this->year , $this->lng <br>" ;
    }

}

?>