<?php
  require_once("partials/navigation.php");
  $current="faq.php";
?>
<!DOCTYPE html>
<html>
  <?php require_once("./partials/head.php"); ?>
  <body>

<!-- CONTAINER -->
    <div class="container d-flex flex-wrap justify-content-center">
  <?php require_once("./partials/navbar.php"); ?>


<div id="accordion" class="col-xl-6 mb-5">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          ¿Qué es Eventr?
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Eventr es una plataforma que permite tanto a DJ's como a organizadores de eventos encontrarse para generar shows increíbles.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Soy DJ ¿Qué me brinda la plataforma?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Los DJ tendrán la posibilidad de crearse un perfil con todos sus datos, incluyendo las redes sociales con sus sets, fotos y experiencias. Así mismo tendrán un calendario donde podrán poner su disponibilidad para tocar.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            ¿Y si soy organizador?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Los organizadores de eventos, nuestros principales clientes, tendrán la posibilidad de buscar DJ's por nombre, género o disponibilidad de fecha.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          ¿Cuáles son los medios de pago?
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        Trabajamos con VISA, MasterCard y MercagoPago
      </div>
    </div>
  </div><div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            ¿Puedo contratar a más de un DJ por evento?
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        ¡Claro! Puedes contratar todos los que necesites, solo búscalos y agregalos a tu fecha ya creada.
      </div>
    </div>
  </div><div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Soy DJ y necesito cancelar la fecha, ¿puedo hacerlo? ¿Se me penaliza?
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
      Puedes hacerlo, en Eventr creemos en nuestros usuarios y no imponemos penalizaciones a nuestros clientes por las eventualidades que puedan tener. De todas maneras, siempre es conveniente avisar con la mayor antelación posible así el orgnaizador puede buscar otro DJ para su evento.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Soy organizador y necesito cancelar mi evento, ¿puedo? ¿Seré penalizado?
        </button>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
      <div class="card-body">
      Puedes hacerlo, en Eventr creemos en nuestros usuarios y no imponemos penalizaciones a nuestros clientes por las eventualidades que puedan tener. De todas maneras, siempre es conveniente avisar con la mayor antelación posible así los DJ pueden estar disponibles para otro evento.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Si tengo algún problema, ¿dónde me puedo comunicar?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Puedes contactarnos durante las 24hs a nuestro eMail, redes sociales o teléfonos
      </div>
    </div>
  </div>
</div>


    <div class="opciones col-12 d-flex justify-content-around mb-5 ">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register-modal">Registrate</button>
      <button type="button" class="btn btn-secondary btn-lg">Conocé más</button>
    </div>
  </div>

  </div>
  <!-- /CONTAINER -->

  <?php require_once("./partials/footer.php"); ?>

  <?php require_once("./partials/script-imports.php"); ?>
  </body>
</html>
