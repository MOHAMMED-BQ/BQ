<?php
ob_start();
$API_KEY = 'TOKEN';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $ckkkk = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ckkkk";
        $ckkkk = file_get_contents($url);
        return json_decode($ckkkk);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
if($message->text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"By : @PUBGQBZ",
]);
}
