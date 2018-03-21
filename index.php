<?php
  require_once("partials/navigation.php");
  $current = basename(__FILE__);
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
      <p class="lead col-12">Es una plataforma que permite tanto a DJ's como a organizadores de eventos encontrarse para generar shows increíbles. Los DJ tendrán la posibilidad de crearse un perfil con todos sus datos, incluyendo las redes sociales con sus sets, fotos y experiencias. Así mismo tendrán un calendario donde podrán poner su disponibilidad para tocar. Los organizadores de eventos, nuestros principales clientes, tendrán la posibilidad de buscar DJ's por nombre, género o disponibilidad de fecha.</p>

    <div class="opciones col-12 d-flex justify-content-around ">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register-modal">Registrate</button>
      <button type="button" href="quienes.php" class="btn btn-secondary btn-lg">Conocé más</button>
    </div>
  </div>

 <!-- ARTISTAS DESTACADOS -->
    <section class="vip-products row">
      <div class="card col-12 col-md-6 col-lg-4">
        <img class="card-img-top" src="images/hot-since.jpg" alt="artista01">
        <div class="card-body">
          <h4 class="card-title">HOT SINCE '82</h4>
          <p class="card-text">
            El dj y productor británico Daley Padley aka Hot Since 82 despegó artísticamente en el 2011, manufacturando música house de primer nivel ya sea en Ibiza, lugar donde fue descubierto, o en los mejores festivales electrónicos del mundo como Creamfields o WMC.
          </p>
          <a href="#!" class="btn">ver mas</a>
        </div>
      </div>
      <div class="card col-12 col-md-6 col-lg-4">
        <img class="card-img-top" src="images/nick-curly.jpg" alt="artista02">
        <div class="card-body">
          <h4 class="card-title">NICK CURLY</h4>
          <p class="card-text">
            Desde su memorable estrellato en el 2008, Nick Curly se ha establecido así mismo como uno de los actos internacionales con más presencia de la era moderna de la música house.
          </p>
          <a href="#!" class="btn">ver mas</a>
        </div>
      </div>
      <div class="card col-12 col-md-6 col-lg-4">
        <img class="card-img-top" src="images/john-digweed.jpg" alt="artista03">
        <div class="card-body">
          <h4 class="card-title">JOHN DIGWEED</h4>
          <p class="card-text">
            Es un disc jockey y productor musical. Comenzó a hacer mezclas alrededor de los 13 años de edad. Su primer trabajo formal como DJ fue en el club Renaissance en Londres después de que Alexander Coe, alias Sasha, escuchara su demo y lo aprobara.
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
