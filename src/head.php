<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strona stworzona czysto hobbystycznie">
    <meta name="author" content="KarajuSs">
    <title>Strona WWW</title>

    <link rel="stylesheet" href="../../karajuss_cba_pl_v1/src/css/style.css" />
    <link rel="stylesheet" href="../../karajuss_cba_pl_v1/admin/src/fontawesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="../../karajuss_cba_pl_v1/src/css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../../karajuss_cba_pl_v1/src/css/jquery-ui.css" />

    <script src="../../karajuss_cba_pl_v1/src/js/jquery-3.3.1.js"></script>
    <script src="../../karajuss_cba_pl_v1/src/js/jquery-ui.js"></script>
    <script src="../../karajuss_cba_pl_v1/src/js/index_script.js"></script>
    <script src="../../karajuss_cba_pl_v1/src/js/jquery.jrumble.1.3.min.js"></script>
    <script src="../../karajuss_cba_pl_v1/admin/src/js/panel_script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  </head>
  <script>
    function zegar(){
        d = new Date();
        var h=d.getHours(),m=d.getMinutes(),s=d.getSeconds(),r;
        r=(h<10?"0"+h:h)+":"+(m<10?"0"+m:m)+":"+(s<10?"0"+s:s);

        document.getElementById('czas').innerHTML=r;
        setTimeout("zegar()", 1000);
    }
  </script>
