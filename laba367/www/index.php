<?php
require_once(dirname(dirname(__FILE__)) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');
$style = 'http://' . $_SERVER['SERVER_NAME'] . '/static/css/index.css';
$crud = 'http://' . $_SERVER['SERVER_NAME'] . '/www/crud/list.php';
echo getHeader(null, UserLogic::current());
?>

<link href="<?php echo $style; ?>" rel="stylesheet">
<main id="main" class="main">
  <div class="gran">
    <div class="ml-2">
      <h3>Трансформатор напряжения Phaseo Optimum ABL6 230-400 В 1x230 В 630 ВA </h3>
      <div class="slider mb-10 sm:mb-50">
        <div class="btn-group switch slider__content" role="group" aria-label="Basic example" style="--tw-translate-x:0px;">
          <button class="active">
            Предложения поставщиков
          </button>
          <button>
            Описание товара
          </button>
          <button>
            Характеристика товара
          </button>
          <button>
            Поставщики
          </button>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="col-4"><img src="https://onlinesklad.ru/storage/photo/resized/xy_300x300/e/uvq5fq90bcjypkj_beb6e51b.jpg.webp" width="200" height="200"></div>
      <div class="col-8 product_opisanie">
        <p>Артикул: ABL6TS63U</p>
        <p>Производитель: Schneider Electric </p>
        <div class="col-3 nalichie   ">
          <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 3.72727L7.89474 11L16 1" stroke="white" stroke-width="3"></path>
          </svg>
          <span> В наличии </span>
        </div>
        <div class="col price">
          Цена от 9 929,64 р. <span class="text-grey-300">за шт.</span>
        </div>

        <div class="col prod">
          Трансформаторы серии Phaseo Optimum- это трансформаторы напряжения, защитные и изолирующие.
        </div>
      </div>
      <div>
        <h4>Предложения поставщиков </h4>
      </div>
      <div class="container">
        <div class="row pervyi">
          <div class="col-3">
            Продавец
          </div>
          <div class="col-3">
            Расположение
          </div>
          <div class="col-3">
            В наличии
          </div>
          <div class="col-3">
            Цена
          </div>
        </div>
        <div class="row vtoroi">
          <div class="col-3">
            <a class=" nya" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-earbuds" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.825 4.138c.596 2.141-.36 3.593-2.389 4.117a4.432 4.432 0 0 1-2.018.054c-.048-.01.9 2.778 1.522 4.61l.41 1.205a.52.52 0 0 1-.346.659l-.593.19a.548.548 0 0 1-.69-.34L.184 6.99c-.696-2.137.662-4.309 2.564-4.8 2.029-.523 3.402 0 4.076 1.948zm-.868 2.221c.43-.112.561-.993.292-1.969-.269-.975-.836-1.675-1.266-1.563-.43.112-.561.994-.292 1.969.269.975.836 1.675 1.266 1.563zm3.218-2.221c-.596 2.141.36 3.593 2.389 4.117a4.434 4.434 0 0 0 2.018.054c.048-.01-.9 2.778-1.522 4.61l-.41 1.205a.52.52 0 0 0 .346.659l.593.19c.289.092.6-.06.69-.34l2.536-7.643c.696-2.137-.662-4.309-2.564-4.8-2.029-.523-3.402 0-4.076 1.948zm.868 2.221c-.43-.112-.561-.993-.292-1.969.269-.975.836-1.675 1.266-1.563.43.112.561.994.292 1.969-.269.975-.836 1.675-1.266 1.563z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
                <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
              </svg> </a>
            АО "ТАТЭМ"
          </div>
          <div class="col-3">
            Адоратского 50 а
          </div>
          <div class="col-3">
            3 <span class="text-grey-300">шт </span>
          </div>
          <div class="col-3">
            9 929,64 р. <span class="text-grey-300">за шт.</span>
            <a class=" nya" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
              </svg> В заказ </a>
          </div>
        </div>
        <div class="dropdown-divider"></div>

      </div>
      <button class="btn btn-outline-primary"><a href="<?php echo $crud ?>">Ссылка на CRUD таблицы product</a></button>
      <div><button class="btn btn-outline-primary"><a href="secret.php">Секретная старница</a></button></div>





    </div>

  </div>

  </div>
  <?php echo getFooter();
  ?>