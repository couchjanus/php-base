<?php 
  
  function redirect($url, $statusCode = 303)
    {
       header('Location: ' . $url, true, $statusCode);
       die();
    }
   
   $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');
   
   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $connection->prepare("DELETE FROM posts WHERE id = :ID");

    $sth->bindParam(':ID', $_GET['id'], PDO::PARAM_INT);   
    $sth->execute();

    redirect("/admin");

?>