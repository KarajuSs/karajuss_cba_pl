<?php include("src/head.php"); ?>
<body onload="javascript:zegar()">
  <span style="text-align:center; color:deepskyblue;"><h1 id="czas" class="display-4" style="opacity: 0.4;"></h1></span>
  <hr />
  <div id="wrapper">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-7">
        <div class="jumbotron">
          <h1 class="display-4">Strona WWW</h1>
          <p>Najnowsza praca stworzona hobbystycznie przez KarajuSs'a</p>
          <p class="lead">
            <a href="quest.php"><button type="button" class="btn btn-lg btn-primary">Witryna dla gości</button></a>
          </p>
        </div>
      </div>
      <div class="col-xs-6 col-md-4" style="padding-top: 50px; padding-right: 50px;">
        <h3 class="display-4">Zaloguj się</h3>
        <form method="post" action="admin/login.php">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-user fa-fw"></i></span>
            </div>
            <input type="text" class="form-control" name="login" placeholder="Nazwa użytkownika" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key fa-fw"></i></span>
            </div>
            <input type="password" class="form-control" name="haslo" placeholder="Hasło" aria-label="Password" aria-describedby="basic-addon1">
          </div>

          <input type="submit" class="btn btn-primary" value="Zaloguj się" />
          <input type="button" class="btn btn-primary" value="Zarejestruj się" id="register" />
        </form>
      </div>
    </div>
    <div id="register_dialog" title="Załóż konto">
      <form method="post" action="admin/register.php">
        <input type="text" class="form-control" name="login" placeholder="Nazwa użytkownika" />
        <input type="password" class="form-control" name="pass" placeholder="Hasło" />
        <input type="text" class="form-control" name="email" placeholder="E-Mail" /><br />

        <input type="submit" class="btn btn-primary" value="Zarejestruj się!" />
      </form>
    </div>
  </div>
</body>
