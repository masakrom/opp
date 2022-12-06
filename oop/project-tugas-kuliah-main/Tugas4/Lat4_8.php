<?php
class One
{
    private static $var = 0;

    public function __construct()
    {
    }

    public static function disp()
    {
        echo self::$var;
    }

    public function __destruct()
    {
    }
}
    One::disp();

?>    
