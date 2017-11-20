<?php
class Line
{
	public $item1;
	public $item2;
	public $summ;
	public $parity;
	public function __construct($item1,$item2) {
		$this->item1 = $item1;
		$this->item2 = $item2;
		$this->summ = $item1+$item2;
		$this->parity = (($this->summ%2) == 0) ? 'Paire' : 'Impaire';
	}
}
?>