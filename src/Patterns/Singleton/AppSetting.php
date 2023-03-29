<?php

namespace App\Patterns\Singleton;

class AppSetting
{
    private static ?self $instance = null;
    private static array $config;

    private function __construct()
    {
        self::$config = parse_ini_file(__DIR__ . '/config.ini', true);
    }

    private function __clone(){}
    /**
     * @return self
     */
    public static function getInstance(): self
    {
        if (is_null(self::$instance))
            self::$instance = new self();
        return self::$instance;
    }


    public static function getConfig(string $key)
    {
        return self::$config[$key] ?? null;
    }


}