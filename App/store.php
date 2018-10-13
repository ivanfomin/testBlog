<?php

require_once __DIR__ . '/../autoload.php';


if (isset($_POST['title']) && isset($_POST['content'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $post = new \App\Data\Post();
    $post->title = $title;
    $post->content = $content;
    $post->save();
}
header('Location: /');