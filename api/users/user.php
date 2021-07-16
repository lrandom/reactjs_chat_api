<?php
require_once './../header.php';
$baseName = __DIR__; //Library/WebServer/Documents/post_api/
$baseName = str_replace('api/users', '', $baseName);
require_once $baseName.'/dal/UserDAL.php';//Library/WebServer/Documents/post_api/dal/PostDAL.php
?>