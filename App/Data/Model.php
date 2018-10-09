<?php

namespace App\Data;

include __DIR__ . '/Db.php';

class Model
{
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    public function findAll()
    {
        $db = Db::getInstance();
        return $db->query('SELECT * FROM ' . $this->table, []);
    }
}