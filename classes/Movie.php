<?php
    class Movie {
        public $titolo;
        public $regista;

        public function descrizioneFilm(){
            echo "{$this->titolo}". " di " ."{$this->regista}";
        }
    }
?>