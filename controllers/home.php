<?php

switch ($actionName) {
 case 'index':

  $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');

  if ($connection){
    $sql = 'SELECT * FROM posts';
    $result = $connection->query($sql);
  }
  $title = "HEllo";
  require_once realpath(__DIR__).'/../views/home/index.php';
  break;
}
?>
