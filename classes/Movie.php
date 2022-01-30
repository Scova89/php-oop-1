<?php
    class Movie {
        private $titolo;
        private $regista;


        public function __construct($_titolo)
        {
            $this->setTitolo($_titolo);
        }


        public function setTitolo($_titolo){
            if(strlen($_titolo) > 4){
                $this->titolo=$_titolo;
            }
            
        }
        public function getTitolo(){
            return $this->titolo;
        }


        public function setRegista($_regista){
            if(strlen($_regista) > 4){
                $this->regista=$_regista;
            }
            
        }
        public function getRegista(){
            return $this->regista;
        }



        public function descrizioneFilm(){
            return "{$this->titolo}". " di " ."{$this->regista}";
        }
    }
?>