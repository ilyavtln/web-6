<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<?php if ($arParams["DISPLAY_TOP_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?><br/>
<?php endif; ?>
<div class="d-grid banner-wrapper_two banner-gap">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="banner-flying row g-0 border rounded" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="p-4 d-flex flex-column justify-content-between">
                <div>
                    <div class="mb-2 text-body-secondary"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="rounded float-end mb-2 img-thumbnail"
                         alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                    <h3 class="card-text mb-3"><?= $arItem["NAME"] ?></h3>
                    <p class="card-text mb-3"><?= $arItem["PREVIEW_TEXT"] ?></p>
                </div>
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn-primary more">
                    Продолжить чтение
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<?php endif; ?>
