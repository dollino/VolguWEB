<?php
require_once "header.php";
require_once "logic/textLogic.php";
?>

<div class="container text-center">
    <h2>
        Обработка текста
    </h2>
    <form action="text.php" method="post">
        <textarea name="text" id="" cols="100" rows="10"><?=$text?></textarea>
        <div>
            <button class="btn btn-primary">
                Обработать
            </button>
        </div>
    </form>
    <div class="mt-3 text-start">

        <h1>Задание 1</h1>
        <div>
            <?=$analyze->Task1()?>
        </div>
        <h1>Задание 10</h1>
        <div>
            <?=$analyze->Task10()?>
        </div>
        <h1>Задание 12</h1>
       <?php foreach ($analyze->processTextTask12()[1] as $key => $value) {
        echo($value);
    }?>
        <h1>Задание 20</h1>
        <div>
            <?=$analyze->processTextTask20()?>
        </div>
    </div>
</div>
