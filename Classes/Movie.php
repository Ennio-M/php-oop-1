<?php
    class Movie{
        protected $title;
        protected $plot;
        protected $date;
        protected $rating;

        function __construct($_title, $_plot, $_date, $_rating){
            $this->title = $_title;
            $this->plot = $_plot;
            $this->date = $_date;
            $this->rating = $_rating;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getPlot(){
            return $this->plot;
        }
        public function getDate(){
            return $this->date;
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
        public function setDate($_date){
            $this->date = $_date;
        }
        public function setRating($_rating){
            $this->rating = $_rating;
        }
    }
?>