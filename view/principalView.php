<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="../assets/library/jquery/jquery.js"></script>
    <script src="../assets/library/slick/slick.min.js"></script>

    <link rel="stylesheet" href="../assets/library/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/library/slick/slick.css">
    <link rel="stylesheet" href="../assets/library/slick/slick-theme.css">

</head>
<style>
    .slick-dots li button:before
    {
        font-size:25px;
        color:silver;
    }
    .slick-dots li.slick-active button:before
    {
        color:rgba(44, 44, 128, 0.8);
    }
    .caroucel-img1
    {
        max-width:100%;
        min-height:300px;
        /* clip-path:inset(0 1% 0 1%); */
        background-image: url(../assets/image/TUNELES_0.jpg);
        background-position: center;
        background-size: cover;
        /* text-align:center; */
        margin:0px !important;
    }
    .caroucel-slide
    {
        /* width:60%; */
        min-height: 300px !important;
        background:rgba(44, 44, 128, 0.7);
        /* text-align:center; */
    }
    h2 ,.slide-text , .slide-button>a
    {
        color:white;
    }
    h2
    {
        margin:0px;
    }
    .slide-text
    {
    }
    .slide-button
    {
        /* border:1px solid; */
        padding: 4px 8px 4px 8px;
        background:rgba(0, 193, 0);
        text-align:center;
        /* width: max-content; */
    }

    .color-slide
    {
    }
</style>
<body>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">one<span class="badge">1</span></a></li>
        <li><a href="#!">two<span class="new badge">1</span></a></li>
        <li><a href="#!">three</a></li>
    </ul>
    <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a>

    <div class="single-item col s12 m12 l12 xl12">
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

    <script src="../assets/library/materialize/js/materialize.min.js"></script>
</body>
<script>
    // console.log($("#dropdown2"));
    // $(document).ready(function(){
    // $('.carousel').carousel();
    $('.single-item').slick({
        "setting-name":"setting-value",
        dots: true,
        dotsClass:"slick-dots",
        infinite: true,
        speed: 300,
        prevArrow:"",
        nextArrow:""
        // slidesToShow: 1,
        });
//   });
</script>
</html>