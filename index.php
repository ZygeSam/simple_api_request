<?php
// $curl =  curl_init();
// curl_setopt($curl, CURLOPT_URL, 'http://127.0.0.1:8000/api/posts');
// curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// $response = curl_exec($curl);
// $data = json_decode($response,true);

// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_POSTFIELDS, [
//                'page_id' => '1',
//                'title'=> 'A Woman\'s Scorned',
//                'content' => 'Trilogy of Aduke',
//            ]);
// $response = curl_exec($curl);
//	curl_close
// return $response;


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
	$arry = [
               'page_id' => '2',
               'title'=> 'Men\'s Wisdom',
               'content' => 'The Blindspot of players',
           ];
	// consume('http://127.0.0.1:8000/api/posts', 'POST', $arry, 'application/json');

           consume('http://127.0.0.1:8000/api/posts');
?>