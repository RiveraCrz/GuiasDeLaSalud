<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Guías | Nosotros</title>
    <link href="assets/images//img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon.ico" rel="shortcut icon">

    <!-- Additional CSS Files -->
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/section-cancer.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

     <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="" >
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a id="logoGuia" href="index.php" class="logo" >
                            <img src="assets/images/GDLS.png" alt="Guias logo" style="width: 140px; height: 90px;">
                            
                        </a>
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php">Inicio</a></li>
                            <!--<li class="scroll-to-section"><a href="#about">Información Médica</a></li>-->
                           	<li class="submenu">
                                <a href="#about">Información Médica</a>
                                <ul>
                                    <li><a href="cancer.html">Cáncer</a></li>
                                    <li><a href="farmacos.html">Fármacos/Sustancias</a></li>
                                    <li><a href="error.html">Fundamentos</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section">
                                <a href="index.php#chefs">Recursos</a>
                            </li>
                            <li class="scroll-to-section">
                                <a class="active" href="#">Nosotros</a>
                            </li>
                            <li class="scroll-to-section"><a href="index.php#reservation">Contáctanos</a></li> 
                            <li id="btnBuscar" class="scroll-to-section" hidden="true">
                                <a href="#">
                                    <div id="searchId" class="buscar" hidden="true">
                                        <input type="text" placeholder="Buscar" required hidden="true">
                                        <div class="btns" id="btnSearch" hidden="true">
                                            <i class="fa fa-search" hidden="true"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="login-form.php">
                                    <div id="singId" class="sing mr-3">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>MEDICINA</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
        
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
       <?php include "db_conn.php";
        $sql = "SELECT * FROM comentarios";
        $result = mysqli_query($conn, $sql);
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6 >Guías De La Salud</h6>
                            <h2>¿Quienes somos?</h2>
                        </div>
                        <p style="text-align: justify;">Somos una empresa que su intención es atraes a jóvenes, estudiantes y niños que visiten nuestra página web para que se puedan informar bien de las enfermedades que hay en el mundo y como se pueden cuidar de ellos, siguió un alcance y la profundidad de sus ofertas para reflejar la misión de proporcionar la mejor información médica de la actualidad a la mayoría de los usuarios, incluidos los profesionales y los estudiantes de medicina, los veterinarios y estudiantes de medicina veterinaria, y los consumidores.</p>
                        
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/ms-icon-310x310.png" alt="" width="150" height="330">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top: 4rem;">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h6>Comentarios</h6>
                        <h2>Deja tu comentario y comparte con tus amigos.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row ">
            <div class="col-sm-6">
                <div class="card h-25 border-danger">
                    <div class="card-body" id="result" style="overflow: scroll; height: 230px;">

                    <div class="list-group">
                    <?php
                        If(mysqli_num_rows($result) > 0){
                        foreach ($result as $row) {
                    ?>
                        <div class="list-group-item list-group-item-action list-group-item-info flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1"><?php echo $row['nombre'] ?></h5>
                              <small><?php echo $row['realizado'] ?></small>
                            </div>
                            <p class="mb-1"><?php echo $row['comentario'] ?></p>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    }else{
                    ?>
                        <div class="list-group-item list-group-item-action list-group-item-info flex-column align-items-start">                          
                            <p class="mb-1">Sin comentarios</p>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                        
                    </div>
                </div>
            </div>
          </div>
            
            <div class="row mt-3">
                <div class="col-md-8">
                    <form action="comments.php" method="post">
                        <div class="form-group">
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_GET['error']; ?>
                                </div>
                            <?php } ?>
                            
                        </div>
                        <div class="form-group" hidden>
                            <div class="alert alert-danger" id="aviso" hidden>Rellene los campos*</div>
                            <div class="input-group mb-3" hidden>
                                <div class="input-group-prepend" hidden>
                                  <span class="input-group-text" hidden>Cargar foto</span>
                                </div>
                                <div class="custom-file" hidden>
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" hidden>
                                  <label class="custom-file-label" for="inputGroupFile01" hidden>Elegir Foto</label>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text"  id="name" name="name" maxlength="150">
                        </div>
                        <div class="form-group">
                        <label>Comentario</label>
                        <textarea id="comment" name="comment" class="form-control" maxlength="250"></textarea></label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
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
                        <a href="index.php"><img src="assets/images/GDLS.png" alt="" style="width: 120px; height: 80px;"></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
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