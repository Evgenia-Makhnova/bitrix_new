<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="sb_reviewed">
    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt=""/>
    <?endif;?>
    <span class="sb_rw_name"><?=$arItem["NAME"]?></span>
    <span class="sb_rw_job"><?=$arItem["PROPERTIES"]['DOLG']['VALUE']?> <?=$arItem["PROPERTIES"]['NAME']['VALUE'];?></span>
    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>
<?endforeach;?>

