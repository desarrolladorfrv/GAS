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

</head>
<style>
    #head
    {
        height:calc(12vh)
    }

    #divIframe
    {
        height:calc(73vh);
    }

    #divIframe>iframe
    {
        width:100%;
        height:100%;
        border:0px;
    }
</style>
<body>
    <!-- <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">one<span class="badge">1</span></a></li>
        <li><a href="#!">two<span class="new badge">1</span></a></li>
        <li><a href="#!">three</a></li>
    </ul>
    <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a> -->
    <div id="head">
        <?php require_once '../view/headView.php'; ?>
    </div>
    <div id="divIframe"></div>

    <script src="../js/principal.js"></script>
    <script src="../assets/library/materialize/js/materialize.min.js"></script>    
</body>
<script>
    // console.log($("#dropdown2"));
    // $(document).ready(function(){
    // $('.carousel').carousel();
    
//   });
</script>
</html>