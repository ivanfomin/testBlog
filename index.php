<?php


include __DIR__ . '/App/Data/Model.php';

$data = new \App\Data\Model('posts');

$posts = $data->findAll();

include __DIR__ . '/App/index.view.php';

