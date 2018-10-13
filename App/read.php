<?php


require_once __DIR__ . '/../autoload.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = \App\Data\Post::findById($id);
    include __DIR__ . '/readPost.php';
}
