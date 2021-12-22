<?php
// ... формируем путь к картинке $fileLocation

//Расширение картинки тоже узнать нужно будет, если оно может быть разным
header("Content-Type: image/jpg");
//Неплохо добавить заголовок с кэшем, чтоб браузер не тянул этот ужас еще раз
header("Cache-Control: max-age=86400");
header("Pragma: cache");
header("Expires: " . date(DATE_RFC2822, time() + 86400));

$fileHeader = fopen($fileLocation, 'r', false);
$response = "./2.jpg";  //тут можно отдать картинку заглушку, если картинка не найдена по запросу.

if ($fileHeader) {
    $response = stream_get_contents($fileHeader);
    fclose($fileHeader);
}

exit($response);
// download_file($_SERVER['SERVER_NAME'] ."/static/img/404-error-web-template-with-mad-cat_23-2147763345.jpg");
// if (UserLogic::current()) {
//     download_file($path_to_file);
// } else {
//     download_file(STATIC_PATH . );
// }
