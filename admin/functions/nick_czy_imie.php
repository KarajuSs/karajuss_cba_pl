<?php
  if($ranga == 1) {
    if($imie == "" || $imie == null)
      echo '<font color="red">'. $login .'</font>';
    else {
      echo '<font color="red">'. $imie . " " . $nazwisko.'</font>';
    }
  } else if($ranga == 2) {
    if($imie == "" || $imie == null)
      echo '<font color="lime">'. $login .'</font>';
    else {
      echo '<font color="lime">'. $imie . " " . $nazwisko.'</font>';
    }
  } else {
    if($imie == "" || $imie == null)
      echo $login;
    else {
      echo $imie . " " . $nazwisko;
    }
  }
?>
