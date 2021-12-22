<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(PRODUCT_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');
if (!UserLogic::current()) {
    header("Location: http://" . $_SERVER['SERVER_NAME'] . "");
}
$products = ProductLogic::getList();
$error = ProductAction::deleteProduct();

echo getHeader(null, UserLogic::current());
?>
<div class="container">
    <h3 class="m-2">Список товаров</h3>
    <div>
        <a href="add.php"> Добавить товар</a>
    </div>
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">name</th>
                <th scope="col">provider</th>
                <th scope="col">descriprion</th>
                <th scope="col">cost</th>
                <th scope="col">up</th>
                <th scope="col">del</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <th scope="row"><?php echo $product[0] ?></th>
                    <td><img src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/static/img/product/<?php echo $product[1] ?>" style='width: 80px'></td>
                    <td><?php echo $product[2] ?></td>
                    <td><?php echo $product[3] ?></td>
                    <td><?php echo $product[4] ?></td>
                    <td><?php echo $product[5] ?></td>
                    <td>
                        <form action="change.php" method="POST">
                            <input type="text" name="action" value="get" hidden>
                            <input type="number" name="id" value="<?php echo $product[0] ?>" hidden>
                            <button class="btn btn-primary" type="submit">Изменить</button>
                        </form>
                    </td>
                    <td>
                        <form action="list.php" method="POST">
                            <input type="text" name="action" value="delete" hidden>
                            <input type="text" name="id" value="<?php echo $product[0] ?>" hidden>
                            <button class="btn btn-danger" type="submit">X</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</div>

</table>
<?php echo getFooter();
?>