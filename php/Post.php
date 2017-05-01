<?php
    //class needed to model the post object from the database
    class Post{
        //class variables
        public $postID;
        public $title;
        public $content;
        public $dateCreated;
        public $userID;
        public $houseID;

        //constructor
        function __construct($postID, $title, $content, $dateCreated, $userID, $houseID){
            $this->postID = $postID;
            $this->title = $title;
            $this->content = $content;
            $this->dateCreated = $dateCreated;
            $this->userID = $userID;
            $this->houseID = $houseID;
        }
    }
?>