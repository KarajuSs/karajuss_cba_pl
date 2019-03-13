<?php
  session_start();
  ob_start();
  include('../admin/db_login.php');

  $id = $_SESSION["user_id"];
  $imie = $_POST['imie'];
  $nazwisko = $_POST['nazwisko'];
  $email = $_POST['email'];

  $_SESSION['user_name'] = $imie;
  $_SESSION['user_lastname'] = $nazwisko;
  $_SESSION['user_email'] = $email;

  $sql = "UPDATE users SET imie = '$imie', nazwisko = '$nazwisko', email = '$email' WHERE ID = '$id'";

  if (mysqli_query($con, $sql)) {
    echo "Rekord został poprawnie zmieniony";
    header("Location: index.php");
  } else {
    echo "Nie udało się dodać nowego rekordu do bazy danych: <br/>" . mysqli_error($con);
  }

  ob_end_flush();
?>
