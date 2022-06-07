<?php
    class Movie{
        protected $title;
        protected $plot;
        protected $year;
        protected $rating;

        function __construct($_title, $_plot, $_year, $_rating){
            $this->title = $_title;
            $this->plot = $_plot;
            $this->year = $_year;
            $this->rating = $_rating;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getPlot(){
            return $this->plot;
        }
        public function getYear(){
            return $this->year;
        }
        public function getRating(){
            return $this->rating;
        }

        public function setTitle($_title){
            $this->title = $_title;
        }
        public function setPlot($_plot){
            $this->plot = $_plot;
        }
        public function setYear($_year){
            $this->year = $_year;
        }
        public function setRating($_rating){
            $this->rating = $_rating;
        }
    }
?>