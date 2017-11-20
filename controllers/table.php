<?php

class Table_Controller
{
	public function superTable()
	{
		require 'models/table.php';
		require 'config.php';
		$table = new Table(unserialize(INPUT_DATA));
		require 'views/table_view.php';
	}
}
?>