<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COBAY TEMAX | Log in</title>
  <link rel="icon" type="image/x-icon" href="images/logo.jpg" />
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body class="hold-transition login-page">

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2">
    <a aligin="left" width="672" height="350">
      <img src="images/Fondo.PNG" alt="Fondo" width="672" height="350">
    </a>
    <a aligin="left" width="672" height="350">
    <img src="images/Fondo.PNG" alt="Fondo" width="672" height="350">
    </a>
    </div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center" style="background:blue;">
          <div class="col-md-7">
            <h3 class="text-white text-center"><strong>COBAY</strong> | <strong>TEMAX</strong></h3>
            <p class="mb-4 text-white text-center">Colegio de Bachilleres del Estado de Yucatán</p>
            <form method="post" action="{{ route('login') }}">
              <div class="form-group first">
                <label for="username" class="text-white">Usuario</label>
                <input type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus id="username">
            @error('user')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
              </div>
              <div class="form-group last mb-3">
                <label for="password" class="text-white">Contraseña</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password">
              </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
               </span>
              @enderror
              <input type="submit" value="Log In" class="btn btn-block btn-success">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/template/js/adminlte.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>
