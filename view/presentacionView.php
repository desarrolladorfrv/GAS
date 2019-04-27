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
    
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/presentacion.css">

    <script src="../assets/library/slick/slick.min.js"></script>
    <link rel="stylesheet" href="../assets/library/slick/slick.css">
    <link rel="stylesheet" href="../assets/library/slick/slick-theme.css">

</head>
<body class="row">
    <div class="col s12 m12 l8 xl8">
        <div class="col s0 m1 l1 xl1"></div>
        <div class="col s12 m10 l10 xl10 center">
            <h3 id="title"></h3>
        </div>
        <div id="moreInfo" class="col s12 m12 l6 xl4"></div>
        <p class="col s12 m12 l12 xl12" id="info"></p>
    </div>

    <div class="col s12 m12 l4 xl4">
        <div class="center col s12 m12 l12 xl12">
            <h4>Noticias</h4>
        </div>

        <div class="col s12 m12 l12 xl12">
            <div class="multiple-item">
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>SICE obtiene el nivel 3 de madurez en Modelo CMMI para Desarrollo: un reconocimiento al trabajo bien hecho shala la la wam wam sha a la la la la long wam bam sha a la la la la la la thing y mas wam bam sha a la la la la la la long final la la la la long thing</p>
                </a>
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>aqui va algo de texto</p>
                </a>
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>El túnel SR 99 de Seattle, uno de los túneles más seguros jamás construidos, ha abierto al tráfico</p>
                </a>
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>La importancia del Agua: SICE colabora en las jornadas del Día Mundial del Agua en la Confederación Hidrográfica del Tajo</p>
                </a>
            </div>

            <div class="multiple-item">
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>SICE obtiene el nivel 3 de madurez en Modelo CMMI para Desarrollo: un reconocimiento al trabajo bien hecho</p>
                </a>
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>aqui va algo de texto</p>
                </a>
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>El túnel SR 99 de Seattle, uno de los túneles más seguros jamás construidos, ha abierto al tráfico</p>
                </a>
                <a class="card-actualidad">
                    <div class="caroucel-actual-img1"></div>
                    <p class="cortar-actualidad"><span class="actualidad_fecha">13 de marzo 2019 | </span>La importancia del Agua: SICE colabora en las jornadas del Día Mundial del Agua en la Confederación Hidrográfica del Tajo</p>
                </a>
            </div>
        </div>
    </div>

    <div class="col s12 m12 l12 xl12">
            <div class="center col s12 m12 l12 xl12">
                <h4>Proyectos relevantes</h4>
            </div>

            <div class="col s12 m12 l12 xl12">
                <div class="multiple-item-proyectos">
                    <a class="card-actualidad">
                        <div class="caroucel-actual-img1"></div>
                        <p class="cortar-actualidad">SICE obtiene el nivel 3 de madurez en Modelo CMMI para Desarrollo: un reconocimiento al trabajo bien hecho</p>
                    </a>
                    <a class="card-actualidad">
                        <div class="caroucel-actual-img1"></div>
                        <p class="cortar-actualidad">El semáforo: 150 años de historia</p>
                    </a>
                    <a class="card-actualidad">
                        <div class="caroucel-actual-img1"></div>
                        <p class="cortar-actualidad">El túnel SR 99 de Seattle, uno de los túneles más seguros jamás construidos, ha abierto al tráfico</p>
                    </a>
                    <a class="card-actualidad">
                        <div class="caroucel-actual-img1"></div>
                        <p class="cortar-actualidad">La importancia del Agua: SICE colabora en las jornadas del Día Mundial del Agua en la Confederación Hidrográfica del Tajo</p>
                    </a>
                </div>
            </div>
        </div>

    <script src="../assets/library/materialize/js/materialize.min.js"></script>
</body>
<script>
principal = ()=>
{
    let tempData = this.parent.getDataIframe();
    let tempObj;
    $("#title").html(tempData.title);
    $("#info").html(tempData.info);
    $.each(tempData.moreInfo,(index,value)=>
    {
        tempObj = $("<div>",{class:"moreInfo_Card col s12 m12 l12 xl12",onClick:"abrirInformacion(this)"});
        $(tempObj)[0].myData = value;
        tempData = '<div class="progress"><div class="indeterminate"></div></div>'+
            '<img class="moreInfo_image col s3 m2 l4 xl4" src="'+value.image+'">'+
            '<p class="moreInfo_title">'+value.title+'</p>';
        $(tempObj).append(tempData);
        $("#moreInfo").append(tempObj);
    });
}
principal();

abrirInformacion = (obj)=>
{
    let tempData = $(obj)[0].myData;
    this.parent.iframeInformacionView(tempData);
}

    $('.multiple-item').slick({
        "setting-name":"setting-value",
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
    });

    $('.multiple-item-proyectos').slick({
        // "setting-name":"setting-value",
        dotsClass:"slick-dots",
        infinite: true,
        autoplay:true,
        autoplaySpeed:3000,
        speed: 800,
        prevArrow:"",
        nextArrow:"",
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive:
        [
            {
                breakpoint: 1024,
                settings:
                {
                    slidesToShow: 3,
                    // slidesToScroll: 3,
                    // infinite: true,
                    // dots: true
                }
            },
            {
                breakpoint: 600,
                settings:
                {
                    slidesToShow: 2,
                    // slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings:
                {
                    slidesToShow: 2,
                    // slidesToScroll: 1
                }
            }
        ]
    });
</script>
</html>