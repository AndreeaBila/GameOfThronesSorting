<?php
    //class needed to model the user object from the database
    class User{
        //class variables
        public $userID;
        public $name;
        public $password;
        public $salt;
        public $email;
        public $title;
        public $dob;
        public $houseID;

        //constructor
        function __construct($userID, $name, $password, $salt, $email, $title, $dob, $houseID){
            $this->userID = $userID;
            $this->name = $name;
            $this->password = $password;
            $this->salt = $salt;
            $this->email = $email;
            $this->title = $title;
            $this->dob = $dob;
            $this->houseID = $houseID;
        }
    }
?>