<?php

namespace App\Data;

class Post extends Model
{
    public static $table = 'posts';
    
    public $id;
    public $title;
    public $content;
    
}