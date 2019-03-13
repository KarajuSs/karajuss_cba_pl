<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="rumble" class="navbar-brand" href="../index.php">KarajuSs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link linia" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link linia" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item linia" href="#">Action</a>
          <a class="dropdown-item linia" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item linia" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link linia disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      Witaj,
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="mr-sm-2 nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            ?> </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item linia" href="#" id="konto"><i class="fas fa-user fa-fw"></i> Konto</a>
            <a class="dropdown-item linia" href="logout.php"><i class="fas fa-sign-out-alt fa-fw"></i> Wyloguj</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item linia" href="#"><i class="fas fa-cog fa-spin"></i> Ustawienia</a>
          </div>
        </li>
      </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </form>
  </div>
</nav>
