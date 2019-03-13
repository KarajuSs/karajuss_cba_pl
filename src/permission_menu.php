<?php
  if($ranga == 1) {
    echo '<div id="PA"><a href="admin/pa.php">Panel administracyjny</a></div>';
  } else if($ranga == 1 || $ranga == 2) {
    echo '<div id="PM"><a href="admin/pm.php">Panel moderatora</a></div>';
  }
  include('src/menu.php');
?>
