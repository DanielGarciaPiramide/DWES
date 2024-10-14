<?php

include '../Clases/Post.php';

class PostDAO {

    private $posts;

    function __construct() {
        $this->posts = array();
        $this->add(new Post(1, 'asdassssss1', '2021-01-09', 'usuario1'));
        $this->add(new Post(2, 'asdassssss2', '2024-01-02', 'usuario2'));
        $this->add(new Post(3, 'asdassssss3', '2000-01-06', 'usuario3'));
        $this->add(new Post(4, 'asdassssss4', '1990-01-04', 'usuario4'));
        $this->add(new Post(1, 'asdassssss5', '2025-01-09', 'usuario1'));

    }
    function add(Post $post) {
        $this->posts[] = $post;
    }
    public function getAll() {
        return $this->posts;
    }
}
?>
