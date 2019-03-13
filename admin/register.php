<?php
  session_start();
  include("db_login.php");

  $login = mysqli_real_escape_string(htmlspecialchars($_POST["login"]));
  $haslo = mysqli_real_escape_string(htmlspecialchars(md5($_POST["pass"])));
  $email = mysqli_real_escape_string(htmlspecialchars($_POST["email"]));

  $zapytanie = mysqli_query($con, "INSERT INTO users(ID, login, password, email) VALUES ('', '$login', '$haslo', '$email')");
  header('Location: ../index.php');
?>
