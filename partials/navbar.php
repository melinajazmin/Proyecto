<?php require_once("modales.php"); ?>
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark row w-100">

  <a class="navbar-brand display-1 font-weight-bold col-4" href="index.php">Eventr</a>
  <button class="navbar-toggler btn-menu font-weight-bold text-white col-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-white font-weight-bold"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav d-flex justify-content-end  ml-5">
        <?php foreach ($navigation as $url => $nombre) : ?>
          <li class="nav-item">
            <a class="n-link" href="<?= $url==$current ? "" : $url ?>"><?=$nombre?></a>
          </li>
        <?php endforeach; ?>
      <!-- <li class="nav-item">
        <a class="n-link" href="#" data-toggle="modal" data-target="#register-modal">Registrate</a>
      </li> -->
      <li class="nav-item">
        <a class="n-link" href="#" data-toggle="modal" data-target="#login-modal">Ingresa</a>
      </li>
    </ul>

  </div>
</nav>
<!--/navbar  -->
