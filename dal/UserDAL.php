<?php
$baseName = __DIR__; //Library/WebServer/Documents/post_api/
$baseName = str_replace('dal', '', $baseName);

require_once $baseName.'/Connect.php';

class UserDAL extends Connect
{

    function login ($payload)
    {
        //var_dump($payload);
        $rs = $this->pdo->query('SELECT id,nickname FROM users WHERE nickname="'.$payload['nickname'].'" AND pwd="'.md5($payload['pwd']).'"');
        //var_dump($rs->fetchAll(PDO::FETCH_ASSOC));
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }

    function signup ($payload)
    {
        try {
            $stm = $this->pdo->prepare('INSERT INTO users(nickname,pwd) 
                            VALUES(:nickname,:pwd)');
            $stm->bindParam(':nickname', $nickname);
            $stm->bindParam(':pwd', $pwd);
            $nickname = $payload['nickname'];
            $pwd = md5($payload['pwd']);
            $stm->execute();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
        return true;
    }
}

?>