<?php
// POST 요청으로 받은 데이터 확인
$id = isset($_POST['id']) ? $_POST['id'] : 'null';
$pw = isset($_POST['pw']) ? $_POST['pw'] : 'null';

// 받은 데이터를 출력
echo "Received ID: $id<br>";
echo "Received Password: $pw";
?>