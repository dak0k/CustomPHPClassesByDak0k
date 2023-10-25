<?php 
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
--------------------------------------------------------------------------------
*/
namespace src\Classes;

class HttpClient {

    /**
     * @param mixed $url
     * @return string|false
     */
    public static function get($url) {
        $response = file_get_contents($url);
        return $response;
    }

    /**
     * @param mixed $url
     * @param mixed $data
     * @return string|false
     */
    public static function post($url, $data) {
        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query($data),
            ],
        ];
        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        return $response;
    }
}
