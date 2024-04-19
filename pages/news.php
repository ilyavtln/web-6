<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
    $APPLICATION->SetTitle('Главная');
?>


    <div class="container d-none d-md-block">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <h1 class="display-4 fst-italic text-center">Вести Сибири</h1>
            </div>
        </header>
    </div>

    <nav class="d-md-none navbar sticky-top border-1 bg-white border-bottom my-2 border-black">
        <div class="container">
            <a class="navbar-brand fw-medium" href="../index.php">Вести Сибири</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar"
                 aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Меню</h5>
                    <button type="button" class="btn-close mr-1" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item nav-link link-body-emphasis border p-3 rounded-3">
                            <a class="text-decoration-none my-2 text-black" href="../index.php">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-house mr-1 text-primary"></i>
                                        Главная страница
                                    </div>
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                            <a class="text-decoration-none my-2 text-black" href="news.php">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-newspaper mr-1 text-primary"></i>
                                        Новости
                                    </div>
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                            <a class="text-decoration-none my-2 text-black" href="contacts.php">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-chat-square mr-1 text-primary"></i>
                                        Контакты
                                    </div>
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <?php
                            if (isset($_COOKIE['user']) && $_COOKIE['user'] != ''):
                                ?>
                                <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                                    <a class="text-decoration-none my-2 text-black" href="../scripts/exit.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="bi bi-box-arrow-left mr-1 text-primary"></i>
                                                Выйти
                                            </div>
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                                    <a class="text-decoration-none my-2 text-black" href="../auth/registration.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="bi bi-box-arrow-right mr-1 text-primary"></i>
                                                Регистрация
                                            </div>
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-none d-md-block container sticky-top">
        <div class="nav-scroller bg-white py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between px-1">
                <a class="nav-item nav-link link-body-emphasis" href="../index.php">Главная страница</a>
                <a class="nav-item nav-link link-body-emphasis active" href="news.php">Новости</a>
                <a class="nav-item nav-link link-body-emphasis" href="contacts.php">Контакты</a>
                <?php
                    if (isset($_COOKIE['user']) && $_COOKIE['user'] != ''):
                        ?>
                        <a class="nav-item nav-link link-body-emphasis" href="../scripts/exit.php">Выйти</a>
                    <?php else: ?>
                        <a class="nav-item nav-link link-body-emphasis" href="../auth/registration.php">Регистрация</a>
                    <?php endif; ?>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded-lg-5 rounded-3 text-body-emphasis bg-body-secondary">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis fw-semibold text-decoration-none" href="../index.php">
                            <i class="bi bi-house"></i>
                            Главная страница
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a class="link-body-emphasis fw-semibold text-decoration-none" href="news.php">
                            Новости
                        </a>
                    </li>
                </ol>
            </nav>
            <div class="d-flex flex-row">
                <div>
                    <h3 class="display-5 fst-italic">
                        Самые свежие новости Новосибирской области
                    </h3>
                </div>
                <div class="d-lg-flex d-none align-items-center">
                    <img src="../icons/news-main.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    
    <?php $APPLICATION->IncludeComponent("bitrix:news", "page", Array(
	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "1",	// Инфоблок
		"IBLOCK_TYPE" => "info",	// Тип инфоблока
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"NEWS_COUNT" => "100",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "bootstrap_v4",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_FILTER" => "N",	// Показывать фильтр
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_REVIEW" => "N",	// Разрешить отзывы
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ID",
		)
	),
	false
);?>

<!--        <div class="container">-->
<!--            --><?php
//                $mysqli = new mysqli('localhost', 'root', 'root', 'register-bg');
//                $query = "SELECT * FROM news";
//                $result = $mysqli->query($query);
//                $news = $result->fetch_all(MYSQLI_ASSOC);
//
//                foreach ($news as $oneNews) {
//                    ?>
<!--                    <div class="row mb-2">-->
<!--                        <div class="banner-flying row g-0 border rounded">-->
<!--                            <div class="p-4 d-flex flex-column justify-content-between">-->
<!--                                <div class="mb-2 w-fit-content p-1 rounded-3 text-body-secondary border">--><?php //= $oneNews["date"] ?><!--</div>-->
<!--                                <h3><p class="card-text mb-3">--><?php //= $oneNews["title"] ?><!--</p></h3>-->
<!--                                <p class="card-text mb-3">--><?php //= $oneNews["preview"] ?><!--</p>-->
<!--                                <img src=".--><?php //= $oneNews["img"] ?><!--" class="d-block rounded-lg-5 rounded-3 mb-3 w-100"-->
<!--                                     alt="(((">-->
<!--                                <p class="card-text">--><?php //= $oneNews["text"] ?><!--</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    --><?php
//                }
//            ?>
<!--        </div>-->
<!--    </main>-->

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>