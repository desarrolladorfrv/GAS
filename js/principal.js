
inicio = ()=>
{
    $("#divIframe").html("<iframe id='frameprueba' src='inicio.php'></iframe>");
}

iframePresentacionView = (data)=>
{
    let tempData = $("<iframe>",{id:"frameprueba",src:"presentacionView.php"});
    $("#divIframe")[0].myData = data;
    $("#divIframe").html(tempData);
}

getDataIframe = ()=>
{
    return $("#divIframe")[0].myData;
}

inicio();