<?php
use PHPUnit\Framework\TestCase;
class TableTest extends TestCase
{
    public function test_table()
    {
        $table =new Table(array(1=>1 ,  3=>4 , 10=>12));
		$table_length = sizeof($table->lines);
		$this->assertEquals($table_length, 3);
        $this->assertEquals($table->lines[0]->summ, 2);
        $this->assertEquals($table->lines[0]->parity, 'Paire');
        $this->assertEquals($table->lines[1]->summ, 7);
        $this->assertEquals($table->lines[1]->parity, 'Impaire');
        $this->assertEquals($table->lines[2]->summ, 22);
        $this->assertEquals($table->lines[2]->parity, 'Paire');
    }
}
?>
