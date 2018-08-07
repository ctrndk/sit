<?php
date_default_timezone_set("Asia/Jakarta");
function read ($length='255') 
{ 
   if (!isset ($GLOBALS['StdinPointer'])) 
   { 
      $GLOBALS['StdinPointer'] = fopen ("php://stdin","r"); 
   } 
   $line = fgets ($GLOBALS['StdinPointer'],$length); 
   return trim ($line); 
} 
function add(){
   $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://activity.wshareit.com/activity/luckyDraw");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"api_version\":1,\"os_version\":\"\",\"app_version\":4040528,\"app_id\":\"com.lenovo.anyshare.gps\",\"screen_width\":1080,\"screen_height\":1920,\"country\":\"ID\",\"net\":\"\",\"lang\":\"in\",\"os_type\":\"android\",\"deviceId\":\"a.d7d22f8d2c762237\",\"identity_id\":\"ff42b8ed2cbb42d0839d0aa1bf4c9848\",\"trace_id\":\"a4b29a3a-8cd0-45fb-b481-303b69cd7102\"}");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] =  "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; Redmi Note 3 Build/GGXFG; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/63.0.3239.111 Mobile Safari/537.36";
    $headers[] =  "Content-Type: application/json;charset=UTF-8";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    $err = curl_error($ch);
    $json = json_decode($result, true);
    curl_close($ch);
    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
    echo $res = ' Response : ' .$json['returnCode'];
    echo $type = ','.$json['result']['name'].'!' ;
    }
}

echo "Input Jumlah: ";
$jumlah = read();

for ($x = 0; $x <= $jumlah; $x++){
   echo '$x'.'. ';
    $go = add();
    echo ' '. date("H:i:s").  ' ' .$go. "\n";
}


echo "\nTugas Selesai bos... \nJumlah : ".$jumlah;
echo "\nhttps://github.com/ctrndk/sit";
echo "\n====================================\n";
