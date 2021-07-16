<?php
$baseName = __DIR__; //Library/WebServer/Documents/post_api/
$baseName = str_replace('dal', '', $baseName);

require_once $baseName.'/Connect.php';

class MessageDAL extends Connect
{
    //lay ve 10 ban ghi moi nhat
    function getLatestMessages ()
    {
        $rs = $this->pdo->query('SELECT *,messages.id as message_id FROM messages INNER JOIN users 
    ON messages.user_id = users.id ORDER BY messages.id DESC LIMIT 10');
        return array_reverse($rs->fetchAll(PDO::FETCH_ASSOC));
    }

    function getUpdatedMessages ($id)
    {
        $rs = $this->pdo->query('SELECT *,messages.id as message_id FROM messages INNER JOIN users 
    ON messages.user_id = users.id WHERE messages.id >'.$id);
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }

    function add ($payload)
    {
        try {
            $stm = $this->pdo->prepare('INSERT INTO messages(user_id,message) 
                            VALUES(:user_id,:message)');
            $stm->bindParam(':user_id', $userId);
            $stm->bindParam(':message', $message);
            $userId = $payload['user_id'];
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