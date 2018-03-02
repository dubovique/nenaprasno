<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Profilaktika.Media");
?>

<div class="wrapper">
	<div class="cancer-catalog-block">
		<h1 class="cancer-catalog-block-title">
			Поиск по сайту
		</h1>
		<?$APPLICATION->IncludeComponent("bitrix:search.form","media-cancer-catalog-search",Array(
				"USE_SUGGEST" => "N",
				"PAGE" => "/search/index.php"
			)
		);?>

		<?if(!empty($_REQUEST['search'])):?>
				<div class="search-subtitle">Результаты поиска «<?=$_REQUEST['search']?>»:</div>
		<?
			CModule::IncludeModule('search');

			$sFilter = array(
	            array(
	                "MODULE_ID" => "iblock",
	                "PARAM1" => "media",
	            ),
	            array(
	                "MODULE_ID" => "iblock",
	                "PARAM2" => 23,
	            ),
        	);

			$module_id = "iblock";
			$obSearch = new CSearch;
			$obSearch->Search(array(
			    "QUERY" => $_REQUEST['search'],
			    "MODULE_ID" => $module_id,
				$sFilter
				//"PARAM1" => "media",
			));
			$i = 0;
			if ($obSearch->errorno!=0):
			    ?>
			    <font class="text">В поисковой фразе обнаружена ошибка:</font>
			    <?echo ShowError($obSearch->error);?>
			    <font class="text">Исправьте поисковую фразу и повторите поиск.</font>
			    <?
			else:
			    while($arResult = $obSearch->GetNext())
			    {?>
			        <a href="<?echo $arResult["URL"]?>"><?echo $arResult["TITLE_FORMATED"]?></a>
			        <?echo $arResult["BODY_FORMATED"]?>
			    <hr size="1" color="#DFDFDF">
			    <?
				$i++;
				}
			endif;
			if ($i==0)
				echo "Поиск не дал результатов, попробуйте изменить поисковую фразу";
		endif;
		?>
	</div>
	<div class="back-link">
		<a href="<?=$_SERVER['HTTP_REFERER'];?>">Вернуться назад</a>
	</div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
