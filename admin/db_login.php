<?php
  include("../src/head.php");

  DEFINE ('DB_USER', 'root');
  DEFINE ('DB_PASSWD', '');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'mysql');

// Logowanie do bazy danych za pomocą MySQLi
  $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
  if (!$con) {
      die('Nie mogę połączyć się z bazą danych: ' . mysqli_connect_error());
  }
  echo '<!- Połączenie zakończyło się sukcesem -->';
?>
