!DOCTYPE html>
<html>
    <head>
        <title>Oportunidades Servicios Financieros - <?php echo $__env->yieldContent('title'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/app2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick-theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
    <link href="<?php echo e(asset('editor/contentbuilder/codemirror/lib/codemirror.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="<?php echo e(asset('editor/contentbuilder/contentbuilder.css')); ?>" rel="stylesheet" type="text/css" /> 
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <script type="text/javascript" src="<?php echo e(asset('js/script.js')); ?>"></script>
    </head>
   



    <body>
        <div id="preHeader">
            <div class="container-itemsPreHeader">
                <a class="preHeader-item  borderLeftItems" href="#">Quiénes somos</a>
                <a class="preHeader-item  borderLeftItems" href="#">Oficinas</a>
                <a class="preHeader-item  borderLeftItems" href="#">01 8000 517793 o 307 3029 en Bogotá</a>
                <a class="preHeader-item " href="#">* Aplican condiciones y restricciones</a>

                <?php if(auth()->guard()->check()): ?>
                    <div class="logoutButton">
                         <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>                                
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <div id="header">
            <div class="row resetRow">
                <div class="col-12 col-sm-12 col-lg-6 resetCol headerImage">
                    <div class="header-containerLogo">
                        <a href="/">
                        <img src="<?php echo e(asset('images/opottunidadesServiciosFinancierosLogo.png')); ?>" title="Oportunidades Servicios Financieros" class="img-fluid">
                        </a>
                    </div>
                </div>
                

                <div class="col-12 col-sm-12 col-lg-6 resetCol toggleResponsive">
                    
                    <div class="buttonResponsive">
                        <div class="innerButtonResponsive"></div>
                        <div class="innerButtonResponsive1"></div>
                        <div class="innerButtonResponsive2"></div>
                    </div>

                    <div class="   header-containerItemsResponsive header-item1" id="navbarNavAltMarkup">
                        <div class="navbar-nav header-menu">
                            <a class="nav-item nav-link header-item header-item1" href="/oportuya"> <span class="header-textoItem">Oportuya</span></a>
                            <a class="nav-item nav-link header-item header-item1" href="/motos"> <span class="header-textoItem">Crédito motos</span></a>
                            <a class="nav-item nav-link header-item header-item1" href="/libranza"> <span class="header-textoItem">Crédito libranza</span></a>
                            <a class="nav-item nav-link header-item header-item1" href="/seguros"> <span class="header-textoItem">Seguros</span></a>
                            <a class="nav-item nav-link header-item header-item1" href="/viajes"> <span class="header-textoItem">Viajes</span></a>
                        </div>
                    </div>

                    
                    
                    <nav class="navbar header-menu navbar-expand-lg navbar-light navBarHide">
                    
                        <div class="collapse navbar-collapse header-containerItems" id="navbarNavAltMarkup">
                            <div class="navbar-nav header-menu">
                                <a class="nav-item nav-link header-item header-item1" href="/oportuya"> <span class="header-textoItem">Oportuya</span></a>
                                <a class="nav-item nav-link header-item header-item2" href="/motos"> <span class="header-textoItem">Crédito motos</span></a>
                                <a class="nav-item nav-link header-item header-item3" href="/libranza"> <span class="header-textoItem">Crédito libranza</span></a>
                                <a class="nav-item nav-link header-item header-item4" href="/seguros"> <span class="header-textoItem">Seguros</span></a>
                                <a class="nav-item nav-link header-item header-item5" href="/viajes"> <span class="header-textoItem">Viajes</span></a>
                            </div>
                        </div>
                    </nav>
                   
                </div>
                   
                     
            </div>
        </div>
        <div id="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <div id="footer">
            <div class="row resetRow">
                <div class="col-12 col-md-12 col-lg-3 resetCol footer-containMenu">
                    <div class="footer-contianerLogo">
                        <img src="<?php echo e(asset('images/footer-oportunidadesServiciosFinancierosLogo.png')); ?>" title="Oportunidades Servicios Financieros" class="img-fluid">
                    </div>
                    <div class="footer-contianerTelefonos">
                        <img src="<?php echo e(asset('images/footer-telefonoIcon.png')); ?>" alt="Línea Nacional" class="img-fluid footer-imgNosotros" />
                        <p class="footer-textTelefonos">
                            <span class="footer-textTelefonosNal">Línea nacional: 57 (1)484 2122</span> <br />
                            <span class="footer-textHorario">Lunes a Viernes 8 a 5pm</span>
                        </p>
                    </div>
                    <div class="footer-contianerNosotros">
                        <ul class="footer-menuNosotros">
                            <h5 class="footer-menuTitle">NOSOTROS</h5>
                            <li><a href="#" class="footer-menuItem" title="Preguntas frecuentes">Catálogo almacenes <?php echo date("Y") ?></a></li>
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
                <div class="col-12 col-md-12 col-lg-6 resetCol footer-containMenu">
                    <h4 class="text-center footer-title">Si tienes alguna inquietud <strong>¡Contáctanos!</strong></h4>
                    <div class="footer-containerServicioCliente">
                        <ul class="footer-menu">
                            <h5 class="footer-menuTitle" >SERVICIO AL CLIENTE</h5>
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
                        <h5 class="footer-titleNewsLetter">QUIERES RECIBIR LAS MEJORES OFERTAS</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Ingresa tu e-mail">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary">Suscribirse</button>
                            </div>
                        </div>


                        <span class="footer-menuText">SÍGUENOS:</span> <a href="#"><img src="<?php echo e(asset('images/footer-facebookIcon.png')); ?>" alt="Facebook Oportunidades Servicios Financieros" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="<?php echo e(asset('editor/contentbuilder/jquery-ui.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('editor/contentbuilder/contentbuilder.js')); ?>" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/libranza.js')); ?>"></script>
        <link href="<?php echo e(asset('editor/contentbuilder/contentbuilder.css')); ?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
        
            jQuery(document).ready(function ($) {
            


            editorInit('test1','http://localhost:8000/editor/assets/minimalist-basic/snippets-bootstrap.html');

            var contentCardHeight=$('.contentCards').height();
            
            $('.oportuyaCardsContent').height(contentCardHeight);

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

        $('#oportuyaSlider').slick({
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

        $('#sliderPrincipalLibranza').slick({
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
