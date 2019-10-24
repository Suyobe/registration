<?php
	header("content-type:text/html;charset=utf-8"); //设置编码
	
        $time = time();
        $ip= $_SERVER['REMOTE_ADDR'];
		$ip  = '112.96.102.115'; //测试IP地址
	echo $ip;
	echo "<br/>";
	$html = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip='.$ip);  
	echo $html;
	echo "<br/>";
	 
	$html_array = json_decode($html,$assoc=true);
	$city = $html_array['data']['city'];
	echo $city;


?>
