<?php 
  $connection = new PDO('mysql:host=localhost;dbname=webdev;charset=utf8', 'root', 'ghbdtn');
      
  if ($connection){

    $sth = $connection->prepare("SELECT * FROM posts where id=$id");
    $sth->execute();

/* Примеры различных режимов работы PDOStatement::fetch */
// print("PDO::FETCH_ASSOC: ");
// print("Возвращаем следующую строку в виде массива, индексированного именами столбцов\n");
// $result = $sth->fetch(PDO::FETCH_ASSOC);
// print_r($result);
// print("\n");

print("PDO::FETCH_BOTH: ");
// print("Возвращаем следующую строку в виде массива, индексированного как именами столбцов, так и их номерами\n");
$result = $sth->fetch(PDO::FETCH_BOTH);
// print_r($result);
// print("\n");

// print("PDO::FETCH_LAZY: ");
// print("Возвращаем следующую строку в виде анонимного объекта со свойствами, соответствующими столбцам\n");
// $result = $sth->fetch(PDO::FETCH_LAZY);
// print_r($result);
// print("\n");

// print("PDO::FETCH_OBJ: ");
// print("Возвращаем следующую строку в виде анонимного объекта со свойствами, соответствующими столбцам\n");
// $result = $sth->fetch(PDO::FETCH_OBJ);
// print $result->name;
// print("\n");

// print_r($result);

}  
  
  require_once realpath(__DIR__).'/../views/show.php';
?>