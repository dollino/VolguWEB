<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рисоварка INDOKOR IR-2310 - купить в Волгограде - Пром-Каталог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex justify-content-between">
                    <li class="nav-item d-flex">
                        <div>
                            <a class="nav-link" aria-current="page">Волгоград</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link">Пн-Вс 9:00-19:00 (МСК)</a>
                        </div>
                    </li>
                    <li class="nav-item ms-5">
                    <li class="dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink1" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Услуги
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <li><a class="dropdown-item" href="#">Ремонт и сервисное...</a></li>
                            <li><a class="dropdown-item" href="#">Пусконаладка</a></li>
                            <li><a class="dropdown-item" href="#">Установка / Монтаж</a></li>
                            <li><a class="dropdown-item" href="#">Проект "под ключ"</a></li>
                            <li><a class="dropdown-item" href="#">Консультация и рас...</a></li>
                        </ul>
                    </li>
                    <li class="ms-4">
                        <a class="nav-link" href="#">Блог</a>
                    </li>
                    <li class="ms-4">
                        <a class="nav-link" href="#">Проекты</a>
                    </li>
                    <li class="ms-4 dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Как купить
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Способ оплаты</a></li>
                            <li><a class="dropdown-item" href="#">Условия доставки</a></li>
                            <li><a class="dropdown-item" href="#">Гарантия на товар</a></li>
                        </ul>
                    </li>
                    <li class="ms-4 dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink3" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            О компании
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <li><a class="dropdown-item" href="#">Новости</a></li>
                            <li><a class="dropdown-item" href="#">Вакансии</a></li>
                            <li><a class="dropdown-item" href="#">Сертификаты</a></li>
                            <li><a class="dropdown-item" href="#">Политика</a></li>
                            <li><a class="dropdown-item" href="#">Отдел закупок</a></li>
                            <li><a class="dropdown-item" href="#">Стать партнером</a></li>
                        </ul>
                    </li>
                    <li class="ms-4">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                    </li>
                    <li class="nav-item mx-5"></li>
                    <li class="nav-item mx-5"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="nav-bottom container d-flex justify-content-evenly">
        <div class="logo">
            <a href="orders.php">
                <img src="images/logo.jpg" alt="">
            </a>

        </div>
        <div class="phone">
            <a href="tel:8 (928) 039-06-00">8 (928) 039-06-00</a>
        </div>
        <div class="btn btn-primary">
            info@prom-katalog.ru
        </div>
        <div class="btn btn-primary">
            Задать вопрос
        </div>
        <div class="search d-flex">
            <input type="text" id="search" placeholder="Поиск по: категории, наименованию"
                   class="search-input form-control">
            <button class="search-btn btn btn-primary" id="search" type="submit">
                Search
            </button>
        </div>
    </div>
</header>