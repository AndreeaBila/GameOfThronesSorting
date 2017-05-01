<?php
    //class needed to model the house object from the database
    class House{
        //class varaibles
        public $houseID;
        public $name;
        public $motto;
        public $size;
        public $title1;
        public $content1;
        public $title2;
        public $content2;

        //constructor
        function __construct($houseID, $name, $motto, $size, $title1, $content1, $title2, $content2){
            $this->houseID = $houseID;
            $this->name = $name;
            $this->motto = $motto;
            $this->size = $size;
            $this->title1 = $title1;
            $this->content1 = $content1;
            $this->title2 = $title2;
            $this->content2 = $content2;
        }
    }
?>