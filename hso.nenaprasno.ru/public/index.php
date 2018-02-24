<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("keywords", "ординатура по онкологии, резидентура по онкологии, высшая школа онкологии, онколог, обучение онкологии, образовательный проект, фонд профилактики рака, профилактика рака, лечение рака");
$APPLICATION->SetPageProperty("description", "Конкурс в высшую школу онкологии - проект Фонда профилактики рака");
$APPLICATION->SetPageProperty("title", "Высшая школа онкологии");
$APPLICATION->SetTitle("Главная");
?> 

<main id="vue-app" class="main-content">
    <div class="section-gray section-padding-top">
        <div class="wrapper">
            <section class="slider">
                <div class="slider-text">
                    <div class="slider-title">
                        Конкурс в Высшую <br> школу онкологии
                    </div>
                    <div class="slider-subtitle">
                        Победители получают обучение в ординатуре
                    </div>
                    <div class="slider-buttons">
                        <a href="#" class="button button-blue button-round">Регистрация окончена</a>
                    </div>
                </div>
            </section>
            <section class="hso-description" style="margin-bottom: 60px;">
                <?$APPLICATION->IncludeFile(
                  SITE_DIR."include/description.php",
                  Array(),
                  Array("MODE"=>"html")
                  );
                ?>
            </section>
            <section class="winners-notice">
                <div class="winners-notice-left">
                    <div class="winners-notice-title">
                        Победителям конкурса
                    </div>
                    <div class="winners-notice-subtitle">
                        Победители конкурса начинают обучение <br>
                        в ординатуре с 1 сентября 2017 года
                    </div>
                </div>
                <div class="winners-notice-desc-wrap">
                    <div class="winners-notice-desc">
                        <div class="winners-notice-desc-item">
                            <div class="winners-notice-desc-item-icon">
                                <?php include ($_SERVER['DOCUMENT_ROOT'] . "/images/icons/icon-classroom.svg") ;?>
                            </div>
                            <div class="winners-notice-desc-item-content">
                                Помимо обучения ординаторы получают от Фонда профилактики рака:

                                <ul class="ul-dash">
                                    <li>
                                        Новейшую международную литературу и учебные материалы по онкологии
                                    </li>

                                    <li>
                                        Принимают участие в журнальных клубах и мастер-классах с ведущими российскими и зарубежными специалистами
                                    </li>

                                    <li>
                                        Проходят стажировки у лучших российских и зарубежных специалистов
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="winners-notice-desc-item">
                            <div class="winners-notice-desc-item-icon">
                              <?php include ($_SERVER['DOCUMENT_ROOT'] . "/images/icons/icon-english-receptionist.svg") ;?>
                            </div>
                            <div class="winners-notice-desc-item-content">
                                Изучают английский язык и проходят множество дополнительных курсов, таких как: основы построения проектов, искусство ведения переговоров и многое другое
                            </div>
                        </div>
                        <div class="winners-notice-desc-item">
                            <div class="winners-notice-desc-item-icon">
                              <?php include ($_SERVER['DOCUMENT_ROOT'] . "/images/icons/icon-doctor.svg") ;?>
                            </div>
                            <div class="winners-notice-desc-item-content">
                                После успешного окончания ординатуры, победителям
                                конкурса гарантировано трудоустройство по специальности
                                или поступление в аспирантуру
                            </div>
                        </div>
                    </div>

                    <div class="winners-notice-note">
                        Фонд оставляет за собой право исключить победителей программы при несоответствии требованиям, предъявляемым к резидентам ВШО, либо по другим причинам, указанным в договоре
                    </div>
                </div>
            </section>
        </div>
    </div>



    <div class="section-white section-padding-top section-padding-bottom">
        <div class="wrapper">
            <div class="educators">
                <div class="educators-title">
                    Резиденты ВШО
                </div>
                <div class="educators-subtitle">
                    Все что вы хотели, но всегда боялись спросить про ВШО, можно узнать напрямую у наших резидентов. Когда-то они тоже подавали заявки на конкурс и прошли все этапы.
                </div>

                <?
                  $APPLICATION->IncludeComponent("bitrix:news.list", "hso-educators", array(
                      "IBLOCK_ID" => "1",
                      "NEWS_COUNT" => "10",
                      "SORT_BY1" => "SORT",
                      "SORT_ORDER1" => "ASC",
                      "FIELD_CODE" => array(),
                      "PROPERTY_CODE" => array("*"),
                      "SET_TITLE" => "N",
                      "SET_STATUS_404" => "N",
                      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                      "ADD_SECTIONS_CHAIN" => "N",
                      "PARENT_SECTION" => "",
                      "PARENT_SECTION_CODE" => "",
                      "DISPLAY_TOP_PAGER" => "N",
                      "DISPLAY_BOTTOM_PAGER" => "N",
                      "PAGER_SHOW_ALWAYS" => "N",
                      "PAGER_TEMPLATE" => "main",
                      "CACHE_TYPE" => "A",
                      "CACHE_TIME" => "3600",
                      "CACHE_FILTER" => "N",
                      "CACHE_GROUPS" => "N",
                    ),
                    false
                  );
                ?>
            </div>
        </div>
    </div>

    <div class="section-gray section-padding-top section-padding-bottom">
        <div class="wrapper">
            <div class="competition-conditions">

                <?$APPLICATION->IncludeFile(
                  SITE_DIR."include/tours.php",
                  Array(),
                  Array("MODE"=>"html")
                  );
                ?>

            </div>

            <div class="partners">
                <div class="partners-title">
                    Партнеры
                </div>

                <?
                  $APPLICATION->IncludeComponent("bitrix:news.list", "hso-partners", array(
                      "IBLOCK_ID" => "2",
                      "NEWS_COUNT" => "4",
                      "SORT_BY1" => "SORT",
                      "SORT_ORDER1" => "ASC",
                      "FIELD_CODE" => array(),
                      "PROPERTY_CODE" => array("*"),
                      "SET_TITLE" => "N",
                      "SET_STATUS_404" => "N",
                      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                      "ADD_SECTIONS_CHAIN" => "N",
                      "PARENT_SECTION" => "",
                      "PARENT_SECTION_CODE" => "",
                      "DISPLAY_TOP_PAGER" => "N",
                      "DISPLAY_BOTTOM_PAGER" => "N",
                      "PAGER_SHOW_ALWAYS" => "N",
                      "PAGER_TEMPLATE" => "main",
                      "CACHE_TYPE" => "A",
                      "CACHE_TIME" => "3600",
                      "CACHE_FILTER" => "N",
                      "CACHE_GROUPS" => "N",
                    ),
                    false
                  );
                ?>
            </div>
        </div>
    </div>
</main>


<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>