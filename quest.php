<?php
  session_start();
  ob_start();
  include("src/head.php");
  include("admin/shortcuts_session.php"); // skróty sesji
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a id="rumble" class="navbar-brand" href="#">KarajuSs</a>
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
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <input type="button" class="form-control" value="Zaloguj się" id="logowanie" />
            <input type="button" class="form-control" value="Zarejestruj się" id="register" />
          </li>
        </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </form>
    </div>
  </nav>
  <div id="rozmiar_slidera"><?php include("admin/functions/slajdy.php");?></div>



  <div id="register_dialog" title="Załóż konto">
    <form method="post" action="admin/register.php">
      <input type="text" class="form-control" name="login" placeholder="Nazwa użytkownika" />
      <input type="password" class="form-control" name="pass" placeholder="Hasło" />
      <input type="text" class="form-control" name="email" placeholder="E-Mail" /><br />

      <input type="submit" class="btn btn-primary" value="Zarejestruj się!" />
    </form>
  </div>
  <div id="loguj_dialog" title="Logowanie">
    <form method="post" action="admin/login.php">
      <input type="text" class="form-control" name="login" placeholder="Nazwa użytkownika" />
      <input type="password" class="form-control" name="haslo" placeholder="Hasło" /><br />

      <input type="submit" class="btn btn-primary" value="Zaloguj się" />
    </form>
  </div>
  <?php
    include('src/footer-scripts.php');
    ob_end_flush();
  ?>
</body>
