<?php

require_once __DIR__ . '/../autoload.php';


if (isset($_POST['id'])) {
    
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $post = \App\Data\Post::findById($id);
    
    $post->title = $title;
    $post->content = $content;
    $post->save();
    
}

header('Location: /');