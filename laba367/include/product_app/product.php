<?php
require_once(INCLUDE_PATH . "class.db.php");
class ProductModel extends DatabaseConnection
{
    private static $tableName = "Products";
    private static $colum = array('id', 'img', 'name', 'cost', 'id_provider', 'description');
    /**
     * CRUD - create. Создает запись в таблице
     */
    public static function create(
        string $img,
        string $name,
        int $id_provider,
        int $cost,
        string $description = ""
    ) {

        $query = sprintf(
            "INSERT INTO `%s` (`img`, `name`, `id_provider`, `cost`, `description`) VALUE ('%s', '%s', %d, %d, '%s')",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($img),
            self::getInstance()->connection()->real_escape_string($name),
            self::getInstance()->connection()->real_escape_string($id_provider),
            self::getInstance()->connection()->real_escape_string($cost),
            self::getInstance()->connection()->real_escape_string($description)
        );
        // echo $query . "<br>";
        self::getInstance()->connection()->query($query);
        if (!self::getInstance()->connection()->error) {
            printf("Errormessage: %s\n", self::getInstance()->connection()->error);
        }
    }
    public static function getColumForPage()
    {
        return array('Изображение', 'Название', 'Производитель', 'цена', 'описание');
    }

    public static function read()
    {
        $query = sprintf("SELECT * FROM `%s`", self::$tableName);
        $result = self::getInstance()->connection()->query($query);
        return $result->fetch_all();
    }

    public static function delete(int $id)
    {
        $query = sprintf(
            'DELETE FROM `%s` WHERE `id` = %d',
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($id)
        );
        self::getInstance()->connection()->query($query);
        if (!self::getInstance()->connection()->error) {
            printf("Errormessage: %s\n", self::getInstance()->connection()->error);
        }
    }

    public static function update(
        int $id,
        string $img,
        string $name,
        int $id_provider,
        int $cost,
        string $description = ""
    ) {
        $query = sprintf(
            "UPDATE `%s` SET `img` = '%s', `name` = '%s', `id_provider` = %d, `cost` = %d, `description` = '%s' 
            WHERE `id` = %d",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($img),
            self::getInstance()->connection()->real_escape_string($name),
            self::getInstance()->connection()->real_escape_string($id_provider),
            self::getInstance()->connection()->real_escape_string($cost),
            self::getInstance()->connection()->real_escape_string($description),
            self::getInstance()->connection()->real_escape_string($id)
        );
        echo "<br>" . $query;
        self::getInstance()->connection()->query($query);
        if (!self::getInstance()->connection()->error) {
            printf("Errormessage: %s\n", self::getInstance()->connection()->error);
        }
    }
    public static function getById(int $id)
    {
        $query = sprintf(
            "SELECT * FROM `%s` WHERE `id` = %d",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($id)
        );
        $product = self::getInstance()->connection()->query($query);
        $product = $product->fetch_all();
        if (!($product)) {
            return null;
        }
        return $product[0];
    }
}
