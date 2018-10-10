<?php

namespace App\Data;

include __DIR__ . '/Db.php';

class Model
{
	protected $table;


	public function findAll($table)
	{
		$this->table = $table;

		$db = Db::getInstance();

		return $db->query('SELECT * FROM ' . $this->table, []);
	}
}