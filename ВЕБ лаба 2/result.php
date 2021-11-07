<?php
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