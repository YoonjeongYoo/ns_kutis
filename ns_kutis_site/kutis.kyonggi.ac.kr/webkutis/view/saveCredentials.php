<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// POST 요청으로 받은 데이터 확인
$id = isset($_POST['id']) ? $_POST['id'] : '';
$pw = isset($_POST['pw']) ? $_POST['pw'] : '';

// 받은 데이터를 출력
echo "Received ID: $id<br>";
echo "Received Password: $pw";
?>

</body>
</html>