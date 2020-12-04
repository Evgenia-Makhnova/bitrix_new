<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt=$APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "3",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_ID#",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"ID" => $_REQUEST["ID"],
		"IS_SEF" => "Y",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"SECTION_URL" => "",
		"SEF_BASE_URL" => "/products/"
	)
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>