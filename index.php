<?php
session_start();
?>
<?php
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
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

    <title>Guías De La Salud</title>
    <link href="assets/images//img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon.ico" rel="shortcut icon">

    <!-- Additional CSS Files -->
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/guias-saludables.css">

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
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <!--<li class="scroll-to-section"><a href="#about">Información Médica</a></li>-->
                           	<li class="submenu">
                                <a href="#about">Información Médica</a>
                                <ul>
                                    <li><a href="cancer.html">Cáncer</a></li>
                                    <li><a href="farmacos.html">Fármacos/Sustancias</a></li>
                                    <li><a href="#menu">Vida Saludable</a></li>
                                    <li><a href="enfermedades.html" target_blank="_blank">Enfermedades</a></li>
                                    <li><a href="error.html" target="_blank">Fundamentos</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section">
                                <a href="#chefs">Recursos</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="nosotros.php" target="_blank">Nosotros</a>
                            </li>
                            <li class="scroll-to-section"><a href="#reservation">Contáctanos</a></li> 
                            <li class="scroll-to-section ml-0 mr-0">
                                <div id="formId" class="form-inline ml-0 mr-0" >
                                    <input id="searchInputId" class="form-control search mt-1 ml-0 mr-0 searchclass" type="search" placeholder="Buscar" aria-label="Search" style="width: 10rem;" onkeyup="SearchList();">
                                    
                                    <!--<button id="botonSearchId" class="btn color ml-0 mr-0" type="button" onclick="SearchList();"><i class="fa fa-search"></i></button>-->
                                </div>
                            </li>
                            <?php if (isset($_GET['success'])) { ?>                     
                                <li class="scroll-to-section">
                                    <a href="#admin">
                                        <button class="btn btn-outline-danger btn-sm">Admin</button>
                                        
                                    </a>
                                </li>                        
                            <?php }else{ ?>
                                
                            <?php } ?>
                             
                            <li class="scroll-to-section">
                                <?php if (isset($_GET['success'])) { ?>                     
                                    <a href="log-out.php">
                                    <div id="singId" class="sing mr-3">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </div>
                                    </a>                       
                                <?php }else{ ?>
                                    <a href="login-form.php">
                                    <div id="singId" class="sing mr-3">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                    </div>
                                    </a>
                                <?php } ?>
                            </li>
                        </ul>
                              
                        <a class='menu-trigger'>
                            <span>MEDICINA</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                    <div class="row flex-column align-items-center bg-light">
                        <ul id="listaId" class="list-group" hidden>
                            <li><a name="ResultId" href="cancer.html" target="_blank" >Cancer</a></li>
                            <li><a name="ResultId" href="#menu" >VidaSaludable</a></li>
                            <li><a name="ResultId" href="#reservation" >Consultar</a></li>
                            <li><a name="ResultId" href="#chefs" >Recursos</a></li>
                            <li><a name="ResultId" href="#offers" >Gallería</a></li>
                            <li><a name="ResultId" href="#tabs-1" >Noticias</a></li>
                            <li><a name="ResultId" href="#tabs-2" >Modelos3D</a></li>
                            <li><a name="ResultId" href="#tabs-3" >Tests</a></li>
                            <li><a name="ResultId" href="farmacos.html" target="_blank" >Fármacos</a></li>
                            <li><a name="ResultId" href="login-form.php" >IniciarSesión</a></li>
                            <li><a name="ResultId" href="#contact">Contactanos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Guías De La Salud</h4>
                                <?php if (isset($_GET['success'])) { ?>                     
                                  <h6> Bienvenido(a) <?php echo $_GET['success']; ?> </h6>                       
                                <?php }else{ ?>
                            <h6>TODO SOBRE MEDICINA Y SALUD</h6>
                                <?php } ?>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/corazon (1).jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/doctor.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/slide02.jpg" alt="" style="width: max-content;">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/vidasaludable.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/lisosomal.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Información Médica</h6>
                            <h2>De la mano con expertos</h2>
                        </div>
                        <p>En los últimos años, la tecnología ha tenido un gran impacto en la medicina, permitiendo avances en la investigación, diagnósticos más precisos y tratamientos más efectivos. <br> Según un artículo de Medlineplus, algunas tecnologías innovadoras financiadas con los dólares de los contribuyentes incluyen una mamografía indolora de 15 segundos y un monitor de azúcar en la sangre activado por láser.</p>
                        <div class="row">
                            <div class="col-4">
                                <iframe width="165" height="155" src="https://www.youtube.com/embed/uTR1rEM-nco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen data-toggle="tooltip" data-placement="top" title="¿Cómo consultar?"></iframe>
                            </div>
                            <div class="col-4">
                                <a href="cancer.html" data-toggle="tooltip" data-placement="top" title="El Cáncer, enfermedad mortal.">
                                    <img width="155" height="155" src="assets/images/cancer.png" alt="">
                                </a> 
                            </div>
                            <div class="col-4">
                                <a href="farmacos.html" data-toggle="tooltip" data-placement="top" title="Fármacos y sus usos.">
                                    <img width="155" height="155" src="assets/images/farmacos.jpg" alt="">
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <iframe class="ytvideo" width="420" height="315"
                                src="https://www.youtube.com/embed/tMoPpLWTaiE">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading mb-0">
                            <h6>Vida Saludable</h6>
                            <h2>Mantente sano con nuestros consejos</h2>
                        </div>
                        <p style="text-align: justify;">En los últimos años, la tecnología ha tenido un gran impacto en la medicina, permitiendo avances en la investigación, diagnósticos más precisos y tratamientos más efectivos. <br> Según un artículo de Medlineplus, algunas tecnologías innovadoras financiadas con los dólares de los contribuyentes incluyen una mamografía indolora de 15 segundos y un monitor de azúcar en la sangre activado por láser.</p>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img class="img-fluid" src="assets/images/frutas.jpg" alt="frutas">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6><i class="fa fa-coffee"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Dieta equilibrada</h1>
                              <p class='description text-justify'>una alimentación saludable se rige por incluir todos los alimentos contemplados en la pirámide nutricional, pero en las proporciones adecuadas y en la cantidad suficiente para mantener las necesidades nutricionales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>i</h6></div>
                            <div class='info'>
                              <h1 class='title'>Hábitos tóxicos</h1>
                              <p class='description text-justify'>el tabaco, el alcohol y las drogas inciden de forma muy negativa sobre la salud. La única tolerancia se refiere exclusivamente al vino o la cerveza, de los que incluso se recomienda el consumo del equivalente a una copa diaria.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6><i class="fa fa-bicycle"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Ejercicio físico</h1>
                              <p class='description text-justify'>las recomendaciones generales determinan unos 30 minutos diarios de actividad física, siendo suficiente caminar a paso rápido durante este tiempo, de igual manera el ejericio sexual, cardiovascular entre otros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6><i class="fa fa-hospital-o"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Higiene</h1>
                              <p class='description text-justify'>una higiene adecuada evita muchos problemas de salud: desde infecciones a problemas dentales o dermatológicos. El concepto de higiene no sólo se refiere al aseo y limpieza del cuerpo, sino que afecta también al ámbito doméstico.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6><i class="fa fa-recycle"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Productos tóxicos</h1>
                              <p class='description text-justify'>Son muchos los productos a los que la exposición del organismo, puntual o continuo, puede resultar en un serio riesgo para la salud. La contaminación ambiental de las ciudades está considerada como uno de los factores.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6><i class="fa fa-soccer-ball-o"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Actividad social</h1>
                              <p class='description text-justify'>las relaciones sociales son un aspecto fundamental para la salud y, en consecuencia, para un envejecimiento saludable. El aislamiento social puede llevar a un deterioro gradual de las capacidades físicas y mentales</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
    <!-- ***** chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Recursos Médicos</h6>
                        <h4>Nuestros doctores .</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets/images/doctoreric.jpg" alt="Dr #1" height="299px">
                        </div>
                        <div class="down-content">
                            <h4>Dr. Eric Cartman</h4>
                            <span>Especiliasta en Hematología</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/images/cirujano.jpg" alt="Dr #2">
                        </div>
                        <div class="down-content">
                            <h4>Dr. David Martin</h4>
                            <span>Médico Cirujano</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="assets/images/doctora.jpg" alt="Dra" height="299px">
                        </div>
                        <div class="down-content">
                            <h4>Dr. Ana Beatríz</h4>
                            <span>Especialista en Ginecología</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Area Ends ***** -->
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Gallería</h6>
                        <h2>Noticias, informes, Modelos 3D y más.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li>
                                            <a id="NoticiasId" href='#tabs-1'><img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon-32x32.png" alt="">Noticias</a>
                                          </li>
                                          <li><a href='#tabs-2'><img id="Modelos3DId" src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon-32x32.png" alt="">Modelos 3D</a></a></li>
                                          <li><a id="TestId" href='#tabs-3'><img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon-32x32.png" alt="">Tests</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <section id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://cnnespanol.cnn.com/category/medicina/">
                                                                <img src="assets/images/medicina.jpg" alt="medicina">
                                                            <h4>Médicina</h4>
                                                            <p>Importancia de fecha de caducidad en pastillas</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-newspaper-o"></i></h6>
                                                            </div>
                                                            </a>                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.saludiario.com/avances-medicos-mas-prometedores-2023/#:~:text=En%20ese%20sentido%2C%20cre%C3%B3%20una%20lista%20con%20los,en%20los%20pacientes.%20Medicina%20personalizada%20con%20Inteligencia%20Artificial">
                                                                <img src="assets/images/avances.jpg" alt="avances">
                                                            <h4>Avances Médicos</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-newspaper-o"></i></h6>
                                                            </div>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.rcv.hn/2022/11/28/oms-alerta-las-nuevas-enfermedades-para-el-2023/#:~:text=OMS%20alerta%20las%20nuevas%20enfermedades%20para%20el%202023,del%20Rift%2C%20el%20virus%20del%20%C3%89bola%2C%20entre%20otras.">
                                                                <img src="assets/images/nuevas.jpg" alt="enfermedades">
                                                            <h4>Nuevas Enfermedades</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-newspaper-o"></i></h6>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.eluniversal.com.mx/menu/los-15-alimentos-mas-saludables">
                                                                <img src="assets/images/alimentos.jpg" alt="alimentos">
                                                                <h4>Mejores Alimentos</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6><i class="fa fa-newspaper-o"></i></h6>
                                                                </div>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://imss.gob.mx/imssdigital">
                                                                <img src="assets/images/imss.png" alt="imss">
                                                                <h4>IMSS Digital</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6><i class="fa fa-newspaper-o"></i></h6>
                                                                </div>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.msn.com/es-mx/noticias/other/alianzas-con-hospitales-para-la-preparaci%C3%B3n-de-m%C3%A9dicos/ar-AA18JlD6">
                                                                <img src="assets/images/hospitales.jpg" alt="">
                                                                <h4>Hospitales Médicos</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6><i class="fa fa-newspaper-o"></i></h6>
                                                                </div>
                                                            </a>                                                 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>  
                                <section id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/hueso-cigomatico.png" alt="hueso-cigomatico" data-toggle="modal" data-target="#ModalHuesoId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Hueso Cigomatico</h4>
                                                            <p style="text-align: justify;">El hueso cigomático o malar es un hueso par, corto y compacto, situado en la parte más externa de la cara, en forma cuadrilátera que forma el pómulo de la cara.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/facemuscles.png" alt="facemuscles" data-toggle="modal" data-target="#MusclesFaceId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Músculos de la Cara</h4>
                                                            <p style="text-align: justify;">Los músculos de la cara contribuyen a la apertura y la oclusión de los orificios de la cara, a la masticación y a la expresión mímica entre otros.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/corazoncontinte.png" alt="corazoncontinte" data-toggle="modal" data-target="#CorazonId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Corazón con Tinte</h4>
                                                            <p style="text-align: justify;">El corazón por si solo no contiene color alguno más que casi transparente, aquí se muestra como se ve con sangre.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/legmuscles.png" alt="legmuscles" data-toggle="modal" data-target="#PiernaId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Músculos de la Pierna</h4>
                                                            <p style="text-align: justify;">Los músculos de la pierna son incluso más fuertes que los de otro cuerpo siendo importantes.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/pelvismujer.png" alt="pelvis mujer" data-toggle="modal" data-target="#PelvisMujerId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Pelvis Femenina</h4>
                                                            <p style="text-align: justify;">La pelvis femenina es uno de los conjunto funcionales más importantes del cuerpo por su ubicación y lo que representa para cada una de las mujeres.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/rinon.png" alt="rinon" data-toggle="modal" data-target="#RinonId" data-placement="top" title="Abrir Imágen 3D" height="80px">
                                                            <h4>Riñón</h4>
                                                            <p style="text-align: justify;">El riñón es un órgano con forma de frijol o habichuela que se encarga de filtrar la sangre y eliminar el exceso de líquido, sales y desechos del cuerpo a través de la orina.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>  
                                <section id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.mhanational.org/pruebas-de-salud-mental-en-espanol">
                                                                <img src="assets/images/salud-mental.jpg" alt="">
                                                            </a>
                                                            <h4>Test Salud Mental</h4>
                                                            <p style="text-align: justify;">La salud mental es, en términos generales, el estado de equilibrio entre una persona y su entorno</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://evalart.com/es/free-trial/">
                                                                <img src="assets/images/personalidad.jpg" alt="">
                                                            </a>                              
                                                            <h4>Pruebas Psicométricas</h4>
                                                            <p style="text-align: justify;">Un test de personalidad es un cuestionario u otro instrumento estandarizado diseñado para revelar aspectos del carácter o aparatos psicológicos de un individuo.</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.doctorcueva.com/test-aliento-sibo/#:~:text=Este%20test%20sirve%20para%20diagnosticar%20un%20sobrecrecimiento%20bacteriano,son%20la%20comida%20favorita%20de%20las%20bacterias%20intestinales.">
                                                                <img src="assets/images/bacteriano.jpg" alt="bacteriano">
                                                            </a>
                                                            
                                                            <h4>Aliento SIBO</h4>
                                                            <p style="text-align: justify;">El Test de Aliento SIBO sirve para saber si tienes un exceso de bacterias en el intestino delgado (Sobrecrecimiento bacteriano o SIBO)</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.webconsultas.com/mente-y-emociones/test-de-psicologia/test-de-autoestima-2663">
                                                                <img src="assets/images/autoestima.jpg" alt="autoestima">
                                                            </a>
                                                            
                                                            <h4>Test de Autoestima</h4>
                                                            <p style="text-align: justify;">La autoestima es la valoración que hacemos de nosotros mismos, y tenerla baja es un obstáculo para alcanzar nuestros objetivos y ser felices.</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://sanluisoptico.com/examina-tu-vision/test-de-vision-estereoscopica/">
                                                                <img src="assets/images/vision.jpg" alt="vision">
                                                            </a>
                                                            
                                                            <h4>Test de visión estereoscópica</h4>
                                                            <p style="text-align: justify;">Los tests de visión estereoscópica sirven para detectar la consecuencia de una ambliopía.</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://salud.ccm.net/faq/3923-prueba-de-embarazo-orina-o-sangre#cuando-realizar-una-prueba-de-embarazo">
                                                                <img src="assets/images/embarazo.jpg" alt="embarazo">
                                                            </a>
                                                            
                                                            <h4>Prueba de Embarazo</h4>
                                                            <p style="text-align: justify;">La prueba consiste en colocar una gota de orina en una banda o tira química preparada. </p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ModalHuesoId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hueso Cigomatico</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper ml-auto"> <iframe class="models" title="Cigomático/Zygomatic bone" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f28f3a686d84b69b3a36b9e1cf781b4/embed?ui_theme=dark" width="300" height="250"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="MusclesFaceId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Músculos de la Cara</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Músculos de La Cara / Face Muscles" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/9a62491844b94789b6ba3f02ed28a9ed/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="CorazonId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Corazón Con Tinte</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Corazón Humana/Human Heart" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/06e5501b9a514f4594b681b1039e928a/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="PiernaId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Músculos de la Pierna</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Músculos de la pierna/Leg muscle" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/e774663bffee40049b1d7a2ec5f1eb82/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="PelvisMujerId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pélvis Femenina</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper ml-auto"> <iframe class="models" title="Cigomático/Zygomatic bone" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/16b6701d80804c18ab32673c38902a70/embed?autostart=1&ui_controls=1&ui_infos=1&ui_inspector=1&ui_stop=1&ui_watermark=1&ui_watermark_link=1" width="300" height="250"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="RinonId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Riñón</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Corte frontal de riñón/Frontal kidney section" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/45c5a16216674a14a4850aed9a0404e5/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
    </section>

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contáctanos</h6>
                            <h2>Para mayor información, dudas y/o aclaraciones</h2>
                        </div>
                        <p>En breve serás atendido por nuestro personal de apoyo que día a día se esfuerzan por brindar una excelente atención.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Números Telefónicos</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Correos</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="insert-consulting.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">     
                                <?php if (isset($_GET['errorcontact'])) { ?>
                                    <div class="alert alert-danger">*Todos los campos son obligatorios.</div>
                                <?php } ?>
                                <h4>Informes</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Tu nombre*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Tu correo*" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="tel" id="phone" placeholder="Número celular*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="number-guests" id="number-guests">
                                    <option value="number-guests">Número de Pacientes</option>
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                
                                <input  name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time">
                                    <option value="time" disabled selected>Motivo</option>
                                    <option name="Breakfast" id="Breakfast">Consulta</option>
                                    <option name="Lunch" id="Lunch">Análisis</option>
                                    <option name="Dinner" id="Dinner">Recetas</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Mensaje" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Enviar</button>
                                <?php if (isset($_GET['successcontact'])) { ?>
                                    <div class="alert alert-success">Datos Enviados</div>
                                <?php } ?>
                                
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.389688495705!2d-91.8222444501096!3d18.64650117011648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f1079ac201e06b%3A0xc46cb29d9903f45a!2sHospital%20General!5e0!3m2!1ses-419!2smx!4v1679614857173!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- ***** Reservation consultings Area Ends ***** -->
    <!--***** Start area admin****-->
    <section id="admin">
    <?php
        include "db_conn.php";
        $sql = "SELECT * FROM contactanos";
        $result = mysqli_query($conn, $sql);
    ?>
        <div class="container mt-3">
            <div class="row">
                
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6 class="mb-3">Panel Admin</h6>
                        <h3>Contáctos Registrados</h3>
                    </div>
                </div>
            </div>
            <div class="row flex-column align-items-center mt-3">
                <div class="">
                    <button class="btn btn-outline-danger"><a href="new-user.php">Agregar nuevo Admin</a> </button>
                </div>
            </div>
            <div class="table-responsive">

                <table class="table table-hover table-info mt-3">
                    <thead>
                      <tr class="mt-5">
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
                            If(mysqli_num_rows($result) > 0){
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
                            <?php
                            }else{
                            ?>
                                <tr class="text-center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><p>Sin registros</p></td>
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

    <!--***** End area admin****-->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" ><i class="fa fa-instagram" ></i></a></li>
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
<?php
}else{
?>

<!--End else condition-->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Guías De La Salud</title>
    <link href="assets/images//img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon.ico" rel="shortcut icon">

    <!-- Additional CSS Files -->
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/guias-saludables.css">

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
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <!--<li class="scroll-to-section"><a href="#about">Información Médica</a></li>-->
                           	<li class="submenu">
                                <a href="#about">Información Médica</a>
                                <ul>
                                    <li><a href="cancer.html">Cáncer</a></li>
                                    <li><a href="farmacos.html">Fármacos/Sustancias</a></li>
                                    <li><a href="#menu">Vida Saludable</a></li>
                                    <li><a href="enfermedades.html" target_blank="_blank">Enfermedades</a></li>
                                    <li><a href="error.html" target="_blank">Fundamentos</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section">
                                <a href="#chefs">Recursos</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="scroll-to-section"><a href="#reservation">Contáctanos</a></li> 

                            <li class="scroll-to-section ml-0 mr-0">
                                <div id="formId" class="form-inline ml-0 mr-0" >
                                    <input id="searchInputId" class="form-control search mt-1 ml-0 mr-0 searchclass" type="search" placeholder="Buscar..." aria-label="Search" style="width: 10rem;" onkeyup="SearchList();">
                                    
                                    <!--<button id="botonSearchId" class="btn color ml-0 mr-0" type="button" onclick="SearchList();"><i class="fa fa-search"></i></button>-->
                                </div>
                            </li>
                            <li class="scroll-to-section">
                                    <a href="login-form.php">
                                    <div id="singId" class="sing mr-0">
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
                   
                        <div class="row flex-column align-items-center bg-light">
                            <ul id="listaId" class="list-group" hidden>
                                <li><a name="ResultId" href="cancer.html" target="_blank" >Cancer</a></li>
                                <li><a name="ResultId" href="#menu" >VidaSaludable</a></li>
                                <li><a name="ResultId" href="#reservation" >Consultar</a></li>
                                <li><a name="ResultId" href="#chefs" >Recursos</a></li>
                                <li><a name="ResultId" href="#offers" >Gallería</a></li>
                                <li><a name="ResultId" href="#tabs-1" >Noticias</a></li>
                                <li><a name="ResultId" href="#tabs-2" >Modelos3D</a></li>
                                <li><a name="ResultId" href="#tabs-3" >Tests</a></li>
                                <li><a name="ResultId" href="farmacos.html" target="_blank" >Fármacos</a></li>
                                <li><a name="ResultId" href="login-form.php" >IniciarSesión</a></li>
                                <li><a name="ResultId" href="#contact">Contactanos</a></li>
                            </ul>
                        </div>
                    
                </div>
                
            </div>

        </div>
        
    </header>
    
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Guías De La Salud</h4>
                            <h6>TODO SOBRE MEDICINA Y SALUD</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/corazon (1).jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/doctor.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/slide02.jpg" alt="" style="width: max-content;">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/vidasaludable.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/img/lisosomal.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Información Médica</h6>
                            <h2>De la mano con expertos</h2>
                        </div>
                        <p>En los últimos años, la tecnología ha tenido un gran impacto en la medicina, permitiendo avances en la investigación, diagnósticos más precisos y tratamientos más efectivos. <br> Según un artículo de Medlineplus, algunas tecnologías innovadoras financiadas con los dólares de los contribuyentes incluyen una mamografía indolora de 15 segundos y un monitor de azúcar en la sangre activado por láser.</p>
                        <div class="row">
                            <div class="col-4" data-toggle="tooltip" data-placement="top" title="Tecnología en salud.">
                                <a href="#">
                                <img width="155" height="155" src="assets/images/salud.png" alt="">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="cancer.html" data-toggle="tooltip" data-placement="top" title="El Cáncer, enfermedad mortal.">
                                    <img width="155" height="155" src="assets/images/cancer.png" alt="">
                                </a> 
                            </div>
                            <div class="col-4">
                                <a href="farmacos.html" data-toggle="tooltip" data-placement="top" title="Fármacos y sus usos.">
                                    <img width="155" height="155" src="assets/images/farmacos.jpg" alt="">
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <iframe class="ytvideo" width="400" height="315"
                                src="https://www.youtube.com/embed/tMoPpLWTaiE">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading mb-0">
                            <h6>Vida Saludable</h6>
                            <h2>Mantente sano con nuestros consejos</h2>
                        </div>
                        <p style="text-align: justify;">En los últimos años, la tecnología ha tenido un gran impacto en la medicina, permitiendo avances en la investigación, diagnósticos más precisos y tratamientos más efectivos. <br> Según un artículo de Medlineplus, algunas tecnologías innovadoras financiadas con los dólares de los contribuyentes incluyen una mamografía indolora de 15 segundos y un monitor de azúcar en la sangre activado por láser.</p>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img class="img-fluid" src="assets/images/frutas.jpg" alt="frutas">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6><i class="fa fa-coffee"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Dieta equilibrada</h1>
                              <p class='description text-justify'>una alimentación saludable se rige por incluir todos los alimentos contemplados en la pirámide nutricional, pero en las proporciones adecuadas y en la cantidad suficiente para mantener las necesidades nutricionales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>i</h6></div>
                            <div class='info'>
                              <h1 class='title'>Hábitos tóxicos</h1>
                              <p class='description text-justify'>el tabaco, el alcohol y las drogas inciden de forma muy negativa sobre la salud. La única tolerancia se refiere exclusivamente al vino o la cerveza, de los que incluso se recomienda el consumo del equivalente a una copa diaria.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6><i class="fa fa-bicycle"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Ejercicio físico</h1>
                              <p class='description text-justify'>las recomendaciones generales determinan unos 30 minutos diarios de actividad física, siendo suficiente caminar a paso rápido durante este tiempo, de igual manera el ejericio sexual, cardiovascular entre otros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6><i class="fa fa-hospital-o"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Higiene</h1>
                              <p class='description text-justify'>una higiene adecuada evita muchos problemas de salud: desde infecciones a problemas dentales o dermatológicos. El concepto de higiene no sólo se refiere al aseo y limpieza del cuerpo, sino que afecta también al ámbito doméstico.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6><i class="fa fa-recycle"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Productos tóxicos</h1>
                              <p class='description text-justify'>Son muchos los productos a los que la exposición del organismo, puntual o continuo, puede resultar en un serio riesgo para la salud. La contaminación ambiental de las ciudades está considerada como uno de los factores.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6><i class="fa fa-soccer-ball-o"></i></h6></div>
                            <div class='info'>
                              <h1 class='title'>Actividad social</h1>
                              <p class='description text-justify'>las relaciones sociales son un aspecto fundamental para la salud y, en consecuencia, para un envejecimiento saludable. El aislamiento social puede llevar a un deterioro gradual de las capacidades físicas y mentales</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Recursos Médicos</h6>
                        <h4>Nuestros doctores .</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets/images/doctoreric.jpg" alt="Dr #1" height="299px">
                        </div>
                        <div class="down-content">
                            <h4>Dr. Eric Cartman</h4>
                            <span>Especiliasta en Hematología</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/images/cirujano.jpg" alt="Dr #2">
                        </div>
                        <div class="down-content">
                            <h4>Dr. David Martin</h4>
                            <span>Médico Cirujano</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="assets/images/doctora.jpg" alt="Dra" height="299px">
                        </div>
                        <div class="down-content">
                            <h4>Dr. Ana Beatríz</h4>
                            <span>Especialista en Ginecología</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Area Ends ***** -->

    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Gallería</h6>
                        <h2>Noticias, informes, Modelos 3D y más.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li>
                                            <a href='#tabs-1'><img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon-32x32.png" alt="">Noticias</a>
                                          </li>
                                          <li><a href='#tabs-2'><img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon-32x32.png" alt="">Modelos 3D</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/img/f08ecb7fc75dc1d8c64da2b15330e3f3.ico/favicon-32x32.png" alt="">Tests</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section id="gallery" class='tabs-content'>
                                <section id="tabs-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://cnnespanol.cnn.com/category/medicina/">
                                                                <img src="assets/images/medicina.jpg" alt="medicina">
                                                            <h4>Médicina</h4>
                                                            <p>Importancia de fecha de caducidad en pastillas</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-newspaper-o"></i></h6>
                                                            </div>
                                                            </a>                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.saludiario.com/avances-medicos-mas-prometedores-2023/#:~:text=En%20ese%20sentido%2C%20cre%C3%B3%20una%20lista%20con%20los,en%20los%20pacientes.%20Medicina%20personalizada%20con%20Inteligencia%20Artificial">
                                                                <img src="assets/images/avances.jpg" alt="avances">
                                                            <h4>Avances Médicos</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-newspaper-o"></i></h6>
                                                            </div>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.rcv.hn/2022/11/28/oms-alerta-las-nuevas-enfermedades-para-el-2023/#:~:text=OMS%20alerta%20las%20nuevas%20enfermedades%20para%20el%202023,del%20Rift%2C%20el%20virus%20del%20%C3%89bola%2C%20entre%20otras.">
                                                                <img src="assets/images/nuevas.jpg" alt="enfermedades">
                                                            <h4>Nuevas Enfermedades</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-newspaper-o"></i></h6>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.eluniversal.com.mx/menu/los-15-alimentos-mas-saludables">
                                                                <img src="assets/images/alimentos.jpg" alt="alimentos">
                                                                <h4>Mejores Alimentos</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6><i class="fa fa-newspaper-o"></i></h6>
                                                                </div>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://imss.gob.mx/imssdigital">
                                                                <img src="assets/images/imss.png" alt="imss">
                                                                <h4>IMSS Digital</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6><i class="fa fa-newspaper-o"></i></h6>
                                                                </div>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.msn.com/es-mx/noticias/other/alianzas-con-hospitales-para-la-preparaci%C3%B3n-de-m%C3%A9dicos/ar-AA18JlD6">
                                                                <img src="assets/images/hospitales.jpg" alt="">
                                                                <h4>Hospitales Médicos</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6><i class="fa fa-newspaper-o"></i></h6>
                                                                </div>
                                                            </a>                                                 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>  
                                <section id="tabs-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/hueso-cigomatico.png" alt="hueso-cigomatico" data-toggle="modal" data-target="#ModalHuesoId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Hueso Cigomatico</h4>
                                                            <p style="text-align: justify;">El hueso cigomático o malar es un hueso par, corto y compacto, situado en la parte más externa de la cara, en forma cuadrilátera que forma el pómulo de la cara.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/facemuscles.png" alt="facemuscles" data-toggle="modal" data-target="#MusclesFaceId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Músculos de la Cara</h4>
                                                            <p style="text-align: justify;">Los músculos de la cara contribuyen a la apertura y la oclusión de los orificios de la cara, a la masticación y a la expresión mímica entre otros.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/corazoncontinte.png" alt="corazoncontinte" data-toggle="modal" data-target="#CorazonId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Corazón con Tinte</h4>
                                                            <p style="text-align: justify;">El corazón por si solo no contiene color alguno más que casi transparente, aquí se muestra como se ve con sangre.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/legmuscles.png" alt="legmuscles" data-toggle="modal" data-target="#PiernaId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Músculos de la Pierna</h4>
                                                            <p style="text-align: justify;">Los músculos de la pierna son incluso más fuertes que los de otro cuerpo siendo importantes.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/pelvismujer.png" alt="pelvis mujer" data-toggle="modal" data-target="#PelvisMujerId" data-placement="top" title="Abrir Imágen 3D">
                                                            <h4>Pelvis Femenina</h4>
                                                            <p style="text-align: justify;">La pelvis femenina es uno de los conjunto funcionales más importantes del cuerpo por su ubicación y lo que representa para cada una de las mujeres.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/rinon.png" alt="rinon" data-toggle="modal" data-target="#RinonId" data-placement="top" title="Abrir Imágen 3D" height="80px">
                                                            <h4>Riñón</h4>
                                                            <p style="text-align: justify;">El riñón es un órgano con forma de frijol o habichuela que se encarga de filtrar la sangre y eliminar el exceso de líquido, sales y desechos del cuerpo a través de la orina.</p>
                                                            <div class="price">
                                                                <h6><i class="fa fa-image"></i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>  
                                <section id="tabs-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.mhanational.org/pruebas-de-salud-mental-en-espanol">
                                                                <img src="assets/images/salud-mental.jpg" alt="">
                                                            </a>
                                                            <h4>Test Salud Mental</h4>
                                                            <p style="text-align: justify;">La salud mental es, en términos generales, el estado de equilibrio entre una persona y su entorno</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://evalart.com/es/free-trial/">
                                                                <img src="assets/images/personalidad.jpg" alt="">
                                                            </a>                              
                                                            <h4>Pruebas Psicométricas</h4>
                                                            <p style="text-align: justify;">Un test de personalidad es un cuestionario u otro instrumento estandarizado diseñado para revelar aspectos del carácter o aparatos psicológicos de un individuo.</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.doctorcueva.com/test-aliento-sibo/#:~:text=Este%20test%20sirve%20para%20diagnosticar%20un%20sobrecrecimiento%20bacteriano,son%20la%20comida%20favorita%20de%20las%20bacterias%20intestinales.">
                                                                <img src="assets/images/bacteriano.jpg" alt="bacteriano">
                                                            </a>
                                                            
                                                            <h4>Aliento SIBO</h4>
                                                            <p style="text-align: justify;">El Test de Aliento SIBO sirve para saber si tienes un exceso de bacterias en el intestino delgado (Sobrecrecimiento bacteriano o SIBO)</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://www.webconsultas.com/mente-y-emociones/test-de-psicologia/test-de-autoestima-2663">
                                                                <img src="assets/images/autoestima.jpg" alt="autoestima">
                                                            </a>
                                                            
                                                            <h4>Test de Autoestima</h4>
                                                            <p style="text-align: justify;">La autoestima es la valoración que hacemos de nosotros mismos, y tenerla baja es un obstáculo para alcanzar nuestros objetivos y ser felices.</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://sanluisoptico.com/examina-tu-vision/test-de-vision-estereoscopica/">
                                                                <img src="assets/images/vision.jpg" alt="vision">
                                                            </a>
                                                            
                                                            <h4>Test de visión estereoscópica</h4>
                                                            <p style="text-align: justify;">Los tests de visión estereoscópica sirven para detectar la consecuencia de una ambliopía.</p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <a href="https://salud.ccm.net/faq/3923-prueba-de-embarazo-orina-o-sangre#cuando-realizar-una-prueba-de-embarazo">
                                                                <img src="assets/images/embarazo.jpg" alt="embarazo">
                                                            </a>
                                                            
                                                            <h4>Prueba de Embarazo</h4>
                                                            <p style="text-align: justify;">La prueba consiste en colocar una gota de orina en una banda o tira química preparada. </p>
                                                            <div class="price">
                                                                <h6>i</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ModalHuesoId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hueso Cigomatico</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div id="HuesoId" class="sketchfab-embed-wrapper ml-auto"> <iframe class="models" title="Cigomático/Zygomatic bone" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2f28f3a686d84b69b3a36b9e1cf781b4/embed?ui_theme=dark" width="300" height="250" > </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="MusclesFaceId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Músculos de la Cara</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Músculos de La Cara / Face Muscles" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/9a62491844b94789b6ba3f02ed28a9ed/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="CorazonId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Corazón Con Tinte</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Corazón Humana/Human Heart" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/06e5501b9a514f4594b681b1039e928a/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="PiernaId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Músculos de la Pierna</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Músculos de la pierna/Leg muscle" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/e774663bffee40049b1d7a2ec5f1eb82/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="PelvisMujerId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pélvis Femenina</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper ml-auto"> <iframe class="models" title="Cigomático/Zygomatic bone" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/16b6701d80804c18ab32673c38902a70/embed?autostart=1&ui_controls=1&ui_infos=1&ui_inspector=1&ui_stop=1&ui_watermark=1&ui_watermark_link=1" width="300" height="250"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

          <div class="modal fade" id="RinonId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Riñón</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form class="text-center align-content-center">
                    <div class="sketchfab-embed-wrapper"> <iframe class="models" title="Corte frontal de riñón/Frontal kidney section" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="300" height="250"src="https://sketchfab.com/models/45c5a16216674a14a4850aed9a0404e5/embed?ui_theme=dark"> </iframe> </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
    </section>

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contáctanos</h6>
                            <h2>Para mayor información, dudas y/o aclaraciones</h2>
                        </div>
                        <p>En breve serás atendido por nuestro personal de apoyo que día a día se esfuerzan por brindar una excelente atención.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Números Telefónicos</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Correos</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="insert-consulting.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">     
                                <?php if (isset($_GET['errorcontact'])) { ?>
                                    <div class="alert alert-danger">*Todos los campos son obligatorios.</div>
                                <?php } ?>
                                <h4>Informes</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Tu nombre*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Tu correo*" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="tel" id="phone" placeholder="Número celular*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="number-guests" id="number-guests">
                                    <option value="number-guests">Número de Pacientes</option>
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                
                                <input  name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time">
                                    <option value="time" disabled selected>Motivo</option>
                                    <option name="Breakfast" id="Breakfast">Consulta</option>
                                    <option name="Lunch" id="Lunch">Análisis</option>
                                    <option name="Dinner" id="Dinner">Recetas</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Mensaje" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Enviar</button>
                                <?php if (isset($_GET['successcontact'])) { ?>
                                    <div class="alert alert-success">Datos Enviados</div>
                                <?php } ?>
                                
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.01878398192!2d-92.22767285011001!3d18.61822487097882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f1cf4d0416007f%3A0x7d1f047111e79745!2sUniversidad%20Tecnol%C3%B3gica%20de%20Campeche!5e0!3m2!1ses-419!2smx!4v1679094654138!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </section>
    <!-- ***** Reservation consultings Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" ><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" ><i class="fa fa-twitter" ></i></a></li>
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
<?php
}?>