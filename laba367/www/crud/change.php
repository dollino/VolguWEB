<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(PRODUCT_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');
if (!UserLogic::current()) {
    header("Location: http://" . $_SERVER['SERVER_NAME'] . "");
}
ProductAction::changeProduct();
$options = ProductLogic::getProvidersOption();
$product = ProductAction::getProduct();
echo getHeader("ОНЛАЙНСКЛАД |Измение Товара", UserLogic::current());
?>
<h2 class="text-center pt-3 ">Изменить товар</h2>
<form class=" needs-validation" novalidate action="change.php" method="post"  enctype="multipart/form-data">
    <div class="container pb-5">
        <input class="form-control" type="text" name="action" value="change" hidden>
        <input class="form-control" type="text" name="id" value="<?php echo $product[0];?>" hidden>
        <input class="form-control" type="text" name="old_img" value="<?php echo $product[1];?>" hidden>
        <div class="form-group">
            <small>Изображение</small>
            <input class="form-control" type="file" name="picture">
        </div>
        <div class="form-group">
            <small>Название</small>
            <input class="form-control" type="text" name="name" value="<?php echo $product[2];?>" required>
        </div>
        <div class="form-group">
            <small>Производитель</small>
            <!-- <input class="form-control" type="text" name="id_provider" value="<?php echo $product[3];?>" required> -->
            <select class="browser-default custom-select" name="id_provider" required>
                <option value="<?php echo $product[3];?>" default>Default</option>
                <?php foreach ($options as $op) : ?>
                    <option value="<?php echo $op[0]; ?>"><?php echo $op[1]; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <small>Цена</small>
            <input class="form-control" type="number" name="cost" value="<?php echo $product[5];?>" required>
        </div>
        <div class="form-group">
            <small>Описание</small>
            <input class="form-control" type="text" name="description" value="<?php echo $product[4];?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary m-2">Отправить</button>
        </div>

    </div>
</form>
<?php echo getFooter();
?>
<script>