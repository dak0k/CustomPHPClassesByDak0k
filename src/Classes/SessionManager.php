<?php 
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
--------------------------------------------------------------------------------
*/
namespace src\Classes;

class SessionManager {
    /**
     * @return void
     */
    public function startSession() {
        session_start();
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @return void
     */
    public function setSessionValue($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * @param mixed $key
     * @return mixed
     */
    public function getSessionValue($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    /**
     * @return void
     */
    public function endSession() {
        session_destroy();
    }
}
