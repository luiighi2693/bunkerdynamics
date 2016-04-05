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
                        <area shape="rect" alt="guaranao" title="guaranao" id="guaranao" onclick="myFunction()" coords="115,110,131,135" href="" target="" />
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
                    </map>
                </center>
		



               <div style="display: none;">
                    <div id="myContentguaranao">
                        <img src="images/guaranaoMin.png" class="img-responsive">
                        <a href="images/tablaGuaranao.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaGuaranao.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentbajoGrande">
                    	<img src="images/maracaiboMin.png" class="img-responsive"> 
                    	<a href="images/tablaMaracaibo.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaMaracaibo.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentlaCeiba">
                    	<img src="images/maracaiboMin.png" class="img-responsive">
                         <a href="images/tablaMaracaibo.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaMaracaibo.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentlaSalina">
                  	  	<img src="images/maracaiboMin.png" class="img-responsive">
                        <a href="images/tablaMaracaibo.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaMaracaibo.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentptoMiranda">
                		<img src="images/maracaiboMin.png" class="img-responsive">
                         <a href="images/tablaMaracaibo.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaMaracaibo.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentcardon">
                        <img src="images/cardonMin.png" class="img-responsive">
                         <a href="images/tablaCardon.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaCardon.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentamuay">
                        <img src="images/amuayMin.png" class="img-responsive">
                         <a href="images/tablaAmuay.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaAmuay.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentelPalito">
                        <img src="images/elPalitoMin.png" class="img-responsive">
                         <a href="images/tablaElPalito.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaElPalito.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
                    </div>
                    <div id="myContentpuertoCabello">
                      <img src="images/puertoCabelloMin.png" class="img-responsive">
                         <a href="images/tablaPuertoCabello.jpg" class="btn btn-default" ><?php if($leng=="Es"){echo "Ver Mas";}else{echo "Show More";}?></a>
                        <a href="tablaPuertoCabello.xlsx" class="btn btn-default" style="float: right;"><?php if($leng=="Es"){echo "Descargar";}else{echo "Download";}?></a>
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
                var tittle = "<?php if($leng=="Es"){echo "Metodo de Entrega por Puertos";}else{echo "Delivery method Ports";}?>";

                $('#guaranao').webuiPopover({title:tittle,url:'#myContentguaranao'});
                $('#bajoGrande').webuiPopover({title:tittle,url:'#myContentbajoGrande'});
                $('#laCeiba').webuiPopover({title:tittle,url:'#myContentlaCeiba'});
                $('#laSalina').webuiPopover({title:tittle,url:'#myContentlaSalina'});
                $('#ptoMiranda').webuiPopover({title:tittle,url:'#myContentptoMiranda'});
                $('#cardon').webuiPopover({title:tittle,url:'#myContentcardon'});
                $('#amuay').webuiPopover({title:tittle,url:'#myContentamuay'});
                $('#elPalito').webuiPopover({title:tittle,url:'#myContentelPalito'});
                $('#puertoCabello').webuiPopover({title:tittle,url:'#myContentpuertoCabello'});
                $('#catiaLaMar').webuiPopover({title:tittle,url:'#myContentcatiaLaMar'});
                $('#laGuaira').webuiPopover({title:tittle,url:'#myContentlaGuaira'});
                $('#ptoLaCruz').webuiPopover({title:tittle,url:'#myContentptoLaCruz'});
                $('#palua').webuiPopover({title:tittle,url:'#myContentpalua'});
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