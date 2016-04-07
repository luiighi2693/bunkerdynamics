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
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey"><?php if($leng=="Es"){echo "Misión";}else{echo "Mission";}?></span>
                    <p class="txt_slogan" style="font-size: 0.5em;"><i><?php if($leng=="Es"){echo "Satisfacer las necesidades de nuestros clientes 
                    de Lubricantes y Combustibles Marinos (Bunkers) en los principales puertos del Caribe y Sudamérica, siendo suplidores directos o 
                    estableciendo alianzas estratégicas con proveedores locales en cada uno de estos puertos donde tenemos presencia, lo cual nos 
                    permite tener los precios más competitivos, garantizando plenamente el cumplimiento y la calidad de nuestros productos.";}
                    else{echo "Meeting the needs of our customers and Marine Fuels Lubricants ( Bunkers ) in major ports in the Caribbean and South 
                    	America , with direct suppliers or establishing strategic alliances with local suppliers in each of these ports where we operate , 
                    allowing us to prices more competitive, ensuring full compliance and quality of our products .";}?></i></p>
                </div>	
            </div>
        </div>
        
        
		<h3>
		  
		  <!-- Pie de Pagina -->
    </h3>
		<?php include 'footer.php';?>
        <!-- todos los JS que necesita la web -->
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