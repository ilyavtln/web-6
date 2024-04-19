<?php
    global $APPLICATION;
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
                                    <a class="text-decoration-none my-2 text-black" href="../auth/../auth/registration.php">
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
                <a class="nav-item nav-link link-body-emphasis" href="news.php">Новости</a>
                <a class="nav-item nav-link link-body-emphasis active" href="contacts.php">Контакты</a>
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
        <div class="p-3 p-md-2 mb-3 rounded text-body-emphasis bg-body-secondary">
            <h3 class="display-6 fst-italic text-center">Контактная информация</h3>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
                <li class="breadcrumb-item active">
                    <a class="link-body-emphasis fw-semibold text-decoration-none" href="../index.php">
                        <i class="bi bi-house"></i>
                        Главная страница
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Контакты
                </li>
            </ol>
        </nav>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column">
                        <strong class="d-inline-block mb-2 text-center">
                            <a href="mailto:pm13.gudkova@gmail.com" class="text-primary-emphasis text-decoration-none">
                                Гудкова Мария
                            </a>
                        </strong>
                        <img src="../logos/masha.jpeg" class="rounded float-end img-thumbnail " alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column">
                        <strong class="d-inline-block mb-2 text-center">
                            <a href="mailto:pm13.vatlin@gmail.com" class="text-primary-emphasis text-decoration-none">
                                Ватлин Илья
                            </a>
                        </strong>
                        <img src="../logos/ilya.jpg" class="rounded float-end img-thumbnail " alt="...">
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>