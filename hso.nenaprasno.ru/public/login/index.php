<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><main id="vue-app" class="main-content">
    <div class="wrapper">


        <? if (! $USER->IsAuthorized()): ?>

        <div class="test-welcome">
            <div class="test-welcome-title">Авторизация</div>

            <div class="test-welcome-text active">
                <p>Введите данные, указанные при регистрации, чтобы узнать статус своей заявки</p>
            </div>
        </div>

        <form action="/ajax/login/" method="post" class="question-form">

            <? if ($_SESSION['message']): ?>
                <p><?=$_SESSION['message']?></p>
                <? unset($_SESSION['message']) ?>
            <? endif ?>

            <div @submit.prevent class="question-form-step active">

                <div class="question-form-group">
                    <label for="form-field-email" class="question-form-label">
                        Электронная почта
                        <sup class="question-form-required">*</sup>
                    </label>
                    <input
                            id="form-field-email"
                            name="email"
                            type="text"
                            placeholder="email@domain"
                            class="question-form-input"
                    >
                </div>

                <div class="question-form-group">
                      <label class="question-form-label">
                          Пароль
                          <sup class="question-form-required">*</sup>
                      </label>

                      <div class="question-form-subgroup">
                          <input
                                  id="form-field-password-1"
                                  name="password"
                                  type="password"
                                  placeholder="Введите пароль"
                                  class="question-form-input"
                        >
                      </div>

                      
                </div>

                <div class="question-form-step-buttons">
                    <button type="submit" class="button button-round button-blue">Войти</button>
                </div>
            </div>

        </form>

        <? else: ?>
            <?
                $id = $USER->GetID();

                CModule::IncludeModule('iblock');

                $arOrder = array("SORT" => "ASC");
                $arFilter = array("IBLOCK_ID" => 3, "PROPERTY_USER" => $id, "PROPERTY_ACCEPTED_VALUE" => 'Y');
                $arSelectFields = array("ID","ACTIVE", "NAME");
                $rsElements = CIBlockElement::GetList($arOrder, $arFilter, FALSE, FALSE, $arSelectFields);
                if($order = $rsElements->Fetch()){
                    $accepted = true;
                }
                else{
                    $accepted = false;
                }
            ?>

            <div class="test-welcome">
                <div class="test-welcome-title">Статус вашей заявки</div>

                <div class="test-welcome-text active">
                    <? if ($accepted): ?>


                        <center>
<p>Поздравляем, вы успешно прошли во второй тур Конкурса ВШО 2017!</p>
<p>С 17 апреля 2017 года в вашем личном кабинете откроется доступ к заданиям второго тура. На решение задач отводится час. Успейте справиться с заданиями до 24 апреля 2017 года. </p>
<p>Если у вас возникли вопросы, вы можете задать их в группе конкурса <a target="_blank" href="https://vk.com/hso2017">https://vk.com/hso2017</a> </p>
<p>Результаты второго тура станут известны до 1 мая 2017 года.</p>
<div class="test-welcome-button"><a href="/test" class="button button-blue button-round">Перейти во 2ой тур</a></div>
</center>


                    <? else: ?>
                        <center>К сожалению ваша заявка не прошла во второй тур конкурса ВШО 2017.
Не хватило баллов.
<br>
Пусть у вас все сложится.
</center>
                    <? endif ?>
                </div>
            </div>

            
        <? endif ?>
    </div>
</main>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>