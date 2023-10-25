<?php

namespace src\Classes;

class DateHelper {
    /**
     * @return false|string
     */
    public static function getCurrentDate() {
        return date("Y-m-d");
    }

    /**
     * @param $date
     * @param string $format
     * @return false|string
     */
    public static function formatDate($date, string $format = "Y-m-d") {
        return date($format, strtotime($date));
    }
}