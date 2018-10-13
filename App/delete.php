<?php

require_once __DIR__ . '/../autoload.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = \App\Data\Post::findById($id);
    $post->delete();
}
header('Location: /index.php');