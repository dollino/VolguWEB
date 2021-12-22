<?php
require_once(INCLUDE_PATH . "class.db.php");
class ProvidersModel extends DatabaseConnection
{
    private static $tableName = "Providers";
    public static function getAll()
    {
        $query = sprintf("SELECT * FROM `%s`", self::$tableName);
        $result = self::getInstance()->connection()->query($query);
        return $result->fetch_all();
    }
}