<!-- redes sociales -->
<div class="d-flex flex-wrap col-12  justify-content-around">
    <div class="icono">
      <a href="#"><span class="ion-social-facebook "></span></a>
    </div>
    <div class="icono">
      <a href="#"><span class="ion-social-google "></span></a>
    </div>
    <div class="icono">
      <a href="#"><span class="ion-social-instagram "></span></a>
    </div>
    <div class="icono">
      <a href="#"><span class="ion-social-twitter "></span></a>
    </div>
    <div class="icono">
      <a href="#"><span class="ion-social-linkedin "></span></a>
    </div>
  </div>

  <!-- main footer -->

      <footer class="main-footer">
        <ul>
          <?php foreach ($navigation as $url => $nombre) {
          echo "<li><a href=\"$url\">$nombre</a></li>";
          }  ?>
          <li><a href=""  data-toggle="modal" data-target="#login-modal">Login</a></li>
          <li><a href="" data-toggle="modal" data-target="#register-modal">Registrate</a></li>
        </ul>
      </footer>
