<? $remining = round(getReminingTime($testInfo)); ?>
<div class="test-welcome" data-remaining="<?=$remining?>">
  <div class="test-welcome-title">2 тур конкурса ВШО 2017</div>

  <div class="test-welcome-text active">
      <center>
        <? if ($testInfo['end']): ?>
          Ваши ответы сохранены, но до окончания времени тестирования вы можете их уточнить.
          <div class="test-welcome-button">
              <a href="/" class="button button-blue button-round">Закончить и вернуться на главную</a>
          </div>
        <? endif ?>
      </center>
  </div>
</div>

<div class="question-form">

  <div class="question-form-timer" :class="formActive ? 'active' : 'inactive'">
      <div class="question-form-timer-icon" :class="timer > 0 ? 'is-rotating' : ''">
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/assetsimages/sand-clock.svg'; ?>
      </div>
      <div v-if="timer > 0">
          Осталось
          <div class="question-form-timer-val">
              <span v-if="timer > 60">
                  {{ Math.floor(timer/60) }} мин.
              </span>
              <span v-else>
                  {{ timer }} сек.
              </span>
          </div>
      </div>
      <div v-else>
          <div class="question-form-timer-val">
              <small>
                  время вышло
              </small>
          </div>
      </div>
  </div>

  <form action="/ajax/test/submit/" method="post" class="question-form-step active" data-vv-scope="form-1">
      <div class="question-form-group">
          <label for="specialty" class="question-form-label question-form-label-small question-form-title-2">
            Кем бы вы хотели стать после окончания ВШО?
            <sup class="question-form-required">*</sup>
          </label>
          <div class="question-form-select">
            <select name="specialty" required>
              <option value="">Выберите специальность</option>

              <?
                $APPLICATION->IncludeComponent("bitrix:news.list", "hso-select", array(
                    "IBLOCK_ID" => "19",
                    "NEWS_COUNT" => "30",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",            
                    "SORT_BY2" => "ID",
                    "SORT_ORDER2" => "ASC",
                    "FIELD_CODE" => array(),
                    "PROPERTY_CODE" => array(),
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
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "selected" => $testInfo['data']['specialty']
                  ),
                  false
                );
              ?>
            </select>     
          </div>
      </div>

      <?
        $APPLICATION->IncludeComponent("bitrix:news.list", "hso-test", array(
            "IBLOCK_ID" => "17",
            "NEWS_COUNT" => "30",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",            
            "SORT_BY2" => "ID",
            "SORT_ORDER2" => "ASC",
            "FIELD_CODE" => array(),
            "PROPERTY_CODE" => array("*"),
            "SET_TITLE" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PARENT_SECTION" => $testInfo['variant'],
            "PARENT_SECTION_CODE" => "",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "main",
            "CACHE_TYPE" => "N",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "answers" => $testInfo['data']['test']
          ),
          false
        );
      ?>

      <div class="question-form-step-buttons">
          <button type="submit" class="button button-round button-orange">Отправить решение</button>
      </div>
  </form>
</div>
