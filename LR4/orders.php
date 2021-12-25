<?php
require_once "header.php";
?>
<div class="container mb-5" >
    <?php
    session_start();
    if($_SESSION['user']){
        echo '<div class="h3 text-center"> Добро пожаловать '. $_SESSION['user'] .'</div>
    <div class="text-center">
    <a href="logic/signout.php">Выйти</a>
    </div>';
    }
    else{
        echo '<div class="h3 text-end">
                        Вы не авторизованы
                    </div>
                    <div class="text-end">
                        <a href="login.php">
                            Войти
                        </a>
                    </div>
                    <div class="text-end">
                        <a href="registration.php">
                            Зарегистрироваться
                        </a>
                    </div>';
    }
    if($_SESSION['user']){

        echo "<a href='filter.php'> Секретная страница </a>";
    }
    ?>

<div>
                <a href="text.php">Обработка текста</a>
            </div>
        </div>

</div>
    <main class="main">
        <div class="bg-light">
            <div class="main-top container d-flex">
                <div class=" d-flex">
                    <div class="block-btn">
                        <div class="dropdown h-100">
                            <a class="h-75 mt-2 btn btn-primary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Каталог товаров
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Кондиционеры</a></li>
                                <li><a class="dropdown-item" href="#">Отопительное оборудование</a></li>
                                <li><a class="dropdown-item" href="#">Водонагреватели</a></li>
                                <li><a class="dropdown-item" href="#">Насосы</a></li>
                                <li><a class="dropdown-item" href="#">Инженерная сантехника</a></li>
                                <li><a class="dropdown-item" href="#">Холодильное оборудование</a></li>
                                <li><a class="dropdown-item" href="#">Пищевое оборудование</a></li>
                                <li><a class="dropdown-item" href="#">Барное оборудование</a></li>
                                <li><a class="dropdown-item" href="#">Оборудование для Фаст-фуда</a></li>
                                <li><a class="dropdown-item" href="#">Электромеханическое пищевое оборудование</a></li>
                                <li><a class="dropdown-item" href="#">Генераторы (электростанции)</a></li>
                                <li><a class="dropdown-item" href="#">Источники бесперебойного питания</a></li>
                                <li><a class="dropdown-item" href="#">Стабилизаторы напряжения</a></li>
                                <li><a class="dropdown-item" href="#">Станки</a></li>
                                <li><a class="dropdown-item" href="#">Складское оборудование</a></li>
                                <li><a class="dropdown-item" href="#">Прочее оборудование</a></li>
                                <li><a class="dropdown-item" href="#">Инженерные решения</a></li>
                                <li><a class="dropdown-item" href="#">Для дилеров (ОПТ)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-text ms-5">
                        <div class="h2 ms-4">
                            Рисоварка INDOKOR IR-2310
                        </div>
                        <ul class="d-flex">
                            <li>
                                <a href="#">
                                    Главная
                                </a>
                            </li>
                            <li class="ms-2">
                                <a href="#">
                                    Каталог
                                </a>
                            </li>
                            <li class="dropdown ms-2">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Пищевое оборудование
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Кондиционеры</a></li>
                                    <li><a class="dropdown-item" href="#">Отопительное оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Водонагреватели</a></li>
                                    <li><a class="dropdown-item" href="#">Насосы</a></li>
                                    <li><a class="dropdown-item" href="#">Инженерная сантехника</a></li>
                                    <li><a class="dropdown-item" href="#">Холодильное оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Пищевое оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Барное оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Оборудование для Фаст-фуда</a></li>
                                    <li><a class="dropdown-item" href="#">Электромеханическое пищевое оборудование</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Генераторы (электростанции)</a></li>
                                    <li><a class="dropdown-item" href="#">Источники бесперебойного питания (ИБП)</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Стабилизаторы напряжения</a></li>
                                    <li><a class="dropdown-item" href="#">Станки</a></li>
                                    <li><a class="dropdown-item" href="#">Складское оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Прочее оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Инженерные решения</a></li>
                                    <li><a class="dropdown-item" href="#">Для дилеров (ОПТ)</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ms-2">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Мультиварки
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Варочно-жарочное оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Гриль оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Линии раздачи</a></li>
                                    <li><a class="dropdown-item" href="#">Мультиварки</a></li>
                                    <li><a class="dropdown-item" href="#">Нейтральное кухонное оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Печи, духовые шкафы</a></li>
                                    <li><a class="dropdown-item" href="#">Посудомоечное оборудование</a></li>
                                    <li><a class="dropdown-item" href="#">Тепловое кухонное оборудование</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ms-2">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Рисоварки
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Кипятильники</a></li>
                                    <li><a class="dropdown-item" href="#">Пароварки</a></li>
                                    <li><a class="dropdown-item" href="#">Электроварки</a></li>
                                    <li><a class="dropdown-item" href="#">Макарановарки</a></li>
                                    <li><a class="dropdown-item" href="#">Яйцеварки</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="info container">
            <div class="info-top mb-5">
                <div class="btn btn-secondary">
                    Мультиварки
                </div>
                <div class="btn btn-secondary">
                    Рисоварки
                </div>
                <div class="btn btn-secondary">
                    Рисоварки - Indokor
                </div>
                <div class="btn btn-secondary">
                    DKR
                </div>
                <div class="btn btn-secondary">
                    IR
                </div>
            </div>
            <div class="info-main row border mb-5">
                <div class="col-5">
                    <div class="d-flex justify-content-between">
                        <a href="#">
                            Видео (6)
                        </a>
                        <div class="sale">
                            Сделаем скидку!
                        </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/multi.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/multi.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/multi.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
                <div class="col-2">
                    <div class="code">
                        Код товара: 00308171
                    </div>
                    <hr>
                    <div class="price">
                        1 599 469 руб.
                    </div>
                    <div class="text-center mb-4">
                        <a href="#">
                            Получить скидку
                        </a>
                    </div>
                    <div class="text-center mb-4">
                        <a href="#" class="green">
                            +15995
                        </a>
                        баллов
                    </div>
                    <div class="btn btn-primary w-100 mb-4">
                        В корзину
                    </div>
                    <div class="btn btn-info w-100 mb-4">
                        Купить в 1 клик
                    </div>
                    <div class="btn btn-light w-100">
                        Бонусы посредникам
                    </div>
                </div>
                <div class="col-5">
                    <div class="d-flex justify-content-between">
                        <div class="btn btn-info">
                            Запрос оптовой цены
                        </div>
                        <div>
                            Все товары Indokor
                        </div>
                    </div>
                    <hr>
                    <div class="h2">
                        Основные характеристики
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            Бренд
                        </div>
                        <div>
                            Indokor
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            Объем
                        </div>
                        <div>
                            23 л
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            Напряжение
                        </div>
                        <div>
                            220 В
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            Глубина
                        </div>
                        <div>
                            440 мм
                        </div>
                    </div>
                    <a href="#">
                        Все характеристики
                    </a>
                    <div class="mt-5">
                        <strong>Доставка в г.Волгоград:</strong> из г.Ростов-на-Дону
                    </div>
                    <div class="mt-2">
                        <strong>Время доставки:</strong> 3-4 дня
                    </div>
                    <div class="mt-2">
                        <strong>Стоимость:</strong> от 500р.
                    </div>
                </div>
            </div>
            <div class="info-bottom">
                <div class="btn-group w-100 border mb-5">
                    <div class="btn btn-light btn-active">
                        Описание
                    </div>
                    <div class="btn btn-light">
                        Отзывы
                    </div>
                    <div class="btn btn-light">
                        Оплата
                    </div>
                    <div class="btn btn-light">
                        Услуги
                    </div>
                </div>
                <div class="d-flex mb-5">
                    <div class="w-50">
                        <div class="w-100">
                            Бренд
                        </div>
                        <div class="w-100 bg-light">
                            Объем
                        </div>
                        <div class="w-100">
                            Напряжение
                        </div>
                        <div class="w-100 bg-light">
                            Глубина
                        </div>
                    </div>
                    <div class="w-50">
                        <div class="w-100">
                            Indokor
                        </div>
                        <div class="w-100 bg-light">
                            23 л
                        </div>
                        <div class="w-100">
                            220 В
                        </div>
                        <div class="w-100 bg-light">
                            440 мм
                        </div>
                    </div>
                </div>
                <ul class="mb-4">
                    <li>
                        <span>
                            Рисоварка INDOKOR IR-2310 предназначена для упрощенного приготовления риса и поддержания его
                            в состоянии постоянной готовности на предприятиях общественного питания и торговли.
                        </span>
                    </li>
                    <li>
                        <span>
                            Использование прибора позволяет при варке сохранить структуру зернышек риса и свести к
                            минимуму
                            усилия по его приготовления.
                        </span>
                    </li>
                    <li>
                        <span>
                            Модель оснащена электромеханической панелью управления.
                        </span>
                    </li>
                    <li>
                        <span>
                            Корпус выполнен из нержавеющей стали.
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div>

        </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</body>

<?php
require_once "footer.php";
?>
</html>
