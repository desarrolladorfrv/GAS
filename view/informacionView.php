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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/informacion.css">

</head>
<body class="row">
    <div id="image2" class="col s12 m12 l12 xl12"></div>
    <div class="col s12 m12 l8 xl8">
        <div class="col s0 m1 l1 xl1"></div>
        <div class="col s12 m10 l10 xl10 center">
            <h3 id="title"></h3>
        </div>
        <p class="col s12 m12 l12 xl12" id="info"></p>
        <div id="" class="col s12 m12 l6 xl4"></div>
        <br>
        <ul class="collapsible col s12 m12 l12 xl12"></ul>
    </div>

    <script src="../assets/library/materialize/js/materialize.min.js"></script>
</body>
<script>
    $(document).ready(function(){
      $('.collapsible').collapsible();
    });

    principal = ()=>
    {
        let data = this.parent.getDataIframe();
        let tempData = "";
        // $("#image2").html("<img class='col s12 m12 l12 xl12' src='"+data.image2+"'>");
        $("#image2").css({"background-image":"url("+data.image2+")"});
        $("#title").html(data.title);
        $("#info").html(data.info);
        $.each(data.collapse,(index,value)=>
        {
            tempData += '<li><div class="collapsible-header"><i class="material-icons">'+
            '</i>'+value.title+'</div><div class="collapsible-body"><span>'+value.info+'</span></div></li>';
        });
        $(".collapsible").html(tempData);
    }

    principal();
        
</script>
</html>