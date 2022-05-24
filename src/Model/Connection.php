<?php

namespace APP\Model;

use PDO;

class Connection
{
    private static PDO $connection;

    public static function getConnection()
    {
        if (empty(self::$connection)) {
            self::$connection = new PDO(DNS, USER, PASSWORD);
        }
        return self::$connection;
    }
}
