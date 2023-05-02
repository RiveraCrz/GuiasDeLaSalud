<?php

session_start();
include "db_conn.php";

$sql = "SELECT * FROM contactanos";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Hola Administrador</title>
    <link href="assets/images//img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon.ico" rel="shortcut icon">

    <!-- Additional CSS Files -->
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/guias-saludables.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <body>
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
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <!--<li class="scroll-to-section"><a href="#about">Información Médica</a></li>-->
                           	
                            <li class="scroll-to-section">
                   
                                    <a href="log-out.php">
                                    <div id="singId" class="sing mr-3">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
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

      <section>
        <div class="container">
            <div class="modal-body">
                <div class="container w-50">
                <h5 class="modal-title" id="exampleModalLongTitle">Panel de Administración de consultas</h5>
                        
                </div>
                
            </div>
            <div class="table-responsive">

                <table class="table table-hover table-info">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">N° Personas</th>
                        <th scope="col">Fecha a Consultar</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Mensaje</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        
                        <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id'] ?></th>
                                    <td><?php echo $row['nombre_completo'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['number_phone'] ?></td>
                                    <td><?php echo $row['num_guests'] ?></td>
                                    <td><?php echo $row['date_consult'] ?></td>
                                    <td><?php echo $row['reason'] ?></td>
                                    <td><?php echo $row['message'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                      </tr>
                      
                    </tbody>
                  </table>

            </div>
            
          
        </div>
      </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="log-out.php"><img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/android-icon-36x36.png" alt=""></a>
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
