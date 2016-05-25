<?php
    $fp = fopen("lenguaje.txt", "r");
    $leng= fgets($fp);
    fclose($fp);
?>

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
<!--         <link rel="stylesheet" type="txt/css" href="terminos.css">-->
    </head>

    <body>

		<section class="menu_completo">
            <!-- Archivo de la sección del logo y del menu -->
            <?php include 'header.php';?>
            <!-- Archivo de la sección del slider -->
            <?php include 'slider.php';?>
        </section>

		<!-- Secciones de contenido de la web en la que estes, en este caso index -->
        <!-- el class debe colocarse templatemo-xxxxx y en el css crearlo con los similares a los otros -->
        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container-responsive">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey"><?php if($leng=="Es"){echo "TERMINOS Y CONDICIONES PARA LA VENTA DE COMBUSTIBLES MARINOS";}
                        else{echo "TERMS AND CONDITIONS OF SALE FOR MARINE FUELS";}?></span>


                    <p class="txt_slogan" style="font-size: 0.5em;"><i><?php if($leng=="Es"){echo "MARZO 2016 Salvo que se acuerde lo contrario por escrito,
                     los siguientes términos y condiciones se aplicarán a todas las ventas de BUNKER DYNAMICS CORP. para combustible RMG,IFO,
                     RMA y MGO de uso marítimo (en adelante denominados \"Combustibles Marinos\").";}
                    else{echo "MARCH 2016 Except as otherwise agreed to in writing, the following terms and conditions shall apply to all sales by BUNKER
                            DYNAMICS CORP. of Bunker Fuel Oil, Intermediate Bunker Fuels, Marine Diesel Oil, and Marine Gas Oil
                            (hereinafte -Marine Fuels-).";}?><br></i></p>
                </div>

<!--                <div class="container-responsive">-->

<!--                    <iframe mwidth="640%" height="360" src="pdf/Terminos.pdf" frameborder="0" allowfullscreen></iframe>-->
                <center>
                    <object style="text-align: center" data="pdf/Terminos.pdf" type="application/pdf" width="80%" height="800px"></object>
                </center>
<!--                </div>-->



		<?php include 'footer.php';?>
        <!-- Todos los JS que necesita la web -->
        <?php include 'include_js.php';?>
		
        <script type="text/javascript"> <!-- codigo en cada php para que marque el menu en el que esta -->
			$(document).ready(function () {
				$(".menu_inicio > a").css({"color":'#FFFFFF'});
				$(".menu_inicio > a").css({"background-color":'#428bca'});
				$(".menu_inicio > a").css("font-weight","Bold");
			});
		</script>
        
    </body>
</html>