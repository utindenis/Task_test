<?php

class Cookie
{
    private static $instance = null;
    private const timeCookie = 31536000;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Cookie();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    public function setCookie($name, $value, $timeCookie = self::timeCookie)
    {
        setcookie($name, $value, time() + $timeCookie, '/');
    }

    public function getCookie($name)
    {
        return $_COOKIE[$name] ?? null;
    }

    public function updateCookie($name, $value, $timeCookie = self::timeCookie)
    {
        static::setCookie($name, $value, $timeCookie);
    }

    public function deleteCookie($name)
    {
        if (isset($_COOKIE[$name])) {
            setcookie($name);
        }
    }
}
