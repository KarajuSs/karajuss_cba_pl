<ol name="lista">
  <?php
    $zapyt="SELECT * FROM users;";
    $lista=mysqli_query($con,$zapyt);
    while($wiersz=mysqli_fetch_assoc($lista)){
      echo '<li>'.$wiersz['login'].' posiada uprawnienia typu: '.$wiersz['uprawnienia'].'</li>';
    }
  ?>
</ol>
