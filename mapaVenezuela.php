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
                 <img src="mapaVenezuela.png" name="mapaVen" usemap="#mapa" >
                    <map id="mapa" name="mapa">
                       <!-- <area shape="rect" alt="guaranao" title="guaranao" id="guaranao" onclick="myFunction()" coords="115,110,131,135" href="" target="" />
                        <area shape="rect" alt="bajo grande" title="bajo grande" id="bajoGrande" onclick="myFunction()" coords="98,184,111,204" href="" target="" />
                        <area shape="rect" alt="la ceiba" title="la ceiba" id="laCeiba" onclick="myFunction()" coords="156,257,173,273" href="" target="" />
                        <area shape="rect" alt="pto. miranda" title="pto. miranda" id="ptoMiranda" onclick="myFunction()" coords="157,123,169,146" href="" target="" />
                        <area shape="rect" alt="cardon" title="cardon" id="cardon" onclick="myFunction()" coords="236,62,250,82" href="" target="" />
                        <area shape="rect" alt="amuay" title="amuay" id="amuay" onclick="myFunction()" coords="244,34,258,50" href="" target="" />
                        <area shape="rect" alt="el palito" title="el palito" id="elPalito" onclick="myFunction()" coords="398,160,410,177" href="" target="" />
                        <area shape="rect" alt="puerto cabello" title="puerto cabello" id="puertoCabello" onclick="myFunction()" coords="421,158,435,172" href="" target="" />
                        <area shape="rect" alt="catia la mar" title="catia la mar" id="catiaLaMar" onclick="myFunction()" coords="458,150,469,167" href="" target="" />
                        <area shape="rect" alt="la guaira" title="la guaira" id="laGuaira" onclick="myFunction()" coords="482,146,493,163" href="" target="" />
                        <area shape="rect" alt="pto. la cruz" title="pto. la cruz" id="ptoLaCruz" onclick="myFunction()" coords="632,180,648,197" href="" target="" />
                        <area shape="rect" alt="palua" title="palua" id="palua" onclick="myFunction()" coords="769,339,784,356" href="" target="" />
                        <area shape="rect" alt="la salina" title="la salina" id="laSalina" onclick="myFunction()" coords="164,187,180,210" href="" target="" />
-->





                        <area shape="rect" alt="Maracaibo" title="Maracaibo" id="Maracaibo" onclick="myFunction()" coords="106,107,116,122" href="" target="" />
                        <area shape="rect" alt="Bajo Grande" title="Bajo Grande" id="BajoGrande" onclick="myFunction()" coords="95,130,108,140" href="" target="" />
                        <area shape="rect" alt="La Salina" title="La Salina" id="LaSalina" onclick="myFunction()" coords="134,141,144,152" href="" target="" />
                        <area shape="rect" alt="El Tablazo" title="El Tablazo" id="ElTablazo" onclick="myFunction()" coords="122,117,133,130" href="" target="" />
                        <area shape="rect" alt="Pto. Miranda" title="Pto. Miranda" id="PtoMiranda" onclick="myFunction()" coords="123,96,134,108" href="" target="" />
                        <area shape="rect" alt="Cardon" title="Cardon" id="Cardon" onclick="myFunction()" coords="200,50,209,62" href="" target="" />
                        <area shape="rect" alt="Guaranao" title="Guaranao" id="Guaranao" onclick="myFunction()" coords="193,38,204,48" href="" target="" />
                        <area shape="rect" alt="Amuay" title="Amuay" id="Amuay" onclick="myFunction()" coords="203,27,213,36" href="" target="" />
                        <area shape="rect" alt="El Palito" title="El Palito" id="ElPalito" onclick="myFunction()" coords="333,121,349,138" href="" target="" />
                        <area shape="rect" alt="Puerto Cabello" title="Puerto Cabello" id="PuertoCabello" onclick="myFunction()" onclick="myFunction()" coords="360,117,375,133" href="" target="" />
                        <area shape="rect" alt="La Guaira" title="La Guaira" id="LaGuaira" onclick="myFunction()" coords="413,116,427,130" href="" target="" />
                        <area shape="rect" alt="Jose Terminal" title="Jose Terminal" id="JoseTerminal" onclick="myFunction()" coords="521,146,533,160" href="" target="" />
                        <area shape="rect" alt="Guanta" title="Guanta" id="Guanta" onclick="myFunction()" coords="543,134,555,154" href="" target="" />
                        <area shape="rect" alt="Puerto La Cruz" title="Puerto La Cruz" id="PuertoLaCruz" onclick="myFunction()" coords="558,129,567,150" href="" target="" />
                        <area shape="rect" alt="Pertigalete" title="Pertigalete" id="Pertigalete" onclick="myFunction()" coords="568,122,577,143" href="" target="" />
                        <area shape="rect" alt="Cumana" title="Cumana" id="Cumana" onclick="myFunction()" coords="580,121,588,142" href="" target="" />
                        <area shape="rect" alt="Guiria" title="Guiria" id="Guiria" onclick="myFunction()" coords="684,113,696,131" href="" target="" />
                        <area shape="rect" alt="Matanzas" title="Matanzas" id="Matanzas" onclick="myFunction()" coords="600,259,613,286" href="" target="" />
                        <area shape="rect" alt="Puerto Ordaz" title="Puerto Ordaz" id="PuertoOrdaz" onclick="myFunction()" coords="617,251,630,276" href="" target="" />
                        <area shape="rect" alt="Palua" title="Palua" id="Palua" onclick="myFunction()" coords="662,264,674,293" href="" target="" />
                    </map>
                </center>
		



               <div style="display: none;">
                    <div id="myContentMaracaibo">
                        <img src="images/MaracaiboMin.png" class="img-responsive">
                        <a href="images/tablaMaracaibo.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaMaracaibo.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentBajoGrande">
                        <img src="images/BajoGrandeMin.png" class="img-responsive">
                        <a href="images/tablaBajoGrande.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaBajoGrande.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentLaSalina">
                        <img src="images/LaSalinaMin.png" class="img-responsive">
                        <a href="images/tablaLaSalina.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaLaSalina.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentElTablazo">
                        <img src="images/ElTablazoMin.png" class="img-responsive">
                        <a href="images/tablaElTablazo.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaElTablazo.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentPtoMiranda">
                        <img src="images/PtoMirandaMin.png" class="img-responsive">
                        <a href="images/tablaPtoMiranda.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaPtoMiranda.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentCardon">
                        <img src="images/CardonMin.png" class="img-responsive">
                        <a href="images/tablaCardon.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaCardon.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentGuaranao">
                        <img src="images/GuaranaoMin.png" class="img-responsive">
                        <a href="images/tablaGuaranao.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaGuaranao.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentAmuay">
                        <img src="images/AmuayMin.png" class="img-responsive">
                        <a href="images/tablaAmuay.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaAmuay.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentElPalito">
                        <img src="images/ElPalitoMin.png" class="img-responsive">
                        <a href="images/tablaElPalito.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaElPalito.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentPuertoCabello">
                        <img src="images/PuertoCabelloMin.png" class="img-responsive">
                        <a href="images/tablaPuertoCabello.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaPuertoCabello.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentLaGuaira">
                        <img src="images/LaGuairaMin.png" class="img-responsive">
                        <a href="images/tablaLaGuaira.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaLaGuaira.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentJoseTerminal">
                        <img src="images/JoseTerminalMin.png" class="img-responsive">
                        <a href="images/tablaJoseTerminal.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaJoseTerminal.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentGuanta">
                        <img src="images/GuantaMin.png" class="img-responsive">
                        <a href="images/tablaGuanta.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaGuanta.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentPuertoLaCruz">
                        <img src="images/PuertoLaCruzMin.png" class="img-responsive">
                        <a href="images/tablaPuertoLaCruz.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaPuertoLaCruz.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentPertigalete">
                        <img src="images/PertigaleteMin.png" class="img-responsive">
                        <a href="images/tablaPertigalete.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaPertigalete.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentCumana">
                        <img src="images/CumanaMin.png" class="img-responsive">
                        <a href="images/tablaCumana.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaCumana.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentGuiria">
                        <img src="images/GuiriaMin.png" class="img-responsive">
                        <a href="images/tablaGuiria.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaGuiria.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentMatanzas">
                        <img src="images/MatanzasMin.png" class="img-responsive">
                        <a href="images/tablaMatanzas.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaMatanzas.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentPuertoOrdaz">
                        <img src="images/PuertoOrdazMin.png" class="img-responsive">
                        <a href="images/tablaPuertoOrdaz.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaPuertoOrdaz.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentPalua">
                        <img src="images/PaluaMin.png" class="img-responsive">
                        <a href="images/tablaPalua.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaPalua.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
               </div>

        <?php include 'footer.php';?>
        <!-- todos los JS que necesita la web -->
        <?php include 'include_js.php';?>
         <script src="jquery.webui-popover.js"></script>
		
        <script type="text/javascript"> <!-- codigo en cada php para que marque el menu en el que esta -->
			(function(){
                var tittle = "<?php if($leng=="Es"){echo "Metodo de Entrega por Puertos";}else{echo "Delivery method Ports";}?>";

                $('#Maracaibo').webuiPopover({title:tittle,url:'#myContentMaracaibo'});
                $('#BajoGrande').webuiPopover({title:tittle,url:'#myContentBajoGrande'});
                $('#LaSalina').webuiPopover({title:tittle,url:'#myContentLaSalina'});
                $('#ElTablazo').webuiPopover({title:tittle,url:'#myContentElTablazo'});
                $('#PtoMiranda').webuiPopover({title:tittle,url:'#myContentPtoMiranda'});
                $('#Cardon').webuiPopover({title:tittle,url:'#myContentCardon'});
                $('#Guaranao').webuiPopover({title:tittle,url:'#myContentGuaranao'});
                $('#Amuay').webuiPopover({title:tittle,url:'#myContentAmuay'});
                $('#ElPalito').webuiPopover({title:tittle,url:'#myContentElPalito'});
                $('#PuertoCabello').webuiPopover({title:tittle,url:'#myContentPuertoCabello'});
                $('#LaGuaira').webuiPopover({title:tittle,url:'#myContentLaGuaira'});
                $('#JoseTerminal').webuiPopover({title:tittle,url:'#myContentJoseTerminal'});
                $('#Guanta').webuiPopover({title:tittle,url:'#myContentGuanta'});
                $('#PuertoLaCruz').webuiPopover({title:tittle,url:'#myContentPuertoLaCruz'});
                $('#Pertigalete').webuiPopover({title:tittle,url:'#myContentPertigalete'});
                $('#Cumana').webuiPopover({title:tittle,url:'#myContentCumana'});
                $('#Guiria').webuiPopover({title:tittle,url:'#myContentGuiria'});
                $('#Matanzas').webuiPopover({title:tittle,url:'#myContentMatanzas'});
                $('#PuertoOrdaz').webuiPopover({title:tittle,url:'#myContentPuertoOrdaz'});
                $('#Palua').webuiPopover({title:tittle,url:'#myContentPalua'});
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



<?php if($leng=="Es"){echo "";}else{echo "";}?>