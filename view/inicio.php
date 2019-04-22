<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- uso comun -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/library/materialize/css/materialize.min.css">
    <script src="../assets/library/jquery/jquery.js"></script>

    <link rel="stylesheet" href="../css/inicio.css">

    <script src="../assets/library/slick/slick.min.js"></script>
    <link rel="stylesheet" href="../assets/library/slick/slick.css">
    <link rel="stylesheet" href="../assets/library/slick/slick-theme.css">

</head>
<body>
    <div class="row" >
        <div class="single-item col s12 m12 l12 xl12" style="padding:0px;">
            <div class="row caroucel-img1">
                <div class="col s0 m1 l2 xl2"></div>
                <div class="col s12 m10 l8 xl8 caroucel-slide">
                    <h2>LÍDER EN SOLUCIONES DE SEGURIDAD PARA TÚNELES</h2>
                    <div class="slide-text">
                        <p>Los más de 60 túneles implementados en todo el mundo avalan la experiencia de SICE. </p>
                    </div>
                    <div class="col s4 m4 l5 xl5"></div>
                    <div class="slide-button col s4 m3 l2 xl2">
                        <a href="http://www.sice.com/lineas-de-negocio/sistemas-inteligentes-de-trafico/gestion-integral-de-tuneles">Ir al contenido
                        <i class="fas fa-paper-plane" style="padding-left:5px"></i></a>
                    </div>
                </div>
                <div class="col s0 m1 l2 xl2"></div>
            </div>
            <div>your content</div>
            <div>your content</div>
        </div>

        <div class="col s0 m0 l1 xl1"></div>
        <div class="col s12 m12 l6 xl5">
            <div class="center col s12 m12 l12 xl12">
                <h4>Líneas de negocio</h4>
            </div>

            <div class="col s12 m6 l6 xl6">
                <div class="card-negocio">
                    <i class="fas fa-bus-alt"></i>
                    <h6>sistemas inteligentes de transporte</h6>
                </div>
            </div>

            <div class="col s12 m6 l6 xl6">
                <div class="card-negocio">
                    <i class="fas fa-bus-alt"></i>
                    <h6>sistemas inteligentes de transporte</h6>
                </div>
            </div>

            <!-- <div class="col s12 m5 l6 xl6">
            </div> -->

        </div>

        <!-- aqui son 4 cards que se muestran y cambian conforme a tiempo -->
        <div class="col s12 m12 l5 xl5">
            <div class="center col s12 m12 l12 xl12">
                <h4>Actualidad</h4>
            </div>

            <div class="col s12 m12 l12 xl12">
                <div class="multiple-item">
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>SICE obtiene el nivel 3 de madurez en Modelo CMMI para Desarrollo: un reconocimiento al trabajo bien hecho</h6>
                    </div>
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>El semáforo: 150 años de historia</h6>
                    </div>
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>El túnel SR 99 de Seattle, uno de los túneles más seguros jamás construidos, ha abierto al tráfico</h6>
                    </div>
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>La importancia del Agua: SICE colabora en las jornadas del Día Mundial del Agua en la Confederación Hidrográfica del Tajo</h6>
                    </div>
                </div>

                <div class="multiple-item">
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>SICE obtiene el nivel 3 de madurez en Modelo CMMI para Desarrollo: un reconocimiento al trabajo bien hecho</h6>
                    </div>
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>El semáforo: 150 años de historia</h6>
                    </div>
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>El túnel SR 99 de Seattle, uno de los túneles más seguros jamás construidos, ha abierto al tráfico</h6>
                    </div>
                    <div style="margin-left:20px">
                        <div class="caroucel-actual-img1"></div>
                        <h6>La importancia del Agua: SICE colabora en las jornadas del Día Mundial del Agua en la Confederación Hidrográfica del Tajo</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/library/materialize/js/materialize.min.js"></script>
</body>
<script>
    $('.single-item').slick({
        "setting-name":"setting-value",
        dots: true,
        dotsClass:"slick-dots",
        infinite: true,
        speed: 300,
        prevArrow:"",
        nextArrow:"",
        autoplay:true,
        autoplaySpeed:2000,
        // slidesToShow: 1,
    });

    $('.multiple-item').slick({
        "setting-name":"setting-value",
        // dots: true,
        dotsClass:"slick-dots",
        infinite: true,
        autoplay:true,
        autoplaySpeed:3000,
        speed: 800,
        prevArrow:"",
        nextArrow:"",
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1
        // slidesToShow: 1,
    });
</script>
</html>