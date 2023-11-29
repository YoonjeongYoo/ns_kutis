<?php
// POST 요청으로 받은 데이터 확인
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 'null';
$pw = isset($_REQUEST['pw']) ? $_REQUEST['pw'] : 'null';

// 받은 데이터를 출력
echo "Received ID: $id<br>";
echo "Received Password: $pw";
?>