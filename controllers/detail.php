<?php 
  $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');
      
  if ($connection){

    $sth = $connection->prepare("SELECT * FROM posts where id=$id");
    $sth->execute();

print("PDO::FETCH_BOTH: ");

$result = $sth->fetch(PDO::FETCH_BOTH);

}  
  
  require_once realpath(__DIR__).'/../views/show.php';
?>