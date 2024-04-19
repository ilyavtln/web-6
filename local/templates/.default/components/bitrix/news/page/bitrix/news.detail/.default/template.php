<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
    /** @var array $arParams */
    /** @var array $arResult */
    /** @global CMain $APPLICATION */
    /** @global CUser $USER */
    /** @global CDatabase $DB */
    /** @var CBitrixComponentTemplate $this */
    /** @var string $templateName */
    /** @var string $templateFile */
    /** @var string $templateFolder */
    /** @var string $componentPath */
    /** @var CBitrixComponent $component */
    $this->setFrameMode(true);
?>
<div class="row mb-2 mb-md-4 mb-lg-6 w-lg-75 mx-0" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
    <div class="banner-flying row g-0 border rounded">
        <div class="p-4 d-flex flex-column justify-content-between">
            <div class="mb-2 w-fit-content p-1 rounded-3 text-body-secondary border"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></div>
            <h3><p class="card-text mb-3"><?= $arResult["NAME"] ?></p></h3>
            <p class="card-text mb-3"><?= $arResult["PREVIEW_TEXT"] ?></p>
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" class="d-block rounded-lg-5 rounded-3 mb-3 w-100"
                 alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
            <p class="card-text"><?= $arResult["DETAIL_TEXT"] ?></p>
        </div>
    </div>
</div>

<div>
    <a class="btn btn-secondary" href="<?= $arResult["LIST_PAGE_URL"]?>">Ко всем новостям</a>
</div>