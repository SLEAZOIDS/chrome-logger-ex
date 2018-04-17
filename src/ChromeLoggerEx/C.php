<?php
class C
{
    public static function log($message)
    {
        require_once 'ChromePhp.php';
        return ChromePhp::log($message);
    }
}
