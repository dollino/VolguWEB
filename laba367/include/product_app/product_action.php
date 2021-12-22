<?php
class ProductAction
{
    /**
     * @return array|string
     */
    public static function addProduct()
    {
        if (empty($_POST)) {
            return "";
        }
        if ($_POST["action"] != "add") {
            return "";
        }

        $error = ProductLogic::addProduct($_FILES['picture'], $_POST["name"], (int)$_POST["id_provider"], $_POST["cost"], $_POST["description"]);
        if (!($error)) {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "/www/crud/list.php?success=1");
            die();
        }
        return $error;
    }
    public static function deleteProduct(): string
    {
        if (empty($_POST)) {
            return "";
        }
        if ($_POST["action"] != "delete") {
            return "";
        }
        $error = ProductLogic::deleteElement($_POST["id"]);
        if (!$error) {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "/www/crud/list.php?success=1");
            die();
        }
        return $error;
    }
    public static function getProduct()
    {
        /**
         * Получает товар по id через POST
         */
        if ($_POST["action"] != "get") {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "/www/crud/list.php");
            die();
        }
        $result = ProductLogic::getProduct($_POST["id"]);
        return $result;
    }

    public static function changeProduct()
    {
        if (empty($_POST)) {
            return "";
        }
        if ($_POST["action"] != "change") {
            return "";
        }
        $error = ProductLogic::changeProduct($_POST["id"], $_POST["old_img"], $_POST["name"], $_POST["id_provider"], $_POST["cost"], $_FILES['picture'], $_POST["description"]);
        if (!$error) {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "/www/crud/list.php?success=1");
            die();
        }
        return $error;
    }
}
