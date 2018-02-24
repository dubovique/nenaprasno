<?php
define('STOP_STATISTICS', true);
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

if ($USER->IsAuthorized()){
  $userData = getTestInfo($USER->GetID());
  if ($userData['accepted']){
    $answers = [];
    foreach($_REQUEST['tactics'] as $k => $v){
      $answers[intval($k)]['tactics'] = htmlspecialchars($v); 
    }
    foreach($_REQUEST['diagnoses'] as $k => $v){
      $answers[intval($k)]['diagnoses'] = htmlspecialchars($v); 
    }

    $answers['specialty'] = htmlspecialchars($_REQUEST['specialty']);

    endTest($userData, $answers);

    LocalRedirect('/test/');
  }
  else{
    CHTTP::SetStatus("403 Forbidden");  
  }
}
else{
  CHTTP::SetStatus("404 Not Found");
}
?>
