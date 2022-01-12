<?php

 function consume($url, $method='GET', $arr=[], $type=['Content-Type'=>'application/json']){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER,$type);
	if($method!= 'GET'){
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $arr);
	}
	$response = curl_exec($curl);
	if (curl_errno($curls)) {
        echo 'Error connecting to server:' . curl_error($curls);
    }
	$response = json_decode($response);
	return $response;
	}
?>