<body>
  <?php
    if($ranga == 1) {
      echo '<div id="PA"><a href="admin/pa.php">Panel administracyjny</a></div>';
    } else if($ranga == 1 || $ranga == 2) {
      echo '<div id="PM"><a href="admin/pm.php">Panel moderatora</a></div>';
    }
    include('src/menu.php');
  ?>
  <div id="rozmiar_slidera"><?php include("admin/functions/slajdy.php");?></div>
  <?php
    echo 'Witaj na witrynie, '.$login.' :)<br/>';
    echo 'Twoja aktualna ranga to: '.$ranga.', czyli ';
    if($ranga==1) echo '<font color="red">administrator</font>.';
    else if($ranga==2) echo '<font color="lime">moderator</font>.';
  ?>



  <div id="konto_dialog" title=" Zarządzanie kontem">
    <form method="post" action="konto.php">
      <div class="form-group">
        <b>Imię:</b> <input type="text" class="form-control" name="imie" value="<?php echo $_SESSION['user_name'] ?>">
        <b>Nazwisko:</b> <input type="text" class="form-control" name="nazwisko" value="<?php echo $_SESSION['user_lastname'] ?>">
        <b>E-Mail:</b> <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user_email'] ?>">
        <b>Twoja ranga:</b> <?php if($ranga==1) echo '<font color="red">Administrator</font>'; else if($ranga==2) echo '<font color="lime">Moderator</font>'; else echo 'Użytkownik'; ?>
      </div>
      <input type="submit" class="form-control" value="Zapisz" />
    </form>
  </div>
</body>
