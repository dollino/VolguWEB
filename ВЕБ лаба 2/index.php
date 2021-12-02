<?php
require_once 'connection.php';


$options = $mysql->query("SELECT * FROM Providers");

$options = $options->fetch_all(); // получаем в массив
// print_r($options);

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8"> 
 

  <title>Трансформатор напряжения Phaseo Optimum ABL6 230-400 В 1x230 В 630 ВA - Schneider Electric - Phaseo -
    Трансформаторы напряжения - Трансформаторы - ОНЛАЙНСКЛАД | Промышленный маркетплейс</title>

  

  <link href="1laba.css" rel="stylesheet">
</head>

<body> 

  <header class="navbar  sticky-top bg-light flex-md-nowrap p-0 ">

    <div> <button class="galochka"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
          class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
      </button>
    </div>



    <a class="navbar-brand " href="#"><img src="https://onlinesklad.ru/img/logo-beta.svg"></a>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Все категории</button>

      <div class="dropdown-menu" aria-labelledby="about-us">
        <a class="dropdown-item" href="#">Все категории</a>
        <a class="dropdown-item" href="#">Кабели и провода</a>
        <a class="dropdown-item" href="#">Светотехника</a>
        <a class="dropdown-item" href="#">Трансформаторы</a>
        <a class="dropdown-item" href="#">Шкафы и щиты</a>
        <a class="dropdown-item" href="#">Оборудование 6-10кВ</a>
        <a class="dropdown-item" href="#">Бесперебойное электроснабжение</a>
        <a class="dropdown-item" href="#">Климатическое оборудование</a>
        <a class="dropdown-item" href="#">Розетки и выключатели</a>
        <a class="dropdown-item" href="#">Изделия для электромонтажа</a>
        <a class="dropdown-item" href="#">Низковольтное оборудование</a>
        <a class="dropdown-item" href="#">Счетчики и приборы учета</a>
        <a class="dropdown-item" href="#">Безопасность</a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <input class="form-control form-control-dark w-10" type="text"
      placeholder="Введите название или артикул товара, который вы ищете" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Поиск</button>
    <div class="col"> <button class="korobka"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
          fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
          <path
            d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
        </svg></button></div>


    <div class="col"><button type="button" class="btn btn-light">Регистрация</button></div>
    <div class="voiti"> <a class="nav-link " href="#">Войти
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
          <path fill-rule="evenodd"
            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
        </svg>
      </a>
    </div>

    </div>
  </header>
  </div>


  <div class="container-fluid">

    <div class="row">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <div class="menu_title">
                  <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L6 6L11 1" stroke="#AFB2B7" stroke-width="2"></path>
                  </svg>
                  Кабели и провода (3 280)
                </div>
              </a>

            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-lightbulb" viewBox="0 0 16 16">
                  <path
                    d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                </svg>
                Светотехника (1 426)
              </a>

            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban"
                  viewBox="0 0 16 16">
                  <path
                    d="M13.5 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h11zm-11-1a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11z" />
                  <path
                    d="M6.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm-4 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm8 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3z" />
                </svg>
                Трансформаторы (27 084)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-hdd-rack" viewBox="0 0 16 16">
                  <path
                    d="M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 7a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                  <path
                    d="M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1v2H2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2h-1V7h1a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm0 7v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-3-4v2H4V7h8z" />
                </svg>
                Шкафы и щиты (3 027)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                  <path
                    d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                  <path
                    d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                </svg>
                Оборудований 6-10кВ (847)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-exclamation-square" viewBox="0 0 16 16">
                  <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                  <path
                    d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                </svg>
                Бесперебойное электроснабжение (382)
              </a>
            </li>
            <div class="dropdown-divider"></div>
          </ul>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-cloud-fog" viewBox="0 0 16 16">
                  <path
                    d="M3 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm10.405-9.473a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 12H13a3 3 0 0 0 .405-5.973zM8.5 3a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1 0 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4.002 4.002 0 0 1 8.5 3z" />
                </svg>
                Климатическое оборудование (600)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-hdd-stack" viewBox="0 0 16 16">
                  <path
                    d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z" />
                  <path
                    d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                  <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                </svg>
                Розетки и выключатели (849)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ladder"
                  viewBox="0 0 16 16">
                  <path
                    d="M4.5 1a.5.5 0 0 1 .5.5V2h6v-.5a.5.5 0 0 1 1 0v14a.5.5 0 0 1-1 0V15H5v.5a.5.5 0 0 1-1 0v-14a.5.5 0 0 1 .5-.5zM5 14h6v-2H5v2zm0-3h6V9H5v2zm0-3h6V6H5v2zm0-3h6V3H5v2z" />
                </svg>
                Изделия для электромонтажа (5 549)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-patch-exclamation" viewBox="0 0 16 16">
                  <path
                    d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                  <path
                    d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                </svg>
                Низковольтное оборудование (21 479)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Счетчики и приборы учета (800)
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
                Безопасность (3 735)
              </a>
            </li>

          </ul>
        </div>
      </nav>
      <div class="col grow  ctroka">
        <ul class="top-menu">
          <li> <a class="pop" href="#"> Главная </a></li>
          <li> <a class="pop" href="#">Трансформаторы </a></li>
          <li> <a class="pop" href="#">Трансформаторы напряжения </a></li>
          <li> <a class="pop" href="#">Phaseo </a></li>
          <li><a class="pop" href="#"> Schneider Electric </a></li>
          <li><a class="pop" href="#">Трансформатор напряжения Phaseo Optimum ABL6 230-400 В 1x230 В 630 ВA</a></li>
          <div class="dropdown-divider"></div>
        </ul>
        <div class="d-flex flex-column">

        <main id="main" class="main">
            <div class="gran">
         <div class="conteiner">
           <h4>Фильтрация результата поиска</h4>
         <form class="container pt-3 pb-3" action="index.php" method="GET" name="fillter">
        <div class="price align-items-center justify-content-center">
          <h6>По цене: </h6>
           <br><span style="padding-right: 8px ;   ">Цена от: </span>
           <input style='width: 700px align-center' class="form-control" type="number" name="ot" value="<?= htmlspecialchars(
               $_GET['ot']
           ) ?>">
           <br><span style="padding-right: 8px ;   ">Цена : </span>
           <input style='width: 700px align-center ' class="form-control " type="number" name="do" value="<?= htmlspecialchars(
               $_GET['do']
           ) ?>">
           <br><h6 >По названию: </h6>
           <br><input style='width: 700px align-center ' class="form-control" name="name" type="text" placeholder="Название товара">
           <br><h6 >По поставщику: </h6>
           <div><br><select style='width: 1070px; height : 45px; margin-top : 15px' class="form-select" name="provider" aria-label="Default select example">
           <?php
                foreach($options as $value)
                {
                  echo '<option value="' .  $value[0] . '">' . $value[1] . '</option>' ; 
                }     
           ?>
           <!-- <option selected value="0">Поставщики</option>
                <option value="1">СHINT</option>
                <option value="2">IEK</option>
                <option value="3">MBS</option>
                <option value="4">Diel SRL</option>
                <option value="5">СВЭЛ</option> -->
            </select></div>
            

        <div><p><button type="submit" class="btn btn-primary"  style='margin-left: 15px'>Применить фильтр</button>
            <a class="btn btn-warning" href="/1laba" style='margin-left: 15px'>Отчистить</a> </p></div>
        </div>
    </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Фотография</th>
                    <th scope="col">Название</th>
                    <th scope="col">Поставщик</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Стоимость</th>
                </tr>
            </thead>
            <tbody>
              <?php
            require_once 'config.php';
            ?>
            </tbody>
        </table>
    </div>

    <footer >
      
    <div class="container">
    <div class="row">
    <div  class="col-6 footer  "> <p><b>Вcе категории</b></p>
    <ul class="podval"> 
    <li>
    <a class="pop" href="#"> Кабели и провода</a>
    </li>
    <li>
    <a class="pop" href="#">Трансформаторы </a>
    </li>
    <li>
    <a class="pop" href="#">Оборудование 6-10кВ </a>
    </li>
    <li>
    <a class="pop" href="#">Климатическое оборудование </a>
    </li>
    <li>
    <a class="pop" href="#"> Изделия для электромонтажа</a>
    </li>
    <li>
    <a class="pop" href="#"> Счетчики и приборы учета</a>
    </li>
    <li>
    <a class="pop" href="#"> Светотехника</a>
    </li>
    <li>
    <a class="pop" href="#"> Шкафы и щиты</a>
    </li>
    <li>
    <a class="pop" href="#"> Бесперебойное электроснабжение</a>
    </li>
    <li>
    <a class="pop" href="#"> Розетки и выключатели</a>
    </li>
    <li>
    <a class="pop" href="#"> Низковольтное оборубование</a>
    </li>
    <li>
    <a class="pop" href="#"> Безопасность</a>
    </li>
    </ul>
    </div>
    
    <div class="col-3 footer "> <p><b>Информация</b> </p> 
    <ul class="podval2">
    <li>
    <a class="pop" href="#"> О проекте</a>
    </li>
    <li>
    <a class="pop" href="#"> Поставщики</a>
    </li>

    </ul>
    </div> 

    <div class="col-3 footer "> <p><b>Контакты</b> </p> 
    <ul class="podval2">
    <li> Телефон горячей линии
    <br><a class="pop" href="#"><b> 8 800 550 67 61</b></a>
    </li>
    <li> Электронная почта для связи 
    <br><a class="pop" href="#"> <b>mail@onlinesklad.ru</b></a>
    </li>
    <li>
    <a class="pop" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
</svg></a>
    <a class="pop" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>
    </li>

    </ul>
    </div> 
    </div>

    </div>
    
    </footer>

</div>
      </main>
 
 



</div>



  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
    crossorigin="anonymous"></script>
  <script src="1laba.js"></script>
</body>

</html>