<?php
$baseName = __DIR__; //Library/WebServer/Documents/post_api/
$baseName = str_replace('dal', '', $baseName);

require_once $baseName.'/Connect.php';

class MessageDAL extends Connect
{
    //lay ve 10 ban ghi moi nhat
    function getLatestMessages ()
    {
        $rs = $this->pdo->query('SELECT * FROM messages ORDER BY id DESC LIMIT 10');
        return array_reverse($rs->fetchAll(PDO::FETCH_ASSOC));
    }

    function getUpdatedMessages ($id)
    {
        $rs = $this->pdo->query('SELECT * FROM messages WHERE id >'.$id);
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }

    function add ($payload)
    {
        try {
            $stm = $this->pdo->prepare('INSERT INTO messages(nickname,message) 
                            VALUES(:nickname,:message)');
            $stm->bindParam(':nickname', $nickname);
            $stm->bindParam(':message', $message);
            $nickname = $payload['nickname'];
            $message = $payload['message'];
            $stm->execute();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
        return true;
    }
}

?>