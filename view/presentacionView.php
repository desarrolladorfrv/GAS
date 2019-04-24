<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/library/materialize/css/materialize.min.css">
    <script src="../assets/library/jquery/jquery.js"></script>

    <link rel="stylesheet" href="../css/presentacion.css">

</head>
<body class="row">
    <div class="col s12 m12 l8 xl8">
        <div class="col s0 m1 l1 xl1"></div>
        <div class="col s12 m10 l10 xl10 center">
            <h3 id="title"></h3>
        </div>
        <div id="moreInfo" class="col s12 m12 l6 xl4">
            <!-- <div class="col s12 m12 l12 xl12"> -->
                <img class="moreInfo_image col s3 m2 l4 xl4" src="../assets/image/icon_trafico_urbano.jpg">
                <p class="moreInfo_title">asd asda sd asd asd</p>
            <!-- </div> -->
        </div>
        <p class="col " id="info"></p>
    </div>
    <!-- <div class="col s0 m1 l1 xl1"></div>
    <div class="col s12 m10 l10 xl10">
        <p id="info"></p>
    </div> -->
    <!-- </div> -->

    <script src="../assets/library/materialize/js/materialize.min.js"></script>   
</body>
<script>
principal = ()=>
{
    let tempData = this.parent.getDataIframe();
    $("#title").html(tempData.title);
    $("#info").html(tempData.info);
}
principal();
</script>
</html>