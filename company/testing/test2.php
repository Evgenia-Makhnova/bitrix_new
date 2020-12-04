<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест2");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"",
Array("SET_TITLE" => "N",)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>