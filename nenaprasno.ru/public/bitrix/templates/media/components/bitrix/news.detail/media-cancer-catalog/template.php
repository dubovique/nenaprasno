<article class="article-block article-block-wrapper">
	<h1 class="article-block-title"><?=$arResult['NAME'];?></h1>
	<p><?=$arResult['~DETAIL_TEXT'];?></p>
</article>

<div class="back-link">
	<a href="/cancer-catalog/">К справочнику</a>
</div>

<?if(isset($arResult['PROPERTIES']['ADDITIONAL_ARTICLES']['VALUE'])):?>
	<div class="cancer-catalog-block-categories">
		<?foreach($arResult['PROPERTIES']['ADDITIONAL_ARTICLES']['VALUE'] as $aricle_id):?>
            <a href="<?=$arResult['ADDITIONAL_ARTICLES'][$aricle_id]['FIELDS']['DETAIL_PAGE_URL'];?>" class="cancer-catalog-block-category">
                <div class="cancer-catalog-block-category-title">
                    <?=$arResult['ADDITIONAL_ARTICLES'][$aricle_id]['FIELDS']['NAME'];?>
                </div>
                <div class="cancer-catalog-block-category-desc">
                    <?=$arResult['ADDITIONAL_ARTICLES'][$aricle_id]['PROPERTIES']['SUBTITLE']['VALUE'];?>
                </div>
            </a>
		<?endforeach;?>
	</div>
<?endif;?>

<div class="article-block-navigator article-block-navigator-with-border m-t-lg m-b-lg">
    <a href="#" class="article-block-navigator-prev">
        Предыдущая статья

        <span class="article-block-navigator-title">
            Диагностика
        </span>
    </a>
    <hr>
    <a href="#" class="article-block-navigator-next">
        Следующая статья

        <span class="article-block-navigator-title">
            Факторы риска
        </span>
    </a>
</div>
