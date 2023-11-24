<?php
// // 서버에서 전송된 JSON 데이터를 읽습니다.
// $inputJSON = file_get_contents('php://input');
// $input = json_decode($inputJSON, true);

// // ID와 PW를 출력합니다. (실제로는 이 정보를 데이터베이스에 저장하는 것이 안전합니다.)
// echo 'ID: ' . htmlspecialchars($input['id']) . '<br>';
// echo 'PW: ' . htmlspecialchars($input['pw']) . '<br>';

// // 실제로는 데이터를 저장하고 응답을 보낼 때는 JSON 형식으로 응답합니다.
// $response = array('message' => 'Credentials received successfully');
// echo json_encode($response);

echo $_POST['id'];
echo $_POST['pw'];
?>