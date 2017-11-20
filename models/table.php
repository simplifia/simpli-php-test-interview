<?php
require 'models/line.php';
class Table
{
	public $lines;
	public function __construct($items) {
		$this->lines = array();
		foreach ($items as $item1 => $item2) {
			array_push($this->lines, new Line($item1,$item2));
		}
	}
}
?>