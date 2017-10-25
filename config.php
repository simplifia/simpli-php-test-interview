<?php

// define("INPUT_DATA") = serialize(array(1=>1,3=>4,10=>12));
	// this line give "Fatal error: Can't use function return value in write context ..."

class config{
    private static $data = array(
        1=>1,
        3=>4,
        10=>12
    );
    public static function input_data(){
        return self::$data;
    }
}