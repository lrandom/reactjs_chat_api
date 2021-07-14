<?php
require_once './../header.php';
$baseName = __DIR__; //Library/WebServer/Documents/post_api/
$baseName = str_replace('api/messages', '', $baseName);
require_once $baseName.'/dal/MessageDAL.php';//Library/WebServer/Documents/post_api/dal/PostDAL.php
$httpMethod = $_SERVER['REQUEST_METHOD'];
$messageDAL = new MessageDAL();
switch ($httpMethod) {
    case 'GET':
        if (isset($_GET['id'])) {
            //lấy về bản ghi mới nhất mà lớn hơn id
            echo json_encode($messageDAL->getUpdatedMessages($_GET['id']));
        } else {
            echo json_encode($messageDAL->getLatestMessages());
        }
        break;

    case 'POST':
        //thêm 1 tin nhắn vào CSDL
        $data = json_decode(file_get_contents("php://input"), true);
        if ($messageDAL->add($data)) {
            echo json_encode(['status' => 'success']);
        } else {
            http_response_code(500);
            echo json_encode(['status' => 'failed']);
        }
        break;
}
?>