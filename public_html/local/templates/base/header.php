<?//echo $_SERVER["DOCUMENT_ROOT"]?>
<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
$page = $APPLICATION->GetCurPage(false);
$dir = $APPLICATION->GetCurDir(false);
global $main;
if($page === '/'){
$main = true;
}
define("PATH_TO_404", "/404.php");
/*
$_SESSION['lang'] = (substr($page,0,4)=='/kz/' || (isset($_GET['lang']) && $_GET['lang']=='kz') ) ? 'kz' : 'ru';
$KZ = (isset($_SESSION['lang']) && $_SESSION['lang']=='kz') ? true : false;
$lang = ($KZ) ? 'kz' : 'ru';
$kz_version = ($KZ) ? '/kz' : '';
include ($_SERVER['DOCUMENT_ROOT'] . '/bitrix/lang/' . $lang . '.php');
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?
	//js
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/js.min.js');
 	?>
	<?$APPLICATION->ShowHead();?>

	<style>
	<?
	$cssFiles = array(
		SITE_TEMPLATE_PATH."/my_template_styles.css"
	);
	//echo minifyCSS($cssFiles);
	
	foreach($cssFiles as $cssFile) $APPLICATION->SetAdditionalCSS($cssFile);

	?>
	</style>


</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>


		