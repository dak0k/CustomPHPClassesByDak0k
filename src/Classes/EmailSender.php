<?php
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
--------------------------------------------------------------------------------
*/
namespace src\Classes;

class EmailSender {

    /**
     *  @param mixed $to
     *
     *  @param mixed $subject
     *
     *  @param mixed $message
     *
     *  @return void
     */
    public static function sendEmail($to, $subject, $message) {
        mail($to, $subject, $message);
    }
}
