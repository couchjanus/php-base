<?php

switch ($actionName) {
 case 'index':

  $db = makeConnection();
  $sql = 'SELECT * FROM posts';
  
  $data['result'] = $db->query($sql);
  $data['title'] = "HEllo There!";
  
  render('blog/index', $data);
  break;
}
?>
