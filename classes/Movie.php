<?php
    class Movie {
        private $titolo;
        private $regista;

        public function setTitolo($_titolo){
            if(strlen($_titolo) > 4){
                $this->titolo=$_titolo;
            }
            
        }

        public function getTitolo(){
            return $this->titolo;
        }

        // public function descrizioneFilm(){
        //     echo "{$this->titolo}". " di " ."{$this->regista}";
        // }
    }
?>