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


<div class="slider">
    <div class="slider-list">
        <div class="slider-track">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="slider-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <a href="pages/news.php?ID=<?= $arItem['ID']; ?>" class="text-decoration-none">
                        <h5 class="d-down-xs-none m-0 text-center abs-centered">
                            <?php
                                $title = $arItem["PREVIEW_TEXT"];
                                $length = 70;
                                
                                if (strlen($title) >= $length) {
                                    $title = substr($title, 0, $length);
                                    $last_space = strrpos($title, ' ');
                                    if ($last_space !== false) {
                                        $title = substr($title, 0, $last_space) . '...';
                                    }
                                }
                            ?>
                            <?= $title ?>
                        </h5>
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                             class="w-100 p-0">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="bordered-left">
        <button class="slider-btn slider-btn-prev bordered-left">
            <i class="fs-4 bi bi-chevron-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg>
            </i>
        </button>
    </div>
    <div class="bordered-right">
        <button class="slider-btn slider-btn-next bordered-right">
            <i class="fs-4 bi bi-chevron-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                </svg>
            </i>
        </button>
    </div>
    <ol class="slider-indicators">
        <?php
            for ($i = 0; $i < count($arResult["ITEMS"]); $i++) { ?>
                <li class="slider-indicator"></li>
            <?php } ?>
    </ol>
</div>


<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<?php endif; ?>
