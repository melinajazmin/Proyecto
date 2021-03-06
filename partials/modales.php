<!-- Modales-->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="register-modalLabel">Crea tu cuenta en EventR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="" action="index.html" method="post">

          <div class="form-group">
            <input class="form-control form-control-lg" type="text" placeholder="NOMBRE">
            <input class="form-control form-control-lg" type="text" placeholder="APELLIDO">
            <input class="form-control form-control-lg" type="email" placeholder="TUMAIL@EMAIL.COM">
            <input class="form-control form-control-lg" type="password" placeholder="UN PASSWORD PARA TU CUENTA">
          </div>
          <div class="form-group d-flex justify-content-center">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary" >
                  <input type="radio" name="options" id="dj" autocomplete="off" checked=""> Soy DJ!
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="organizador" autocomplete="off"> Busco DJ's!
                </label>
              </div>
            </div>
            <div class="form-group d-flex justify-content-center">
              <button type="submit"class="btn btn-primary btn-lg " name="submt">CREA TU CUENTA!</button>
            </div>
            <div class="modal-footer">
                <span>ya tienes cuenta?  -</span><button type="button" name="login"class="btn btn-link btn-small" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Ingresa</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Login modal  -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login-modalLabel">Ingresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">

          <div class="form-group">
            <input class="form-control form-control-lg" type="email" placeholder="TUMAIL@EMAIL.COM">
            <input class="form-control form-control-lg" type="password" placeholder="PASSWORD">
          </div>
            <div class="form-group d-flex flex-wrap align-content-center justify-content-center">
              <button type="submit"class="col-12 btn btn-primary btn-lg mb-3" name="submt" data-toggle="modal" data-target="#login-modal">INGRESA</button>
              <input type="checkbox" class="" name="recordar" value=""><span class="text-black">Recordarme |
                <a class="text-primary" href="#">Olvidaste tu contraseña?</a>
              </span>
            </div>

            <div class="modal-footer">
                <span>aun no sos parte de EventR? -</span><button type="button" name="register"class="btn btn-link btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Unite!</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /modales -->
