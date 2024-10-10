<?php

    require_once __DIR__ . '/../models/Post.php';

    class PostDAO {

        private $posts = [];

        public function __construct() {
       
            $this->posts[] = new Post(1,"asdsadasdasdasdasdasdasdasdasdasd","1991-01-01","usuario1");
            $this->posts[] = new Post(2,"asdsadasdasdasdasdasdasdasdasdasd","1992-02-02","usuario2");
            $this->posts[] = new Post(3,"asdsadasdasdasdasdasdasdasdasdasd","1993-03-03","usuario3");
            $this->posts[] = new Post(4,"asdsadasdasdasdasdasdasdasdasdasd","1993-04-04","usuario4");
            $this->posts[] = new Post(5,"asdsadasdasdasdasdasdasdasdasdasd","1995-05-05","usuario5");

        }
        public function getAllPosts() {
            return $this->posts;
        }

    }

?>