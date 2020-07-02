<?php

define('WB_TOKEN' , '7f8e95b213e10cf43eb6f285665f095d5efbee60e6c17');
define('WB_FROM', '59892763897');

function sendMensajeCurl($to, $msg){

    $to = filter_var($to, FILTER_SANITIZE_NUMBER_INT);
    if(empty($to)) return false;
    $msg = urlencode($msg);
    $custom_uid = "unica-" . time();
    $url = 'https://www.waboxapp.com/api/send/chat?token='.WB_TOKEN."&uid=".WB_FROM."&to=".$to."&custom_uid=".$custom_uid."&text=".$msg  ;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);
    curl_close($curl);
    if($result) return json_decode($result);
    return false;
    echo $result;
}

?>