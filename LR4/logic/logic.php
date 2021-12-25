<?php
require_once "include_db.php";

$name_client = htmlspecialchars($_GET['name_client']);
$order_list = htmlspecialchars($_GET['order_list']);
$id_retail_outlet = htmlspecialchars($_GET['id_retail_outlet']);
$priceFrom = htmlspecialchars($_GET['priceFrom']);
$priceTo = htmlspecialchars($_GET['priceTo']);

$query = "SELECT retail_outlet.name_retail_outlet, orders.id_retail_outlet, orders.name_client, orders.image, orders.order_list, orders.price FROM orders INNER JOIN retail_outlet ON orders.id_retail_outlet = retail_outlet.id WHERE orders.name_client = orders.name_client";

if(isset($_GET['name_client']) || isset($_GET['order_list'])|| isset($_GET['id_retail_outlet'])|| isset($_GET['priceFrom'])|| isset($_GET['priceTo'])) {
    if($name_client != ''){
        $query .= " AND orders.name_client LIKE '%" . $name_client . "%'";
    }
    if ($id_retail_outlet != "Выберите ресторан") {
        $query .= " AND orders.id_retail_outlet = '" . $id_retail_outlet . "'";
    }
    if($order_list != ''){
        $query .= " AND orders.order_list LIKE '%" . $order_list . "%'";
    }
    if ($priceFrom) {
        if (filter_var($priceFrom, FILTER_VALIDATE_INT)) {
            $query .= " AND orders.price >= " . $priceFrom;
        } else {
            echo "Ошибка, переменная не число<br>";
        }
    }
    if ($priceTo) {
        if (filter_var($priceTo, FILTER_VALIDATE_INT)) {
            $query .= " AND orders.price <= " . $priceTo;
        } else {
            echo "Ошибка, переменная не число<br>";
        }
    }
}