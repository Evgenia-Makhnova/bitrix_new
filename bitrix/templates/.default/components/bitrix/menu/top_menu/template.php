<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

?>

<?if (!empty($arResult)):?>
    <div class="nv_topnav">
        <ul>

            <?
            $previousLevel = 0;
            foreach($arResult as $arItem):?>


            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
                <?$menu_class = trim($APPLICATION->GetDirProperty('menu_class', $arItem["LINK"]));?>
            <?endif?>

            <?if ($arItem["IS_PARENT"]):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>

            <li><a href="<?=$arItem["LINK"]?>"  <?=($menu_class ? 'class= "'.$menu_class.'" ':' ' )?>><span><?=$arItem["TEXT"]?></span></a>
                <ul>

                    <?
                    $menu_text = trim($APPLICATION->GetDirProperty('menu_text', $arItem["LINK"]));
                    if($menu_text) echo'<div class="menu-text">'.$menu_text.'</div>';
                    ?>

                    <?else:?>

                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                        <ul>

                            <?
                            $menu_text = trim($APPLICATION->GetDirProperty('menu_text', $arItem["LINK"]));
                            if($menu_text) echo'<div class="menu-text">'.$menu_text.'</div>';
                            ?>
                            <?endif?>


                            <?else:?>

                                <?if ($arItem["PERMISSION"] > "D"):?>

                                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                        <li><a href="<?=$arItem["LINK"]?>"<?if(isset($arItem['PARAMS']['IMG'])):?>class="menu-img-fon" style="background-image: url(<?=$arItem['PARAMS']['IMG']?>);<?endif?>"><span><?=$arItem["TEXT"]?></span></a></li>
                                    <?else:?>
                                        <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                                    <?endif?>

                                <?endif?>

                            <?endif?>


                            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

                            <?endforeach?>

                            <?if ($previousLevel > 1)://close last item tags?>
                                <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                            <?endif?>
                            <div class="clearboth"></div>
                        </ul>
    </div>
<?endif?>