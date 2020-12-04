<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="ft_about">
    <h4><?=GetMessage('ABOUT')?></h4>
    <ul>

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

		<?if ($arItem["PERMISSION"] > "D"):?>

				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

		<?endif?>

<?endforeach?>

</ul>
    </div>
<?endif?>