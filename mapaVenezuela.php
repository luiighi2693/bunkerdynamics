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
                 <img src="mapaVenezuela.png" name="mapaVen" usemap="#mapa">

                    <map id="mapa" name="mapa">
                        <area shape="rect" id="guarana" alt="guarana" title="guarana" onclick="myFunction()" coords="82,154,94,166" href="" target="" />
                        <area shape="rect" id="bajoGrande" alt="bajo grande" title="bajo grande" onclick="myFunction()" coords="70,182,82,192" href="" target="" />
                        <area shape="rect" id="laCeiba" alt="la ceiba" title="la ceiba" onclick="myFunction()" coords="100,226,114,236" href="" target="" />
                        <area shape="rect" id="laSalina" alt="la salina" title="la salina" onclick="myFunction()" coords="106,190,118,200" href="" target="" />
                        <area shape="rect" id="ptoMiranda" alt="pto. miranda" title="pto. miranda" onclick="myFunction()" coords="110,148,120,160" href="" target="" />
                        <area shape="rect" id="cardon" alt="cardon" title="cardon" onclick="myFunction()" coords="146,118,160,128" href="" target="" />
                        <area shape="rect" id="amuay" alt="amuay" title="amuay" onclick="myFunction()" coords="158,92,172,104" href="" target="" />
                        <area shape="rect" id="elPalito" alt="el palito" title="el palito" onclick="myFunction()" coords="254,164,266,174" href="" target="" />
                        <area shape="rect" id="puertoCabello" alt="puerto cabello" title="puerto cabello" onclick="myFunction()" coords="272,162,284,172" href="" target="" />
                        <area shape="rect" id="catiaLaMar" alt="catia la mar" title="catia la mar" onclick="myFunction()" coords="298,158,310,168" href="" target="" />
                        <area shape="rect" id="laGuaira" alt="la guaira" title="la guaira" onclick="myFunction()" coords="314,158,324,166" href="" target="" />
                        <area shape="rect" id="ptoLaCruz" alt="pto. la cruz" title="pto. la cruz" onclick="myFunction()" coords="396,184,410,196" href="" target="" />
                        <area shape="rect" id="palua" alt="palua" title="palua" onclick="myFunction()" coords="486,276,496,286" href="" target="" />
                    </map>
                </center>
		

               <div style="display: none;">
                <div id="myContentguarana">
                    <a href="#"></a>
                </div>
                <div id="myContentbajoGrande">
                    <a href="#"></a>
                </div>
                <div id="myContentlaCeiba">
                    <a href="#"></a>
                </div>
                <div id="myContentlaSalina">
                    <a href="#"></a>
                </div>
                <div id="myContentptoMiranda">
                    <a href="#"></a>
                </div>
                <div id="myContentcardon">
                    <a href="#"></a>
                </div>
                <div id="myContentamuay">
                    <a href="#"></a>
                </div>
                <div id="myContentelPalito">
                    <a href="#"></a>
                </div>
                <div id="myContentpuertoCabello">
                	<ul>
                		<li><a href="productos.php">Lubricantes PDV</a></li>
                		<li><a href="productos.php">IFO 380 (RMG – 35</a></li>
                		<li><a href="productos.php">Marine Gasoil (MGO)</a></li>
                	</ul>
                </div>
                <div id="myContentcatiaLaMar">
                    <a href="#"></a>
                </div>
                <div id="myContentlaGuaira">
                    <a href="#"></a>
                </div>
                <div id="myContentptoLaCruz">
                    <a href="#"></a>
                </div>
                <div id="myContentpalua">
                    <a href="#"></a>
                </div>
               </div>

        <?php include 'footer.php';?>
        <!-- todos los JS que necesita la web -->
        <?php include 'include_js.php';?>
         <script src="jquery.webui-popover.js"></script>
		
        <script type="text/javascript"> <!-- codigo en cada php para que marque el menu en el que esta -->
			(function(){
               // var x =  document.getElementById("mapa").areas;
                //$('area').webuiPopover({title:'Titlesdfcsdfsd',content:'Content'}); 
              //  var objTag = document.getElementById("zulia");
                //objTag.setAttribute("data-content","este es el estado zulia")
              //  $('#zulia').webuiPopover({title:'Puertos',url:'#myContentZulia'});
                //$('#falcon').webuiPopover({title:'Puertos',url:'#myContentFalcon'});
               // $('#carabobo').webuiPopover({title:'Puertos',url:'#myContentCarabobo'});

                $('#guarana').webuiPopover({title:'Puertos',url:'#myContentguarana'});
                $('#bajoGrande').webuiPopover({title:'Puertos',url:'#myContentbajoGrande'});
                $('#laCeiba').webuiPopover({title:'Puertos',url:'#myContentlaCeiba'});
                $('#laSalina').webuiPopover({title:'Puertos',url:'#myContentlaSalina'});
                $('#ptoMiranda').webuiPopover({title:'Puertos',url:'#myContentptoMiranda'});
                $('#cardon').webuiPopover({title:'Puertos',url:'#myContentcardon'});
                $('#amuay').webuiPopover({title:'Puertos',url:'#myContentamuay'});
                $('#elPalito').webuiPopover({title:'Puertos',url:'#myContentelPalito'});
                $('#puertoCabello').webuiPopover({title:'',url:'#myContentpuertoCabello'});
                $('#catiaLaMar').webuiPopover({title:'Puertos',url:'#myContentcatiaLaMar'});
                $('#laGuaira').webuiPopover({title:'Puertos',url:'#myContentlaGuaira'});
                $('#ptoLaCruz').webuiPopover({title:'Puertos',url:'#myContentptoLaCruz'});
                $('#palua').webuiPopover({title:'Puertos',url:'#myContentpalua'});
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