<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $pw = $_POST["pw"];

    // 받아온 데이터를 처리하는 코드 예시
        echo "ID: " . $id . "<br>";
        echo "PW: " . $pw;
    }
?>

</body>
</html>