<?php
  require_once("partials/navigation.php");
  $current="index.php";
?>

<!DOCTYPE html>
<html>

  <?php require_once("partials/head.php"); ?>

  <body>

    <div class="container d-flex flex-wrap big-c">
      <?php require_once("partials/navbar.php"); ?>


  <!-- JUMBOTRON INFO DE LA WEB -->
  <div class="jumbotron jumbotron-fluid row">
      <h1 class="display-3 col-12">Eventr</h1>
      <p class="lead col-12">Lorem ipsum eventdolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="opciones col-12 d-flex justify-content-around ">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register-modal">Registrate</button>
      <button type="button" class="btn btn-secondary btn-lg">Conocé más</button>
    </div>
  </div>

 <!-- ARTISTAS DESTACADOS -->
    <section class="vip-products row">
      <div class="card col-12 col-md-6 col-lg-4">
        <img class="card-img-top" src="images/hot-since.jpg" alt="artista01">
        <div class="card-body">
          <h4 class="card-title">HOT SINCE '82</h4>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe
          </p>
          <a href="#!" class="btn">ver mas</a>
        </div>
      </div>
      <div class="card col-12 col-md-6 col-lg-4">
        <img class="card-img-top" src="images/nick-curly.jpg" alt="artista02">
        <div class="card-body">
          <h4 class="card-title">NICK CURLY</h4>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe
          </p>
          <a href="#!" class="btn">ver mas</a>
        </div>
      </div>
      <div class="card col-12 col-md-6 col-lg-4">
        <img class="card-img-top" src="images/john-digweed.jpg" alt="artista03">
        <div class="card-body">
          <h4 class="card-title">JOHN DIGWEED</h4>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe
          </p>
          <a href="#!" class="btn">ver mas</a>
        </div>
      </div>
    </section>
  </div>
<?php require_once("partials/footer.php"); ?>
<?php require_once("partials/script-imports.php"); ?>

  </body>

  </html>
