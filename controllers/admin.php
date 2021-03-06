<?php

ob_start();

// define variables and set to empty values
// $result = false;
// $name = '';
// $lname = '';
// $email = '';
// $password = '';

switch ($actionName) {
    case 'index':
        $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');

        if ($connection){
            $sql = 'SELECT * FROM posts';
            $result = $connection->query($sql);
          }  

          
        require_once realpath(__DIR__).'/../views/admin/index.php';
       
        break;

    case 'create':
         require_once realpath(__DIR__).'/../views/admin/create.php';
        break;

    case 'edit':
   
        $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');
   
       $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       if ($connection){
        $sth = $connection->prepare("SELECT * FROM posts WHERE id = :ID");
        $sth->bindParam(':ID', $_GET['id'], PDO::PARAM_INT);   
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_BOTH);
        // var_dump($result);
       }
       require_once realpath(__DIR__).'/../views/admin/update.php';
       break;

    default:
        # code...
        echo "test";
        break;
}
