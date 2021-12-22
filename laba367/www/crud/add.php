<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(PRODUCT_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');
if (!UserLogic::current()) {
    header("Location: http://" . $_SERVER['SERVER_NAME'] . "");
}
$errors = ProductAction::addProduct();
$options = ProductLogic::getProvidersOption();
echo getHeader("ОНЛАЙНСКЛАД |Добавление Товара", UserLogic::current());
?>
<h2 class="text-center pt-3 ">Добавить товар</h2>
<form class=" needs-validation" validate action="add.php" method="post" enctype="multipart/form-data">
    <div class="container pb-5">
        <input class="form-control" type="text" name="action" value="add" hidden>
        <div class="form-group">
            <small>Изображение</small>
            <input class="form-control" type="file" name="picture" required>
        </div>
        <div class="form-group">
            <small>Название</small>
            <input class="form-control" type="text" name="name" required>
        </div>
        <div class="form-group">
            <small>Производитель</small>
            <!-- <input class="form-control" type="text" name="id_provider" required> -->
            <select class="browser-default custom-select" name="id_provider" required>
                <?php foreach ($options as $op) : ?>
                    <option value="<?php echo $op[0]; ?>"><?php echo $op[1]; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <small>Цена</small>
            <input class="form-control" type="number" name="cost" required>
        </div>
        <div class="form-group">
            <small>Описание</small>
            <input class="form-control" type="text" name="description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary m-2">Отправить</button>
        </div>

    </div>
</form>
<?php if ($errors) : ?>
    <?php foreach ($errors as $er) : ?>
        <p class="alert-info"><?php echo $er; ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<?php echo getFooter();
?>
<script>