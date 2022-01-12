<?php
require_once("./index.php");
//MAKING A POST REQUEST
$arry = [
    'page_id' => '2',
    'title'=> 'Men\'s Wisdom',
    'content' => 'The Blindspot of players',
];
consume('http://127.0.0.1:8000/api/posts', 'POST', $arry, 'application/json');
?>