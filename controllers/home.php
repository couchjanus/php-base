<?php

switch ($actionName) {
 case 'index':

  /*
  $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');

  if ($connection){
    $sql = 'SELECT * FROM posts';
    $result = $connection->query($sql);
  }
  */
  
  $db = makeConnection();
  
  $sql = 'SELECT * FROM posts';
  
  $data['result'] = $db->query($sql);

  $data['title'] = "HEllo There!";
  
  render('home/index', $data);
  // require_once realpath(__DIR__).'/../views/home/index.php';
  break;
}
?>
