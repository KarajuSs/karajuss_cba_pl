<?php
  session_start();
  ob_start();
  include("../src/head.php");
  include("../admin/shortcuts_session.php"); // skróty sesji

  if($_SESSION["zalogowany"] == 1) {
    require('../src/permission_menu.php');
?>

<?php
  } else {
    include('../first_page.php');
  }

  include('../src/footer-scripts.php');
  ob_end_flush();
?>
</html>
