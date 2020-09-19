<?php


namespace MVC\Database;

use Exception;
use MVC\Core\App;
use mysqli;

/**
 * @return mysqli
 * @throws  Exception
 */
class DB
{
    private static $self;

    public static function Connect()
    {
        if (empty(self::$self)) {
            self::$self= new mysqli(
                App::get('config/app')['Database']['host'],
                App::get('config/app')['Database']['username'],
                App::get('config/app')['Database']['password'],
                App::get('config/app')['Database']['database']
            );
        }
        return self::$self;
    }

}