<article class="article-block article-block-wrapper">
	<h1 class="article-block-title"><?=$arResult['NAME'];?></h1>
	<h2><?=$arResult['PROPERTIES']['SUBTITLE']['VALUE'];?></h2>
	<p><?=$arResult['~PREVIEW_TEXT'];?></p>
</article>

<div class="back-link">
	<a href="/cancer-catalog/main-articles/<?=$arResult['SECTION']['PATH'][0]['CODE'];?>/">Вернуться назад</a>
</div>

<?if(isset($arResult['ADDITIONAL_ARTICLES'])):?>
	<div class="cancer-catalog-block-categories">
		<?foreach($arResult['ADDITIONAL_ARTICLES'] as $aricle):?>
			<?
			$active_link = '';
			if($aricle['FIELDS']['ID'] == $arResult['ID']){
				$active_link = 'active';
			}
			?>
				<div class="cancer-catalog-block-category <?=$active_link?>">
					<a href="<?=$aricle['FIELDS']['DETAIL_PAGE_URL'];?>" >
						<div class="cancer-catalog-block-category-title">
							<?=$aricle['FIELDS']['NAME'];?>
						</div>
						<div class="cancer-catalog-block-category-desc">
							<?=$aricle['PROPERTIES']['SUBTITLE']['VALUE'];?>
						</div>
					</a>
				</div>
		<?endforeach;?>
	</div>
<?endif;?>