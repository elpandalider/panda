<?php
echo "
<nav class='navbar navbar-fixed-top navegador' role='navigation'>
  <div class='container'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar-collapse-panda' aria-expanded='false'>
        <span class='sr-only'>Navegacion</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='index.php'>PANDA</a>
    </div>
    <div class='collapse navbar-collapse' id='navbar-collapse-panda'>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='index.php'>Inicio</a></li>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle navegador' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> TDAH  <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a class='li_drop' href='tdah.php'>¿Que es TDAH?</a></li>
            <li><a class='li_drop' href='causas.php'>Causas</a></li>
            <li><a class='li_drop' href='#'></a></li>
          </ul>
        </li>
        <li class='navegador'><a href='sintomas.php'>Sintomas</a></li>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle navegador' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> Consejos  <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a class='li_drop' href='consejos1.php'>Consejos para organizarse</a></li>
            <li><a class='li_drop' href='consejos2.php'>Hablar sobre TDA</a></li>
            <li><a class='li_drop' href='consejos3.php'>Gestion del tiempo</a></li>
          </ul>
        </li>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle navegador' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> Actividades  <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='juegos.php'>Juegos</a></li>
            <li><a href='Dinamicas.php'>Dinamicas</a></li>
            <li><a href='videos.php'>Videos</a></li>
          </ul>
        </li>
        <li><button  onClick='location.href=\"test.php\"' type='button' class='btn btn-raised btn-primary navbar-btn'> TEST</button></li>
      </ul>

    </div>
  </div>
</nav>
";
