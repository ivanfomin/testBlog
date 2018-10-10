<?php


include __DIR__ . '/App/Data/Model.php';

$data = new \App\Data\Model();

$posts = $data->findAll('posts');

include __DIR__ . '/App/index.view.php';

