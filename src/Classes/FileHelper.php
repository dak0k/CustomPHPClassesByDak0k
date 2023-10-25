<?php
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
--------------------------------------------------------------------------------
*/
namespace src\Classes;

class FileHelper {
    /**
     * @param $filename
     * @param $content
     * @return void
     */
    public static function createFile($filename, $content) {
        file_put_contents($filename, $content);
    }

    /**
     * @param $filename
     * @return false|string
     */
    public static function readFile($filename) {
        return file_get_contents($filename);
    }

    /**
     * @param $directory
     * @return array|false
     */
    public static function listFilesInDirectory($directory) {
        return scandir($directory);
    }

    /**
     * @param $filename
     * @return void
     */
    public static function deleteFile($filename) {
        unlink($filename);
    }
}
