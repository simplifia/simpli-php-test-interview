<?php
require "../config.php"; 
class data{
    public $data;

    function loadData(){
        $datas=constant("INPUT_DATA"); 
        $this->data = $datas;
    }

    function getData()
    {
        return  unserialize($this->data);
    }
}
?>