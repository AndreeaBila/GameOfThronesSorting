<?php
    //class needed to model the house object from the database
    class House{
        //class varaibles
        public $houseID;
        public $name;
        public $size;

        //constructor
        function __construct($houseID, $name, $size){
            $this->houseID = $houseID;
            $this->name = $name;
            $this->size = $size;
        }
    }
?>