<?php
  session_start();
  $STR = unserialize($_SESSION['stroka']);
  echo $STR;
 ?>

<!DOCTYPE html> 
<html>
  <body>
    - десериализованная строка:
  </body>
</html>