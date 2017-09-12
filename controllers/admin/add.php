<?php 
  
  function redirect($url, $statusCode = 303)
    {
       header('Location: ' . $url, true, $statusCode);
       die();
    }
    
  if( $_POST["title"] && $_POST["content"] ) {

   $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');
   
   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   if ($connection){

        $sth = $connection->prepare("INSERT INTO posts (title,content) VALUES (:title,:content)");

        $sth->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
        $sth->bindParam(':content', $_POST['content'], PDO::PARAM_STR);
        $sth->execute();

        redirect("/admin");
      }  
      
   }

?>