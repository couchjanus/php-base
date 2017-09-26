<?php 
  $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');
   
   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   if ($connection){
    $sth = $connection->prepare("SELECT * FROM posts WHERE id = :ID");
    $sth->bindParam(':ID', $_GET['id'], PDO::PARAM_INT);   
    $result = $sth->execute();
   }
  require_once realpath(__DIR__).'/../../views/admin/update.php';
?>