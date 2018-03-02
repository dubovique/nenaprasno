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

			$filter = array(
				'MODULE_ID' => 'iblock',
				'PARAM1' => 'media',
			);

			$obTitle = new CSearchTitle;

			$obTitle->Search(
				$_REQUEST['search'],
				20,
				$filter,
				false,
				['ID' => 'ASC']
			);

			$i = 0;
			while($arResult = $obTitle->GetNext()){?>
				<a href="<?=$arResult['URL'];?>" style="margin-bottom: 10px; display: inline-block;"><?=$arResult['~TITLE'];?></a>
				<br>
			<?
			$i++;
			}
			
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