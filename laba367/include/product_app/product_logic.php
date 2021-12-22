<?php
class ProductLogic
{
    public static $dirName = STATIC_PATH . "img/product/";
    public static function getList(): array
    {
        /**
         *
         */
        $products = ProductModel::read();
        return $products;
    }
    public static function getPicture()
    {
        /**
         * Так как по заданию не говориться что брать картинки из бд, то данный метод не нужен
         * но на всякий реализацию оставим
         */
    }
    public static function loadPicrure($file)
    {
        /**
         * @param file -- Массив $_FILES['userfile'] из формы
         * Метод загрузки картинки на сервер
         * возвращает имя файла
         * @return string|null
         */
        $typeImg = array('image/jpeg', 'image/png', 'image/jpg', "image/webp");
        if (!in_array($file["type"], $typeImg)) {
            return null;
        }
        $fileName = date('YmdHis') . rand(100, 1000) . ".png";
        move_uploaded_file($file['tmp_name'], self::$dirName . $fileName);
        return $fileName;
    }
    public static function deletePicture($pictureName): string
    {
        if (strpos($pictureName, "..")) { // для того чтобы избежать перескока по директориям
            return "Некорректное название";
        }
        if (unlink(self::$dirName . $pictureName)) {
            return "";
        }
        return "Ошибка при удалении файла";
    }

    public static function deleteElement($id): string
    {
        $product = ProductModel::getById($id); // берем элемент чтобы удалить картинку
        if (empty($product)) {
            return "Элемент не найден";
        }
        $error = self::deletePicture($product[1]);
        ProductModel::delete($id); // стоит впереди чтобы даже если картинки каким то образом не было, запись все равно удалилась
        if ($error) {
            return $error;
        }
        return "";
    }

    public static function addProduct(
        $img,
        string $name,
        int $id_provider,
        int $cost,
        string $description = ""
    ) {
        $error = array();
        if (empty($name)) {
            $error[] = 'Название отсутствует!';
        }
        if (empty($id_provider)) {
            $error[] = 'Посавщик отсутствует!';
        }
        if (empty($cost)) {
            $error[] = 'цена отсутствует!';
        }
        if (empty($name)) {
            $error[] = 'Название отсутствует!';
        }
        $fileName = static::loadPicrure($img);
        if (empty($fileName)) {
            $error[] = "Проблемы с загрузкой файла";
        }
        if (empty($error)) {
            ProductModel::create($fileName, $name, $id_provider, $cost, $description);
            return null;
        }
        return $error;
    }
    public static function getProduct($id)
    {
        $product = ProductModel::getById($id);
        if (empty($product)) {
            return "Элемент не найден";
        }
        return $product;
    }

    public static function changeProduct(
        int $id,
        string $old_img,
        string $name,
        int $id_provider,
        int $cost,
        $img = "",
        string $description = ""
    ) {
        $error = array();
        if (empty($name)) {
            $error[] = 'Название отсутствует!';
        }
        if (empty($id_provider)) {
            $error[] = 'Посавщик отсутствует!';
        }
        if (empty($cost)) {
            $error[] = 'цена отсутствует!';
        }
        if (empty($name)) {
            $error[] = 'Название отсутствует!';
        }
        if (!empty($error)) {
            return $error;
        }
        if (empty($img["tmp_name"])) {
            ProductModel::update($id, $old_img, $name, $id_provider, $cost, $description);
            return null;
        }
        $error[] = self::deletePicture($old_img);
        $fileName = static::loadPicrure($img);
        ProductModel::update($id, $fileName, $name, $id_provider, $cost, $description);
        return null;
    }
    public static function getProvidersOption()
    {
        return ProvidersModel::getAll();
    }
}
