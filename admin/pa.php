<?php
  session_start();
  ob_start();
  include("../src/head.php");
  include("../admin/shortcuts_session.php"); // skróty sesji

  DEFINE ('DB_USER', 'root');
  DEFINE ('DB_PASSWD', '');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'mysql');
  $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);

  if($_SESSION["zalogowany"] == 1) {
?>
<body>
  <?php include('../src/menu.php'); ?>
  <div id="box">
    <div id="wiad"> Witaj w panelu administracyjnym! </div>
    <hr/>
    <div id="lewy_panel_kontrolny">
      <ul>
        <li><a href=""> Sprawdz listę użytkowników </a></li>
        <li><a href=""> Test </a></li>
        <li><a href=""> Test </a></li>
        <li><a href=""> Test </a></li>
        <li><a href=""> Test </a></li>
        <li><a href=""> Test </a></li>
        <li><a href=""> Test </a></li>
        <li><a href=""> Test </a></li>
      </ul>
    </div>
    <div id="prawy_panel">
      <ol>
      <?php
        $zapyt="SELECT * FROM users;";
        $lista=mysqli_query($con,$zapyt);
        while($wiersz=mysqli_fetch_assoc($lista)){
          echo '<li>'.$wiersz['login'].' posiada uprawnienia typu: '.$wiersz['uprawnienia'].'</li>';
        }
      ?>
      <ol>
    </div>
  </div>
  <?php
    } else {
      header("Location: quest.php");
    }
    include('../src/footer-scripts.php');
    ob_end_flush();
  ?>
</body>
