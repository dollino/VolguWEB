<?php
define("DB_HOST", "localhost");//хост 
define("DB_USER", "root");//имя пользователя
define("DB_PASSWORD", "");//паролья
define("DB_NAME", "Transformators");//база данных название


$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);//подключение к бд
if ($mysql->connect_errno) exit("Не удалось подключиться к БД");
$mysql->set_charset('utf8');

$query = "SELECT Products.name, Products.id_provider, Products.description, Products.cost, Providers.Provider, Products.img FROM Products INNER JOIN Providers ON Providers.id = Products.id_provider";
//возвращает результат выборки


$providersArray = array("CHINT", "IEK", "MBS", "Diel SRL", "СВЭЛ");//создание массива

if ((isset($_GET["name"])) || (isset($_GET["provider"])) || (isset($_GET["ot"])) || (isset($_GET["do"]))) { // проверка на получение значения
  
  $check = false;//записывает проводился ли запрос
  if ($_GET["name"] != "") {
      $query .= " WHERE name LIKE '%" . mysqli_real_escape_string($mysql,$_GET["name"]) . "%'";//создаем запрос, экранируем в строчном виде данные из бд
      $check = true;
      echo "Название: " . $_GET["name"] . "<br>";
  }
  if ($_GET["provider"] != "") {
      if ($check) {
          $query .= " AND Products.id_provider = '" . mysqli_real_escape_string($mysql,$_GET["provider"]) . "'";//вводим дополнительный запрос
      } else {
          $query .= " WHERE Products.id_provider = '" . mysqli_real_escape_string($mysql,$_GET["provider"]) . "'";
      }
      $check = true;
      echo "Поставщик: " . $providersArray[$_GET["provider"] - 1] . "<br>";
  }
  if ($_GET["ot"] != "") {
      if(filter_var($_GET["ot"], FILTER_VALIDATE_INT)){ //проверка на корректное целое  число
          if ($check) {
              $query .= " AND Products.cost > " . $_GET["ot"];
          } else {
              $query .= " WHERE Products.cost > " . $_GET["ot"];
          }
          $check = true;
          echo "Цена больше: " . $_GET["ot"] . "<br>";
      }else{
          echo "Ошибка, введите число <br>";
      } 
  }
  if ($_GET["do"] != "") {
      if(filter_var($_GET["do"], FILTER_VALIDATE_INT)){
          if ($check) {
              $query .= " AND Products.cost < " . $_GET["do"];
          } else {
              $query .= " WHERE Products.cost < " . $_GET["do"];
          }
          $check = true;
          echo "Цена меньше: " . $_GET["do"] . "<br>";
      }else{
          echo "Ошибка,  введите число <br>";
      } 
  }
}

$result = $mysql->query($query);
$i = 0;
while ($row = $result->fetch_assoc()) {
    $i++;
    echo "<tr><th scope='row'><img src='" . $row["img"] . "' style='width: 80px'></th>
    <td>" . $row['name'] . "</td>
    <td>" . $row["Provider"] . "</td>
    <td>" . $row['description'] . "</td>
    <td>" . $row['cost'] . " руб.</td>
    </tr>";                     
}
if ($i == 0) {
    echo "Ничего не найденно(((";
}?>
