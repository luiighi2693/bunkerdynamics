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
<center style="overflow-x: scroll;">
    <img src="mapaColombia.png" name="mapaCol" usemap="#mapa">

    <map id="mapa" name="mapa">
        <area shape="rect" alt="Puerto Bolivar" title="Puerto Bolivar" id="puertoBolivar" onclick="myFunction()" coords="434,34,446,53" href="" target="" />
        <area shape="rect" alt="santa marta" title="santa marta" id="santaMarta" onclick="myFunction()" coords="323,81,342,99" href="" target="" />
        <area shape="rect" alt="barranquilla" title="barranquilla" id="barranquilla" onclick="myFunction()" coords="281,90,300,111" href="" target="" />
        <area shape="rect" alt="cartagena" title="cartagena" id="cartagena" onclick="myFunction()" coords="253,159,269,178" href="" target="" />
        <area shape="rect" alt="tolu" title="tolu" id="tolu" onclick="myFunction()" coords="215,189,231,210" href="" target="" />
        <area shape="rect" alt="san andres" title="san andres" id="sanAndres" onclick="myFunction()" coords="121,61,134,80" href="" target="" />
        <area shape="rect" alt="turbo" title="turbo" id="turbo" onclick="myFunction()" coords="176,243,193,265" href="" target="" />
        <area shape="rect" alt="buenaventura" title="buenaventura" id="buenaventura" onclick="myFunction()" coords="170,477,187,500" href="" target="" />
        <area shape="rect" alt="tumaco" title="tumaco" id="tumaco" onclick="myFunction()" coords="67,585,83,606" href="" target="" />
    </map>
</center>

<div style="display: none">
    <div id="myContentPuertoBolivar">
        <ul>
            <li><a href="images/puertoBolivarMin.png">Bunkers</a></li>
            <li><a href="images/tablaPuertoBolivar.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentBarranquilla">
        <ul>
            <li><a href="images/barranquillaMin.png">Bunkers</a></li>
            <li><a href="images/tablaBarranquilla.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentSantaMarta">
        <ul>
            <li><a href="images/santaMartaMin.png">Bunkers</a></li>
            <li><a href="images/tablaSantaMarta.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentCartagena">
        <ul>
            <li><a href="images/cartagenaMin.png">Bunkers</a></li>
            <li><a href="images/tablaCaratagena.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentTolu">
        <ul>
            <li><a href="images/toluMin.png">Bunkers</a></li>
            <li><a href="images/tablaTolu.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentTurbo">
        <ul>
            <li><a href="images/turboMin.png">Bunkers</a></li>
            <li><a href="images/tablaTurbo.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentBuenaventura">
        <ul>
            <li><a href="images/buenaventuraMin.png">Bunkers</a></li>
            <li><a href="images/tablaBuenaventura.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentTumaco">
        <ul>
            <li><a href="images/tumacoMin.png">Bunkers</a></li>
            <li><a href="images/tablaTumaco.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentSanAndres">
        <ul>
            <li><a href="images/sanAndresMin.png">Bunkers</a></li>
            <li><a href="images/tablaSanAndres.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
</div>
<?php include 'footer.php';?>
<!-- todos los JS que necesita la web -->
<?php include 'include_js.php';?>
<script src="jquery.webui-popover.js"></script>

<script type="text/javascript"> <!-- codigo en cada php para que marque el menu en el que esta -->
    (function(){
        $('#puertoBolivar').webuiPopover({url:'#myContentPuertoBolivar'});
        $('#barranquilla').webuiPopover({url:'#myContentBarranquilla'});
        $('#santaMarta').webuiPopover({url:'#myContentSantaMarta'});
        $('#cartagena').webuiPopover({url:'#myContentCartagena'});
        $('#tolu').webuiPopover({url:'#myContentTolu'});
        $('#turbo').webuiPopover({url:'#myContentTurbo'});
        $('#buenaventura').webuiPopover({url:'#myContentBuenaventura'});
        $('#tumaco').webuiPopover({url:'#myContentTumaco'});
        $('#sanAndres').webuiPopover({url:'#myContentSanAndres'});
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