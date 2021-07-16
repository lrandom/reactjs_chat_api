<?php
require_once './user.php';
//thêm 1 tin nhắn vào CSDL
$data = json_decode(file_get_contents("php://input"), true);
$userDAL = new UserDAL();
if ($userDAL->signup($data)) {
    echo json_encode(['status' => 'success']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'failed']);
}
?>