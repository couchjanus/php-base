<?php 
  
  function redirect($url, $statusCode = 303)
    {
       header('Location: ' . $url, true, $statusCode);
       die();
    }
    

   $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');
   
   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   if ($connection){

    if( $_POST["title"] && $_POST["content"] ) {

        $sth = $connection->prepare("DELETE FROM posts WHERE id = :ID");

        $stmt->bindParam(':ID', $_POST['id'], PDO::PARAM_INT);   
        $sth->execute();

        redirect("/admin");
      }  
      
   }

?>