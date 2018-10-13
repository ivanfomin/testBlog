<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__ . '/autoload.php';



$data = new \App\Data\Post();

$posts = $data->findAll();

//var_dump($posts);

include __DIR__ . '/App/index.view.php';

