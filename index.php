<?php
    global $APPLICATION;
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
    $APPLICATION->SetTitle('Главная');
?>
    
    
    <div class="container-fluid px-0">
        <?php $APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "Y",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "1",	// Код информационного блока
            "IBLOCK_TYPE" => "info",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
            false
        );?>
    </div>

    <div class="container d-none d-md-block">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <h1 class="display-4 fst-italic text-center">Вести Сибири</h1>
            </div>
        </header>
    </div>

    <nav class="d-md-none navbar sticky-top border-1 bg-white border-bottom my-2 border-black">
        <div class="container">
            <a class="navbar-brand fw-medium" href="index.php">Вести Сибири</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
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
                            <a class="text-decoration-none my-2 text-black" href="index.php">
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
                            <a class="text-decoration-none my-2 text-black" href="pages/news.php">
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
                            <a class="text-decoration-none my-2 text-black" href="pages/contacts.php">
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
                            if (isset($_COOKIE['user']) && $_COOKIE['user'] != '') :
                                ?>
                                <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                                    <a class="text-decoration-none my-2 text-black" href="scripts/exit.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="bi bi-box-arrow-left mr-1 text-primary"></i>
                                                Выйти
                                            </div>
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                            <?php else : ?>
                                <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                                    <a class="text-decoration-none my-2 text-black" href="auth/registration.php">
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
                <a class="nav-item nav-link link-body-emphasis active" href="index.php">Главная страница</a>
                <a class="nav-item nav-link link-body-emphasis" href="pages/news.php">Новости</a>
                <a class="nav-item nav-link link-body-emphasis" href="pages/contacts.php">Контакты</a>
                <?php
                    if (isset($_COOKIE['user']) && $_COOKIE['user'] != '') :
                        ?>
                        <a class="nav-item nav-link link-body-emphasis" href="scripts/exit.php">Выйти</a>
                    <?php else : ?>
                        <a class="nav-item nav-link link-body-emphasis" href="auth/registration.php">Регистрация</a>
                    <?php endif; ?>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded-lg-5 rounded-3 text-body-emphasis bg-body-secondary">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
                    <li class="breadcrumb-item active">
                        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">
                            <i class="bi bi-house"></i>
                            Главная страница
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
                    <img src="icons/news-main.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div>
            <?php
                if (isset($_SESSION['admin_access']) && $_SESSION['admin_access'] == true) : ?>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-dark mb-3" href="pages/create.php" role="button">Добавление
                            новостей</a>
                    </div>
                <?php endif; ?>
            <?php
                $_SESSION['admin_acess'] = ""
            ?>
        </div>

        <!--Это начала списка новостей-->
        <?php $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news_index",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "info",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "2",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "bootstrap_v4",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "news_index"
            ),
            false
        ); ?>
        <!--Это конец списка новостей-->
    </main>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>