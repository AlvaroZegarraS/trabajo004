<?php 

//var 1
$logos = array
(
    "assets/img/navbar-logo.svg",
    "assets/img/logos/microsoft.svg",
    "assets/img/logos/google.svg",
    "assets/img/logos/facebook.svg",
    "assets/img/logos/ibm.svg"
);
//var 2
$nav = array("servicios","portafolio","nosotros","equipo","contacto");
//var 3
$bienvenido = "Bienvenido a nuestro estudio!";
//var 4
$bienvenido_2= "encantado de conocerte";
//var 5
$botones=(object)["btn1"=> "Dime más","btn2"=> "Enviar Mensaje","btn3"=>"Cerrar Proyecto"];
//var 6
$titulos = (object)
[
    "servicios"=> "servicios",
    "servicios1"=>"Productos seleccionados  de primera calidad.",
    "portafolio"=> "portafolio",
    "portafolio1"=>"Nuestros productos.",
    "nosotros"=>"nosotros",
    "nosotros1"=>"nuestro inicio.",
    "equipo"=>"Equipo",
    "equipo1"=>"Nuestro asombro equipo",
    "contacto"=>"Contáctanos",
    "contacto1"=>"Escribenos..."
];
//var 7
$ecommerce = (object)
[
    "ec"=>"E-Commerce",
    "ec1"=>"El comercio electrónico también conocido como e-commerce​, comercio por Internet o comercio en línea consiste en la compra y venta de productos o de servicios a través de internet."
];
//var 8
$responsive = (object)
[
    "re"=> "responsive design",
    "re1"=>"Cuando utilizamos el término 'responsive' adaptable, nos referimos principalmente a responsive design diseño web adaptable"
];
//var 9
$security = (object)
[
    "se"=>"web security",
    "se1"=>"La seguridad de aplicaciones web es una rama de la seguridad informática que se encarga específicamente de la seguridad de sitios web, aplicaciones web y servicios web."
];
//var 10
$prod=array
( 
    "assets/img/portfolio/1.jpg",
    "assets/img/portfolio/2.jpg",
    "assets/img/portfolio/3.jpg",
    "assets/img/portfolio/4.jpg",
    "assets/img/portfolio/5.jpg",
    "assets/img/portfolio/6.jpg",
);
//var 11
$portaf_text =(object)
[
    "txt1"=>"Threads",
    "txt1_1"=>"Illustration",
    "txt2"=>"explore",
    "txt2_2"=>"Graphic Design",
    "txt3"=>"Finish",
    "txt3_3"=>"Identity",
    "txt4"=>"Lines",
    "txt4_4"=>"Branding",
    "txt5"=>"Southwest",
    "txt5_5"=>"Website Design",
    "txt6"=>"Window",
    "txt6_6"=>"Photography"
];
//var 12
$fechas=array
(
    "2009-2011",
    "Marzo 2011",
    "Diciembre 2015",
    "Julio 2020"
);
//var 13
$sub_titulos=array
(
    "Nuestros humildes comienzos",
    "Nace una agencia",
    "Transición al servicio completo",
    "Expansión de la fase 2"
);
//var 14
$textos_nosotros=array
(
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!"
);
//var 15
$imagen_nosotros=array
(
    "assets/img/about/1.jpg",
    "assets/img/about/2.jpg",
    "assets/img/about/3.jpg",
    "assets/img/about/4.jpg",
);

//var 16
//n=nombre ; a=apellido; c=cargo

$n_1 ="Parveen";
$a_1 ="Anand";
$c_1 = "Lead Designer";

$n_2 ="Diana";
$a_2 ="Petersen";
$c_2 = "Lead Marketer";

$n_3 ="Larry";
$a_3 ="Parker";
$c_3 = "Lead Developer";

//var 17
$fotos_equipo=array
(
    "assets/img/team/1.jpg",
    "assets/img/team/2.jpg",
    "assets/img/team/3.jpg",
);
//var 18
$links=(object)
[
    "twitter"=>"https://twitter.com/",
    "facebook"=>"https://www.facebook.com/",
    "linkedin"=>"https://pe.linkedin.com/",
    "microsoft"=>"https://www.microsoft.com/",
    "google"=>"https://www.google.com.pe/",
    "ibm"=>"https://www.ibm.com/pe-es",
    "youtube"=>"https://www.youtube.com/"
];
//var 19
$titulo_prod=array("Relojes","Zapatos","Logos","Bebidas","Computadoras","Fotografías");

//var 20
$texto_prod=array
(
    "Instrumento para medir el tiempo o para indicar la hora del día.",
    "Calzado que cubre total o parcialmente el pie sin sobrepasar el tobillo",
    "Logos",
    "Sustancia líquida que se bebe, en especial la elaborada o la compuesta de varios ingredientes.",
    "Símbolo formado por imágenes o letras que sirve para identificar una empresa,marca.",
    "Imagen sobre papel que se obtiene mediante esta técnica."
)
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
<!-- ------------------------- -->
<!-- var 1 PRIMERA VARIABLE $logo SVG -->
<!-- ------------------------- -->
                    <img src="<?php echo $logos[0]; ?>" alt="..." />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
<!-- ------------------------- -->
<!-- var 2  -->
<!-- ------------------------- -->
                        <li class="nav-item"><a class="nav-link" href="#services"><?php echo $nav[0]; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio"><?php echo $nav[1]; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"><?php echo $nav[2]; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#team"><?php echo $nav[3]; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact"><?php echo $nav[4]; ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
<!-- ------------------------- -->
<!-- var 3 -->
<!-- ------------------------- -->
                <div class="masthead-subheading"><?php echo $bienvenido; ?></div>
<!-- ------------------------- -->
<!-- var 4 -->
<!-- ------------------------- -->
                <div class="masthead-heading text-uppercase"><?php echo $bienvenido_2; ?></div>
<!-- ------------------------- -->
<!-- var 5 -->
<!-- ------------------------- -->
                <a class="btn btn-primary btn-xl text-uppercase" href="#services"><?php echo $botones->btn1;  ?></a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
<!-- ------------------------- -->
<!-- var 6 -->
<!-- ------------------------- -->
                    <h2 class="section-heading text-uppercase"> <?php echo $titulos->servicios; ?> </h2>
                    <h3 class="section-subheading text-muted"> <?php echo $titulos->servicios1; ?></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
<!-- ------------------------- -->
<!-- var 7 -->
<!-- ------------------------- -->
                        <h4 class="my-3"><?php echo $ecommerce->ec ;?></h4>
                        <p class="text-muted"><?php echo $ecommerce->ec1 ;?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
<!-- ------------------------- -->
<!-- var 8 -->
<!-- ------------------------- -->
                        <h4 class="my-3"><?php echo $responsive->re ;?></h4>
                        <p class="text-muted"><?php echo $responsive->re1 ;?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
<!-- ------------------------- -->
<!-- var 9 -->
<!-- ------------------------- -->
                        <h4 class="my-3"><?php echo $security->se ;?></h4>
                        <p class="text-muted"><?php echo $security->se1 ;?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
<!-- ------------------------- -->
<!-- var 6 -->
<!-- ------------------------- -->
                    <h2 class="section-heading text-uppercase"><?php echo $titulos->portafolio ;?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $titulos->portafolio1 ;?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
<!-- ------------------------- -->
<!-- var 10 -->
<!-- ------------------------- -->
                                <img class="img-fluid" src="<?php echo $prod[0] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
<!-- ------------------------- -->
<!-- var 11   variable objeto 6 objetos-->
<!-- ------------------------- -->
                                <div class="portfolio-caption-heading"><?php echo $portaf_text->txt1 ;?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $portaf_text->txt1_1 ;?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo $prod[1] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $portaf_text->txt2 ;?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $portaf_text->txt2_2 ;?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo $prod[2] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $portaf_text->txt3 ;?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $portaf_text->txt3_3 ;?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo $prod[3] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $portaf_text->txt4 ;?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $portaf_text->txt4_4 ;?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo $prod[4] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $portaf_text->txt5 ;?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $portaf_text->txt5_5 ;?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo $prod[5] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $portaf_text->txt6 ;?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $portaf_text->txt6_6 ;?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
<!-- ------------------------- -->
<!-- var 6 -->
<!-- ------------------------- -->
                    <h2 class="section-heading text-uppercase"><?php echo $titulos->nosotros;?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $titulos->nosotros1;?></h3>
                </div>
<!-- ------------------------- -->
<!-- var 12 -->
<!-- var 13 -->
<!-- var 14 -->
<!-- var 15 -->
<!-- variables para toda la seccion de "NOSOTROS"-->
<!-- ------------------------- -->
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imagen_nosotros[0]; ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $fechas[0];?></h4>
                                <h4 class="subheading"><?php echo $sub_titulos[0];?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $textos_nosotros[0];?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imagen_nosotros[1]; ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $fechas[1];?></h4>
                                <h4 class="subheading"><?php echo $sub_titulos[1];?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $textos_nosotros[1];?></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imagen_nosotros[2]; ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $fechas[2];?></h4>
                                <h4 class="subheading"><?php echo $sub_titulos[2];?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $textos_nosotros[2];?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imagen_nosotros[0]; ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $fechas[3];?></h4>
                                <h4 class="subheading"><?php echo $sub_titulos[3];?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $textos_nosotros[3];?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
<!-- ------------------------- -->
<!-- var 6 -->
<!-- var 16 -->
<!-- var 17 -->
<!-- var 18 -->
<!-- ------------------------- -->
                    <h2 class="section-heading text-uppercase"><?php echo $titulos->equipo;?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $titulos->equipo1;?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo $fotos_equipo[0]; ?>" alt="..." />
                            <h4><?php echo $n_1," ", $a_1 ?></h4>
                            <p class="text-muted"><?php echo $c_1 ?></p>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->linkedin ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo $fotos_equipo[1]; ?>" alt="..." />
                            <h4><?php echo $n_2," ", $a_2 ?></h4>
                            <p class="text-muted"><?php echo $c_2 ?></p>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->twitter ?>" target="_blank" ><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->linkedin ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo $fotos_equipo[2]; ?>" alt="..." />
                            <h4><?php echo $n_3," ", $a_3 ?></h4>
                            <p class="text-muted"><?php echo $c_3 ?></p>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->linkedin ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="large text-muted">
                        <?php echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde." ?> 
                        </p>
                </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?php echo $links->microsoft ?>" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo $logos[1]; ?>" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?php echo $links->google ?>" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo $logos[2]; ?>" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?php echo $links->facebook ?>" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo $logos[3]; ?>" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?php echo $links->ibm ?>" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo $logos[4]; ?>" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
<!-- ------------------------- -->
<!-- var 6 -->
<!-- var 18 -->
<!-- Impresion de texto con php-->
<!-- ------------------------- -->
                    <h2 class="section-heading text-uppercase"><?php echo $titulos->contacto;?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $titulos->contacto1;?></h3>
                </div>


                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required"><?php echo "Nombre requerido" ?></div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Correo *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required"><?php echo "Correo requerido" ?></div>
                                <div class="invalid-feedback" data-sb-feedback="email:email"><?php echo "Correo no válido" ?></div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required"><?php echo "Numero de teléfono requerido" ?>.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Tu mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required"><?php echo "Un mensaje requerido" ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder"><?php echo "Enviado!" ?></div>
                            <br />
                            <a href="<?php echo $links->youtube ?>" target="_blank"> <?php echo "Tu mensaje se ha enviado. Gracias!." ?> </a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3"><?php echo "Error enviando el mensaje." ?></div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit"><?php echo $botones->btn2 ?></button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Alvaro Zegarra 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
<!------ ------->
<!-- var 18 -->
<!------ ------->
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->twitter ?>"target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->facebook ?>"target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $links->linkedin ?>"target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Política de privacidad</a>
                        <a class="link-dark text-decoration-none" href="#!">Terminos de uso</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
<!------------ ------------->
<!-------- var 19 -------->
<!-------- var 20 -------->
<!------------ ------------->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $titulo_prod[0] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $texto_prod[0]?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php  echo $prod[0]?>" alt="..." />
                                    <p><?php echo "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!"?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        <?php echo $botones->btn3?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->

        <!------------ ------------->
<!-------- var 19 -------->
<!-------- var 20 -------->
<!------------ ------------->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">                                    
                                        <h2 class="text-uppercase"><?php echo $titulo_prod[1] ?></h2>
                                    </h2>
                                    <p class="item-intro text-muted"><?php echo $texto_prod[1]?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php  echo $prod[1]?>" alt="..." />
                                    <p><?php echo "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!"?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        <?php echo $botones->btn3?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <!------------ ------------->
<!-------- var 19 -------->
<!-------- var 20 -------->
<!------------ ------------->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $titulo_prod[2] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $texto_prod[2]?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php  echo $prod[2]?>" alt="..." />
                                    <p><?php echo "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!"?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        <?php echo $botones->btn3?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <!------------ ------------->
<!-------- var 19 -------->
<!-------- var 20 -------->
<!------------ ------------->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $titulo_prod[3] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $texto_prod[3]?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php  echo $prod[3]?>" alt="..." />
                                    <p><?php echo "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!"?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        <?php echo $botones->btn3?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <!------------ ------------->
<!-------- var 19 -------->
<!-------- var 20 -------->
<!------------ ------------->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $titulo_prod[4] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $texto_prod[4]?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php  echo $prod[4]?>" alt="..." />
                                    <p><?php echo "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!"?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        <?php echo $botones->btn3?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <!------------ ------------->
<!-------- var 19 -------->
<!-------- var 20 -------->
<!------------ ------------->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $titulo_prod[5] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $texto_prod[5]?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php  echo $prod[5]?>" alt="..." />
                                    <p><?php echo "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!"?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        <?php echo $botones->btn3?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
