<!DOCTYPE html>
<html>
    <head>
        <title>Oportunidades Servicios Financieros - @yield('title')</title>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link href="editor/contentbuilder/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <link href="editor/contentbuilder/contentbuilder.css" rel="stylesheet" type="text/css" /> 

    

    <body>
        <div id="preHeader">
            <div class="container-itemsPreHeader">
                <a class="preHeader-item  borderLeftItems" href="#">Quiénes somos</a>
                <a class="preHeader-item  borderLeftItems" href="#">Oficinas</a>
                <a class="preHeader-item  borderLeftItems" href="#">01 8000 517793 o 307 3029 en Bogotá</a>
                <a class="preHeader-item " href="#">* Aplican condiciones y restricciones</a>

                @auth
                    <div class="logoutButton">
                         <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>                                
                    </div>
                @endauth

            </div>
        </div>

        <div id="header">
            <div class="row resetRow">
                <div class="col-12 col-sm-6 resetCol">
                    <div class="header-containerLogo">
                        <img src="images/opottunidadesServiciosFinancierosLogo.png" title="Oportunidades Servicios Financieros" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-6 resetCol">
                    <nav class="navbar header-menu navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse header-containerItems" id="navbarNavAltMarkup">
                            <div class="navbar-nav header-menu">
                                <a class="nav-item nav-link header-item header-item1" href="#"> <span class="header-textoItem">Oportuya</span></a>
                                <a class="nav-item nav-link header-item header-item2" href="#"> <span class="header-textoItem">Crédito motos</span></a>
                                <a class="nav-item nav-link header-item header-item3" href="#"> <span class="header-textoItem">Crédito libranza</span></a>
                                <a class="nav-item nav-link header-item header-item4" href="#"> <span class="header-textoItem">Seguros</span></a>
                                <a class="nav-item nav-link header-item header-item5" href="#"> <span class="header-textoItem">Viajes</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div id="container">
            @yield('content')
        </div>

        <div id="footer">
            <div class="row resetRow">
                <div class="col-12 col-md-12 col-lg-3 resetCol">
                    <div class="footer-contianerLogo">
                        <img src="images/footer-oportunidadesServiciosFinancierosLogo.png" title="Oportunidades Servicios Financieros" class="img-fluid">
                    </div>
                    <div class="footer-contianerTelefonos">
                        <img src="images/footer-telefonoIcon.png" alt="Línea Nacional" class="img-fluid footer-imgNosotros" />
                        <p class="footer-textTelefonos">
                            <span class="footer-textTelefonosNal">Línea nacional: 57 (1)484 2122</span> <br />
                            <span class="footer-textHorario">Lunes a Viernes 8 a 5pm</span>
                        </p>
                    </div>
                    <div class="footer-contianerNosotros">
                        <ul class="footer-menuNosotros">
                            <h5 style="font-family: 'Barlow Condensed', sans-serif;">NOSOTROS</h5>
                            <li><a href="#" class="footer-menuItem" title="Preguntas frecuentes">Blog</a></li>
                            <li><a href="#" class="footer-menuItem" title="Por qué comprar con nosotros">Quiénes somos</a></li>
                            <li><a href="#" class="footer-menuItem" title="Tiempos y costos de envío">Cobertura</a></li>
                            <li><a href="#" class="footer-menuItem" title="Cambios , devoluciones y atención de garantias">Código de ética y buen gobierno corporativo</a></li>
                            <li><a href="#" class="footer-menuItem" title="Protección al consumidor">Protección de datos personales</a></li>
                            <li><a href="#" class="footer-menuItem" title="“Todo lo que debe saber sobre la TDT”">Políticas de promociones y descuentos</a></li>
                            <li><a href="#" class="footer-menuItem" title="“Todo lo que debe saber sobre la TDT”">Términos y condiciones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 resetCol">
                    <h4 class="text-center footer-title">Si tienes alguna inquietud <strong style="font-family: 'Barlow Condensed', sans-serif;">¡Contáctanos!</strong></h4>
                    <div class="footer-containerServicioCliente">
                        <ul class="footer-menu">
                            <h5 style="font-family: 'Barlow Condensed', sans-serif;">SERVICIO AL CLIENTE</h5>
                            <li><a href="#" class="footer-menuItem" title="Preguntas frecuentes">Preguntas frecuentes</a></li>
                            <li><a href="#" class="footer-menuItem" title="Por qué comprar con nosotros">Por qué comprar con nosotros</a></li>
                            <li><a href="#" class="footer-menuItem" title="Tiempos y costos de envío">Tiempos y costos de envío</a></li>
                            <li><a href="#" class="footer-menuItem" title="Cambios , devoluciones y atención de garantias">Cambios , devoluciones y atención de garantias</a></li>
                            <li><a href="#" class="footer-menuItem" title="Protección al consumidor">Protección al consumidor</a></li>
                            <li><a href="#" class="footer-menuItem" title="“Todo lo que debe saber sobre la TDT”">“Todo lo que debe saber sobre la TDT”</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 resetCol">
                    <div class="footer-containerNewsletter">
                        <h5 class="footer-titleNewsLetter" style="font-family: 'Barlow Condensed', sans-serif;">QUIERES RECIBIR LAS MEJORES OFERTAS</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Ingresa tu e-mail">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary">Suscribirse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="editor/contentbuilder/jquery-ui.min.js" type="text/javascript"></script>
        <script src="editor/contentbuilder/contentbuilder.js" type="text/javascript"></script>
        <link href="editor/contentbuilder/contentbuilder.css" rel="stylesheet" type="text/css" />
   

        <script type="text/javascript">
        
            jQuery(document).ready(function ($) {

            $("#contentarea").contentbuilder({
                snippetFile: "editor/assets/minimalist-basic/snippets.html",
                snippetOpen: false,
                toolbar: 'left',
                iconselect: "editor/assets/ionicons/selecticon.html"
            });

            });

             function view() {
            /* This is how to get the HTML (for saving into a database) */
             var sHTML = $('#contentarea').data('contentbuilder').viewHtml();
             }

        </script>

    </body>
    
    
    <script type="text/javascript">
        $('#sliderPrincipal').slick({
            autoplay: true,
            autoplaySpeed: 15000,
            nextArrow: '<i class="fa fa-chevron-left slideNext"></i>',
            prevArrow: '<i class="fa fa-chevron-right slidePrev"></i>',
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    }
                }
            ]
        });

        

    </script>
</html>