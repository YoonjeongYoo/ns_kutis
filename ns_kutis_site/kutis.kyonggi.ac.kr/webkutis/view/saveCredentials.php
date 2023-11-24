<?php
// POST 요청으로부터 id와 pw를 받아옵니다.
$id = isset($_POST['id']) ? $_POST['id'] : '';
$pw = isset($_POST['pw']) ? $_POST['pw'] : '';

// 받아온 id와 pw를 출력합니다. (실제 운영 환경에서는 이렇게 출력하지 않는 것이 안전합니다.)
echo "ID: $id, PW: $pw";
?>