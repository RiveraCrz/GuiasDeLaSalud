<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Inicio De Sesión</title>
    <link href="assets/images//img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon.ico" rel="shortcut icon">

    <!-- Additional CSS Files -->
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/guias-saludables.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <body>
      <section class="section" id="about">
        <div class="container">
        <div class="modal-body">
          <div class="container w-50">
          <h5 class="modal-title" id="exampleModalLongTitle">Formulario de Inicio de Sesión</h5>
                <form action="login.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>

                    <div class="form-group">
                      <label for="emailInputId">Correo</label>
                      <input type="email" class="form-control" id="emailInputId" name="uname" placeholder="example.gmail.com">
                    </div>
                    <div class="form-group">
                      <label for="passInputId">Contraseña</label>
                      <input type="password" class="form-control" id="passInputId" name="password" placeholder="******">
                    </div>

                    <div class="form-group">
                        <div id="captcha" class="g-recaptcha" data-sitekey="6Ld1VSglAAAAABZqI8P7fEnlXeYVO823OGg7aQJD">

                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                  </form>
            </div>

            <div class="modal-footer">
              <?php if(isset($_GET['erroremail'])) { ?>
                <div class="alert alert-warning">
                  <?php echo $_GET['erroremail']; ?>
                </div>
              <?php } ?>

              <?php if(isset($_GET['successemail'])) { ?>
                <div class="alert alert-success">
                  <?php echo $_GET['successemail']; ?>
                </div>
              <?php } ?>

              <?php if(isset($_GET['errornot'])) { ?>
                <div class="alert alert-danger">
                  <?php echo $_GET['errornot']; ?>
                </div>
              <?php } ?>
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#RecuperarPass" onclick="ValidateInputsEmails();">¿Olvidaste tu contraseña?</button>
              
            </div>
          </div>
          
        </div>
      </section>

        <div class="modal fade" id="RecuperarPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ingresa tu correo</h5>
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="get-pass.php" method="post">
                    <div class="form-group">
                    <p>Si tu correo fue registrado se enviará un correo con tu contraseña.</p>
                      <label for="correo-valido" class="col-form-label">Correo:</label>
                      <input type="email" class="form-control" id="correo-valido" name="emailvalidate" placeholder="Ingresa un correo válido">
                    </div>
                    <div class="form-group">
                      <div class="alert alert-danger" id="alerta" role="alert" hidden>
                        El correo no es igual.
                      </div>
                      <label for="confirmar" class="col-form-label">Confirma tu Correo: <i id="okId" class="fa fa-check" hidden style="background: #ff2e63; color: aliceblue;"></i></label>
                      <input type="email" class="form-control" id="confirmar" name="emailget" placeholder="Confirma tu correo" onchange="ValidatedEmails();">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary" id="button-send">Recuperar</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
        </div>
      

    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/profile.php?id=100090464780736" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/guiasdelasaludmx/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/guiasdelasalud" target="_blank"><i class="fa fa-twitter" ></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/android-icon-36x36.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Guías Médicas.
                        
                        <br>Design: UTCAM Alumnos</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    </body>
</html>
