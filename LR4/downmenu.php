<?php
require_once "logic/include_db.php";

$query = "SELECT retail_outlet.id, retail_outlet.name_retail_outlet FROM retail_outlet";
$result = $mysql->query($query);
while($row = $result->fetch_assoc()){
    $attr = ($_GET['name_retail_outlet'] == $row["id"]) ? 'selected' : '';
    echo "<option value='". $row["id"] . "'> ". $row["name_retail_outlet"] ."</option>";
}

?>