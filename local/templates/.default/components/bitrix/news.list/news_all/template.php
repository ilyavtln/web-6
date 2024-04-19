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

<div class="container">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="row mb-2 mb-md-4 mb-lg-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="banner-flying row g-0 border rounded">
                <div class="p-4 d-flex flex-column justify-content-between">
                    <div class="mb-2 w-fit-content p-1 rounded-3 text-body-secondary border"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                    <h3><p class="card-text mb-3"><?= $arItem["NAME"] ?></p></h3>
                    <p class="card-text mb-3"><?= $arItem["PREVIEW_TEXT"] ?></p>
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="d-block rounded-lg-5 rounded-3 mb-3 w-100" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                    <p class="card-text"><?= $arItem["DETAIL_TEXT"] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<?php endif; ?>
