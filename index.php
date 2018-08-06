<?php
date_default_timezone_set("Asia/Jakarta");

function add($code){
   $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://activity.wshareit.com/activity/addDrawChance");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"api_version\":1,\"os_version\":\"\",\"app_version\":4040528,\"app_id\":\"com.lenovo.anyshare.gps\",\"screen_width\":1080,\"screen_height\":1920,\"country\":\"ID\",\"net\":\"JK\",\"lang\":\"in\",\"os_type\":\"android\",\"deviceId\":\"m.acc1ee4b0715\",\"identity_id\":\"4b15871eda594c60b7bec5d452b54c73\",\"trace_id\":\"a9f4ccc3-a938-421f-abd4-388c040de1d2\",\"inCode\":\"".$code."\",\"share\":2}");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    
    $headers = array();
    $headers[] = "Host: activity.wshareit.com";
    $headers[] = "Accept: application/json, textozilla/5.0 (Linux; Android 5.1.1; Redmi Note 3 Build/LMY47V; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/51.0.2704.81 Mobile Safari/537.36";
    $headers[] = "Content-Type: application/json;charset=UTF-8";
    $headers[] = "Referer: http://cdn.ushareit.com/w/active/upgrade_lottery/index.html";
    $headers[] = "Accept-Language: id-ID,en-US;q=0.8";
    $headers[] = "X-Requested-With: com.lenovo.anyshare.gps";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if(curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    
    return $result;
    exit(print_r($result));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SpinIT Gan</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="id" />
	<meta name="description" content="Spin Ghost" />
</head>
<body>
	<!-- Create a div which will be the canvasloader wrapper -->	
	<div id="canvasloader-container" class="wrapper"></div>
	<center>
		<img width="100" height="100" src="https://lh3.googleusercontent.com/uAeFq9ZCW7tdbDsub6Fecf7mhOngknxWwVhwjjU5GbtBfBuJaKK5hNGlXtmaCMGvN6Pl=s180">
		<hr>
		<form method="post" action="">
		  <input type="text" name="kode" placeholder="kode">
		  <input type="number" name="jumlah" placeholder="Jumlah">
		  <input type="submit" name="submit">
		</form>
		<hr>
	</center>
	
<?php 
if(isset($_POST['submit'])){
	if(!empty($_POST['kode']) && !empty($_POST['jumlah'])){
	  $kode=$_POST['kode'];
	  $jumlah=$_POST['jumlah'];
	  echo"<center>";
	  echo "Kode : ".$kode." | Jumlah : ".$jumlah;
	  echo "</center><hr>";
	for ($x = 0; $x <= $jumlah-1; $x++){
	    $go = add($kode);
	    echo "<center><font color='green'>";
	    echo $x+1;
	    echo ". TIME : <b>";
	    echo date("H:i:s").$go."</b></font> <font color='orange' >  Status : <b>Sending!</b><font color='green' ><b> - OK</b></font> <br></center>";
	}
	echo "<hr>";
	echo "<center><pre><font color='#000000' >Tugas Selesai bos... <br><b>Kode : ".$kode."   |   Jumlah : ".$jumlah."</b></font>";
	echo "<br> <a href='https://github.com/ctrndk/sit'>https://github.com/ctrndk/sit</a>";
	echo "<hr></pre><font color='green' ><b>Thanks to @SGBTeam</b></font></center>";

	}
else{
  echo "<center><font color='#ff0000' ><b>LoL Kau Gan!</font></b></center>";
}
}

?>
</body>
</html>
