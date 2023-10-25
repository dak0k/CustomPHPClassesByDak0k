<?php
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
---        Github link "https://github.com/dak0k/CustomPHPClassesByDak0k"    ---
--------------------------------------------------------------------------------
*/
namespace src\Classes;

class MathOperations {
    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public static function add($a, $b) {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public static function subtract($a, $b) {
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public static function multiply($a, $b) {
        return $a * $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int|string
     */
    public static function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Деление на ноль невозможно";
        }
    }
}