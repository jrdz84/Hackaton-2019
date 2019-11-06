<?php
    $hostname = "localhost";
    $username = "kioskodi_vital";
    $password = "pjXd=j_!n02N";
    $databaseName = "kioskodi_kioskodigital";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    mysqli_set_charset ($connect, "utf8");
    date_default_timezone_set('America/Mexico_City');

    $queryDepends = "Select dependencias_nombre from dependencias order by dependencias_nombre";
    $resultDepends = mysqli_query($connect, $queryDepends);

    function filter($cadena){
        $cadena = utf8_encode($cadena);

        $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena
        );

        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena
        );

        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena
        );

        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena
        );

        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena
        );

        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );

        return $cadena;
    }
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <title>Kiosko Digital Zacatecas</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Gallos">
        <meta name="description" content="">

        <!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.ico">
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

        <!-- Icons -->
        <link rel="stylesheet" href="assets/css/et-line-icons.css" />
        <link rel="stylesheet" href="assets/css/all.min.css" />
        <link rel="stylesheet" href="assets/css/themify-icons.css">

        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/justified-gallery.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css" />
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

        <!-- Base CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootsnav.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <link rel="stylesheet" href="assets/css/custom.css">
        <!--[if IE]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent white-link navbar-expand-lg">
                <div class="container nav-header-container">
                    <div class="col-auto pl-lg-0" id = "logoCont">
                        <a href="index.html" title="Kiosko Digital" class="logo">
                            <img src="assets/img/logo_white.png" alt="Kiosko Digital" class="logo-white default">
                            <img src="assets/img/logo.png" alt="Kiosko Digital" class="logo-dark">
                        </a>
                    </div>

                    <div class="col accordion-menu pr-0 pr-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                <li class="dropdown megamenu-fw"><a href="#top">Inicio</a></li>
                                <li class="dropdown megamenu-fw"><a href="#about_us">Acerca de</a></li>
                                <li class="dropdown megamenu-fw"><a href="#services">Trámites</a></li>
                                <li class="dropdown megamenu-fw"><a href="#help">Ayuda</a></li>
                                <li class="dropdown megamenu-fw"><a href="#contact">Contacto</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-auto pr-lg-0">
                        <div class="heder-menu-button d-none d-lg-inline-block">
                            <button class="navbar-toggle mobile-toggle right-menu-button" type="button" id="showRightPush">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="wow fadeIn p-0 parallax sm-background-image-center" data-stellar-background-ratio="0.5" id = "mainHeader">
            <div class="opacity-light bg-black"></div>
            <div class="container-fluid position-relative full-screen">
                <div class="slider-typography">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="col-12 col-md-9 float-right bg-deep-pink-opacity padding-six-lr lg-padding-seven-lr padding-five-tb sm-padding-30px-all last-paragraph-no-margin row" id = "main_searchContainer">
                                <input type = "text" class="col-12 col-md-9 margin-15px-lr no-margin-bottom" placeholder = "Tu trámite..." id = "main_searchBar" required></input>
                                <button class="col-12 col-md-2" id ="searchButton"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0 wow fadeIn" id = "about_us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 p-0 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" style="background: transparent url(assets/img/tramite.jpg)"></div>
                    <div class="col-12 col-lg-6 p-0 d-flex align-items-center position-relative text-center text-lg-left wow fadeIn" data-wow-delay="0.2s" id = "about_us-infoHolder">
                        <div class="padding-fifteen-all lg-padding-ten-all sm-padding-30px-all width-100">
                            <div class="alt-font margin-20px-bottom text-white-2 width-90 lg-width-100 sm-margin-15px-bottom" id = "about_us-title">Kiosko Digital</div>
                            <div class="alt-font text-medium margin-10px-bottom" id = "about_us-text">¡Bienvenido a Tu Kiosko Digtal! Con esta sencilla aplicación podrás buscar, solicitar o pagar cualquier trámite gubernamental que necesites; solo haz click en el buscador o en la sección de trámites para iniciar el proceso correspondiente.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resultados de búsqueda / Trámites -->
        <section class="wow fadeIn" id = "services">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center margin-30px-bottom">
                        <p class="alt-font margin-5px-bottom text-uppercase text-medium-gray text-small">Generación de  solicitudes</p>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100">Trámites y Servicios</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>

                <?php
                    $depends;
                    $countDepends = 1;

                    $trams;

                    while($deps = mysqli_fetch_array($resultDepends)){
                        $depends .= '<div class="row"><div class="col-12 margin-40px-bottom margin-40px-top"><div class="position-relative overflow-hidden w-100"><span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">'.$deps[0].'</span></div></div>';

                        $queryTrams = "Select tramites_link, tramites_nombre, tramites_dependencia, tramites_nDocumentos, tramites_costo, tramites_duracion, tramites_nEtiquetas, tramites_etiqueta1, tramites_etiqueta2, tramites_etiqueta3, tramites_etiqueta4 from tramites where tramites_dependencia = ".$countDepends++;
                        $resultTrams = mysqli_query($connect, $queryTrams);

                        while($trams = mysqli_fetch_array($resultTrams)) {
                            if($trams[0] != 'NULL'){
                                $tag1 = filter(strtolower($trams[7]));
                                $tag2 = filter(strtolower($trams[8]));
                                $tag3 = filter(strtolower($trams[9]));
                                $tag4 = filter(strtolower($trams[10]));

                                $depends .= '<div class="col-12 col-md-4 margin-15px-bottom wow fadeIn '.$tag1;

                                if($trams[8] != NULL) $depends .= ' '.$tag2;
                                if($trams[9] != NULL) $depends .= ' '.$tag3;
                                if($trams[10] != NULL) $depends .= ' '.$tag4;

                                $depends .= ' serviceItem"><div class="position-relative overflow-hidden"><div class="w-100 serviceItemBg"></div><div class="opacity-medium bg-extra-dark-gray"></div><div class="blog-box"><div class="blog-box-image d-flex flex-column justify-content-center align-items-center text-center h-100"><span class="text-white-2 text-uppercase alt-font font-weight-600 text-small letter-spacing-2">'.$trams[1].'</span></div><div class="blog-box-content d-flex flex-column justify-content-center align-items-center text-center h-100"><a href="#" class="btn btn-white btn-rounded btn-small"><i class="far fa-long-arrow-alt-right"></i></a></div></div></div></div>';
                            }
                        }
                        $depends .= '</div>';
                    }
                    echo $depends;
                ?>

                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" id="solRequest">
                        <div class="content-box big-box box-shadow">
                        <form class = "row justify-content-center">
                            <div class="col-12 col-md-9">
                                <input type="text" placeholder="Nombre(s)" id="nombreUsuario" required>
                            </div>

                            <div class="col-12 col-md-9">
                                <input type="text" placeholder="Numero de teléfono" id="phoneUsuario" required>
                            </div>

                            <div class="col-12 col-md-9">
                                <input type="email" id="emailUsuario" placeholder="Correo electrónico" required>
                            </div>

                            <div class="col-12 col-md-9">
                                <label for="exampleInputPassword1">Documento 1</label>
                                <input type="file" class="form-control-file" id="File1">
                            </div>

                            <div class="col-3">
                                <label for="exampleInputPassword1">Documento 2</label>
                                <input type="file" class="form-control-file" id="File2">
                            </div>
                            <div class="col-3">
                                <label for="exampleInputPassword1">Documento 3</label>
                                <input type="file" class="form-control-file" id="File3">
                            </div>
                            <div class="col-3">
                                <label for="exampleInputPassword1">Documento 4</label>
                                <input type="file" class="form-control-file" id="File4">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                            </div>
                        </form>
                     </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wow fadeIn" id ="help">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center margin-30px-bottom">
                        <p class="alt-font margin-5px-bottom text-uppercase text-medium-gray text-small">¿Cómo se usa?</p>
                        <h5 class="text-uppercase alt-font text-white-2 margin-20px-bottom font-weight-700 md-width-100">Ayuda</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>

                <div class="row helpStep">
                    <div class="col-12 col-md-4 wow fadeInLeft">
                        <div><h2 class="text-white-2">01.</h2></div>
                        <p class="text-light-gray text-medium">Al entrar en la página principal, realizar una búsqueda con una palabra clave que se asocie con el trámite o servicio que necesita realizar.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left "></div>
                    </div>
                    <div class="col-12 col-md-8 wow fadeInRight"><img src="assets/img/help1.jpg"></div>
                </div>

                <div class="row helpStep">
                    <div class="col-12 col-md-8 wow fadeInLeft"><img src="assets/img/help2.jpg"></div>
                    <div class="col-12 col-md-4 wow fadeInRight">
                        <div><h2 class="text-white-2">02.</h2></div>
                        <p class="text-light-gray text-medium">Después, seleccionar el trámite que desea, basado en la dependencia a la que pertenece.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left "></div>
                    </div>
                </div>

                <div class="row helpStep">
                    <div class="col-12 col-md-4 wow fadeInLeft">
                        <div><h2 class="text-white-2">03.</h2></div>
                        <p class="text-light-gray text-medium">Llenar y subir los datos y archivos requeridos.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left "></div>
                    </div>
                    <div class="col-12 col-md-8 wow fadeInRight"><img src="assets/img/help3.jpg"></div>
                </div>

                <div class="row helpStep">
                    <div class="col-12 col-md-8 wow fadeInLeft"><img src="assets/img/help4.jpg"></div>
                    <div class="col-12 col-md-4 wow fadeInRight">
                        <div><h2 class="text-white-2">04.</h2></div>
                        <p class="text-light-gray text-medium">Una vez que ha revisado que no hay errores, dar click en "Enviar" para registrar su trámite.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left "></div>
                    </div>
                </div>

                <div class="row helpStep">
                    <div class="col-12 wow fadeInUp">
                        <div><h2 class="text-white-2">05.</h2></div>
                        <p class="text-light-gray text-medium">Esperar la respuesta por parte de la dependencia corespondiente, para cualquier aclaración, se le contactará por medio de correo electrónico.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left "></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacto -->
        <section class="wow fadeIn" id = "contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center margin-30px-bottom">
                        <p class="alt-font margin-5px-bottom text-uppercase text-medium-gray text-small">¿Tienes alguna duda?</p>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100">Contáctanos</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>
                <form id="contact-form-2" action="javascript:void(0)" method="post">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 wow fadeIn text-center">
                            <div id="success-contact-form-2" class="mx-0"></div>
                            <input type="text" name="name" id="name" placeholder="Nombre *" class="input-border-bottom">
                            <input type="text" name="email" id="email" placeholder="E-mail *" class="input-border-bottom">
                            <input type="text" id="subject" name="subject" placeholder="Asunto" class="input-border-bottom">
                            <textarea name="comment" id="comment" placeholder="Tu mensaje" class="input-border-bottom"></textarea>
                            <button id="contact-us-button-2" type="submit" class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top">Enviar mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Ayuda -->

        <footer class="footer-clean-dark bg-extra-dark-gray padding-five-tb sm-padding-30px-tb">
            <div class="footer-widget-area padding-30px-bottom" style="text-align: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 widget text-left text-md-center text-lg-left md-margin-50px-bottom sm-margin-30px-bottom">
                            <a href="index.html" class="d-inline-block"><img class="footer-logo" src="assets/img/logo.png" data-rjs="assets/img/logo.png" alt="Zacatecas"></a>
                        </div>

                        <div class="col-md-4 widget sm-margin-30px-bottom">
                            <div class="widget-title alt-font text-extra-small text-uppercase text-white-2 margin-15px-bottom font-weight-600">contact information</div>

                            <div class="text-small line-height-24 text-medium-gray">Email: <a href="mailto:sales@domain.com" class="text-medium-gray">sales@domain.com</a></div>
                            <div class="text-small line-height-24 text-medium-gray">Phone: +44 (0) 123 456 7890</div>
                        </div>

                        <div class="col-md-4 widget sm-margin-30px-bottom">
                            <div class="widget-title alt-font text-extra-small text-white-2 text-uppercase margin-15px-bottom font-weight-600">On social networks</div>
                            <ul class="list-unstyled">
                                <li class="w-50 float-left"><a href="https://www.facebook.com/" target="_blank" class="text-medium-gray text-small">Facebook</a></li>
                                <li class="w-50 float-left"><a href="https://www.pinterest.com/" target="_blank" class="text-medium-gray text-small">Pinterest</a></li>
                                <li class="w-50 float-left"><a href="https://www.twitter.com/" target="_blank" class="text-medium-gray text-small">Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="border-color-medium-dark-gray border-top padding-30px-top">
                    <div class="row">
                        <div class="col-12 text-small text-center text-medium-gray">© 2019 <strong>Kiosko Digital</strong>. Todos los derechos reservados. Sitio desarrollado por <a href="javascript:void(0);" target="_blank" class="text-dark-gray">Gallos</a><br><a href="javascript:void(0);" class="text-dark-gray">Términos y Condiciones</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">Aviso de Privacidad</a></div>
                    </div>
                </div>
            </div>
        </footer>

        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>

        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/skrollr.min.js"></script>
        <script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
        <script type="text/javascript" src="assets/js/bootsnav.js"></script>
        <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/page-scroll.js"></script>
        <script type="text/javascript" src="assets/js/swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.count-to.js"></script>
        <script type="text/javascript" src="assets/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/classie.js"></script>
        <script type="text/javascript" src="assets/js/hamburger-menu.js"></script>
        <script type="text/javascript" src="assets/js/counter.js"></script>
        <script type="text/javascript" src="assets/js/skill.bars.jquery.js"></script>
        <script type="text/javascript" src="assets/js/justified-gallery.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript">
            var x = 0;

            $(document).ready(function(){
                $(".serviceItem").click(function() {
                    $('#solRequest').css('display', 'block');
                    x = 1;
                    $('.serviceItem').css('display', 'none');
                    $('.serviceItem').parent().css('display', 'none');
                    $(this).parent().css('display', 'block');
                    $(this).css('display', 'block');
                });

                $('#searchButton').click(function () {
                    if($('#main_searchBar').val() == "") notifFilter();
                    else {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#services").offset().top
                        }, 600);
                        var filter = $('#main_searchBar').val();
                        $('.serviceItem').css('display', 'none');
                        $('.serviceItem').parent().css('display', 'none');
                        $('.' + filter).parent().css('display', 'block');
                        $('.' + filter).css('display', 'block');
                    }
                });
            });
        </script>
    </body>
</html>