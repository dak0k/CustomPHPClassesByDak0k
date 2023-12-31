<?php
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
---        Github link "https://github.com/dak0k/CustomPHPClassesByDak0k"    ---
--------------------------------------------------------------------------------
*/
namespace src\Classes;

class StringHelper {
    /**
     * @param $str
     * @return string
     */
    public static function reverse($str): string
    {
        return strrev($str);
    }

    /**
     * @param $str
     * @return string
     */
    public static function toUpperCase($str): string
    {
        return strtoupper($str);
    }

    /**
     * @param $str
     * @return string
     */
    public static function toLowerCase($str): string
    {
        return strtolower($str);
    }
}