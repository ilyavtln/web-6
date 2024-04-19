<?
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
    
    /**
     * @var array $arResult
     * @var array $arParam
     * @var CBitrixComponentTemplate $this
     */
    
    $this->setFrameMode(true);
    
    if(!$arResult["NavShowAlways"])
    {
        if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
            return;
    }
?>

<?php
    $strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
    $strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
    
    if ($arParams["DISPLAY_BOTTOM_PAGER"] && $arResult["NavPageCount"] > 1) {
        $currentPage = $arResult["NavPageNomer"];
        $totalPages = $arResult["NavPageCount"];
        ?>
        <div class="pagenavigation">
            <div class="navigation-links text-center mt-3">
                <?php if ($currentPage > 1): ?>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $arResult["NavQueryString"] ?>&amp;p=<?= ($currentPage - 1) ?>"
                       class="btn btn-light more mb-1">Предыдущая страница</a>
                <?php endif; ?>
                <?php if ($currentPage < $totalPages): ?>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $arResult["NavQueryString"] ?>&amp;p=<?= ($currentPage + 1) ?>"
                       class="btn btn-light more mb-1">Следующая страница</a>
                <?php endif; ?>
            </div>
        </div>
    <?php } ?>
