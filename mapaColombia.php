<?php
$fp = fopen("lenguaje.txt", "r");
$leng= fgets($fp);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bunker Dynamics</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->

    <!--Archivo para Incluir los css -->
    <?php include 'include_css.php';?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="jquery.webui-popover.css">
</head>

<body>

<section class="menu_completo">
    <!-- Archivo de la sección del logo y del menu -->
    <?php include 'header.php';?>
    <!-- Archivo de la sección del slider -->
</section>

<!-- Secciones de contenido de la web en la que estes, en este caso index -->
<!-- el class debe colocarse templatemo-xxxxx y en el css crearlo con los similares a los otros -->

<br><br><br><br><br><br><br><br><br>
<center>
    <img src="mapaColombia.png" name="mapaCol" usemap="#mapa">

    <map id="mapa" name="mapa">
        <area shape="rect" alt="la guajira" title="la guajira" id="laGuajira" onclick="myFunction()" coords="434,34,446,53" href="" target="" />
        <area shape="rect" alt="barranquilla" title="barranquilla" id="barranquilla" onclick="myFunction()" coords="323,81,342,99" href="" target="" />
        <area shape="rect" alt="santa marta" title="santa marta" id="santaMarta" onclick="myFunction()" coords="281,90,300,111" href="" target="" />
        <area shape="rect" alt="cartagena" title="cartagena" id="cartagena" onclick="myFunction()" coords="253,159,269,178" href="" target="" />
        <area shape="rect" alt="golfo morrosquillo" title="golfo morrosquillo" id="golfoMorrosquillo" onclick="myFunction()" coords="215,189,231,210" href="" target="" />
        <area shape="rect" alt="isla san andres" title="isla san andres" id="islaSanAndres" onclick="myFunction()" coords="121,61,134,80" href="" target="" />
        <area shape="rect" alt="turbo" title="turbo" id="turbo" onclick="myFunction()" coords="176,243,193,265" href="" target="" />
        <area shape="rect" alt="tribuga" title="tribuga" id="tribuga" onclick="myFunction()" coords="156,344,170,363" href="" target="" />
        <area shape="rect" alt="buenaventura" title="buenaventura" id="buenaventura" onclick="myFunction()" coords="170,477,187,500" href="" target="" />
        <area shape="rect" alt="tumaco" title="tumaco" id="tumaco" onclick="myFunction()" coords="67,585,83,606" href="" target="" />
    </map>
</center>

<div style="display: none">
    <div id="myContentlaGuajira">
        <a href="#"></a>
    </div>
    <div id="myContentbarranquilla">
        <a href="#"></a>
    </div>
    <div id="myContentsantaMarta">
        <a href="#"></a>
    </div>
    <div id="myContentcartagena">
        <ul>
            <li><a href="productos.php">Lubricantes GULF</a></li>
            <li><a href="productos.php">Lubricantes SHELL</a></li>
            <li><a href="productos.php">Lubricantes TOTAL</a></li>
            <li><a href="productos.php">Lubricantes MOBIL</a></li>
            <li><a href="productos.php">IFO 380 (RMG – 35)</a></li>
            <li><a href="productos.php">Marine Gasoil (MGO) </a></li>
            <li><a href="productos.php">Otros IFO´s</a></li>
        </ul>
    </div>
    <div id="myContenttribuga">
        <a href="#"></a>
    </div>
    <div id="myContentgolfoMorrosquillo">
        <a href="#"></a>
    </div>
    <div id="myContentturbo">
        <a href="#"></a>
    </div>
    <div id="myContentbuenaventura">
        <a href="#"></a>
    </div>
    <div id="myContenttumaco">
        <a href="#"></a>
    </div>
</div>
<?php include 'footer.php';?>
<!-- todos los JS que necesita la web -->
<?php include 'include_js.php';?>
<script src="jquery.webui-popover.js"></script>

<script type="text/javascript"> <!-- codigo en cada php para que marque el menu en el que esta -->
    (function(){
        $('#laGuajira').webuiPopover({title:'Puertos',url:'#myContentlaGuajira'});
        $('#barranquilla').webuiPopover({title:'Puertos',url:'#myContentbarranquilla'});
        $('#santaMarta').webuiPopover({title:'Puertos',url:'#myContentsantaMarta'});
        $('#cartagena').webuiPopover({title:'',url:'#myContentcartagena'});
        $('#golfoMorrosquillo').webuiPopover({title:'Puertos',url:'#myContentgolfoMorrosquillo'});
        $('#turbo').webuiPopover({title:'Puertos',url:'#myContentturbo'});
        $('#tribuga').webuiPopover({title:'Puertos',url:'#myContenttribuga'});
        $('#buenaventura').webuiPopover({title:'Puertos',url:'#myContentbuenaventura'});
        $('#tumaco').webuiPopover({title:'Puertos',url:'#myContenttumaco'});
        $('#islaSanAndres').webuiPopover({title:'Puertos',url:'#myContentislaSanAndres'});
    })();
    var c1;
    var c2;
    function myFunction() {
        $(document).mousemove(function(event) {
            $(".webui-popover").css("margin-left", event.pageX);
            //$(".webui-popover").css("margin-top", event.pageY-110-document.body.scrollTop);
            $(".webui-popover").css("margin-top", event.pageY-160-document.body.scrollTop);
            $(document).unbind(event);
        });
        c1 = $(".webui-popover").css("margin-left");
        c2 = $(".webui-popover").css("margin-top");
        console.log(c1+"  "+c2);
        console.log("document.body.scrollTop");
        console.log(document.body.scrollTop);
    }
</script>
</body>
</html>