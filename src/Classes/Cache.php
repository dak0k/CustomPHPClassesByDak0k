<?php
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
---        Github link "https://github.com/dak0k/CustomPHPClassesByDak0k"    ---
--------------------------------------------------------------------------------
*/
namespace src\Classes;

class Cache {
    private $cacheDir;

    /**
     * @param  mixed  $cacheDir
     * @return void
     */
    public function __construct($cacheDir) {
        $this->cacheDir = $cacheDir;
    }

    /**
     * @param mixed $key
     * @return mixed
     */
    public function get($key) {
        $cacheFile = $this->cacheDir . '/' . $key;
        if (file_exists($cacheFile) && time() - filemtime($cacheFile) < 3600) {
            return unserialize(file_get_contents($cacheFile));
        }
        return false;
    }

    /**
     * @param mixed $value
     * @param mixed $value
     * @return void
     */
    public function set($key, $value) {
        $cacheFile = $this->cacheDir . '/' . $key;
        file_put_contents($cacheFile, serialize($value));
    }
}
