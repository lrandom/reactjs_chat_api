<?php
require_once './user.php';
//thêm 1 tin nhắn vào CSDL
$data = json_decode(file_get_contents("php://input"), true);
$userDAL = new UserDAL();
$user = $userDAL->login($data);
if ($user != null && count($user) > 0) {
    echo json_encode(['user' => $user[0]]);
} else {
    http_response_code(401);
    echo json_encode(['status' => 'UnAuthorized']);
}
?>