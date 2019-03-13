<?php
  session_start();
  ob_start();
  include("db_login.php");

  $login = $_POST['login'];
  $haslo = md5($_POST['haslo']);

  $zapytanie = mysqli_query($con, "SELECT login FROM users WHERE login = '$login'");
  $wynik_z = mysqli_fetch_array($zapytanie);

  if($wynik_z[0] != $login){
    echo 'User nie istnieje';
  } else {
    $zapytanie = mysqli_query($con, "SELECT password FROM users WHERE login = '$login'");
    $wynik_z = mysqli_fetch_array($zapytanie);
    if($haslo == $wynik_z[0]){
      $zapytanie = mysqli_query($con, "SELECT ID, uprawnienia, login, email, avatar, imie, nazwisko FROM users WHERE login = '$login'");
      $wynik_z = mysqli_fetch_array($zapytanie);

      $_SESSION["zalogowany"] = 1;
      $_SESSION["user_id"] = $wynik_z[0];
      $_SESSION["user_rang"] = $wynik_z[1];
      $_SESSION["user_login"] = $wynik_z[2];
      $_SESSION["user_email"] = $wynik_z[3];
      $_SESSION["user_avatar"] = $wynik_z[4];
      $_SESSION["user_name"] = $wynik_z[5];
      $_SESSION["user_lastname"] = $wynik_z[6];

      header('Location: ../index.php');
    } else {
      echo 'Błędne hasło!';
    }
  }
  ob_end_flush();
?>
