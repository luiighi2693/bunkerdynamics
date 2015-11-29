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
                    <span class="txt_darkgrey"><?php if($leng=="Es"){echo "¿Quiénes Somos?";}else{echo "Who are we?";}?></span>
                    <p class="txt_slogan" style="font-size: 0.5em;"><i><?php if($leng=="Es"){echo "Bunker Dynamics Corp. es una 
                    compañía internacional creada en el año 2011 en Florida, USA con sucursal en Panamá y proyectos de expansión 
                    hacia el Caribe y Sudamérica, dedicada a la comercialización, mercadeo y suministro de Lubricantes y 
                    Combustibles Marinos (Bunkers) a toda nuestra red de buques creada a lo largo de estos años, con el compromiso 
                    de entregar productos de calidad que ofrezcan tranquilidad y seguridad a nuestros clientes.";}
                    else{echo "Bunker Dynamics Corp. is an international company established in 2011 in Florida , USA with a branch 
                        in Panama and expansion projects to the Caribbean and South America, dedicated to the commercialization , 
                    marketing and supply of Marine Fuels and Lubricants ( Bunkers ) to all our ship network created over the years ,
                     with a commitment to deliver quality products that provide peace and security to our customers.";}?></i></p>
                   
                </div>	
                 <div class="templatemo-slogan text-left">
                    <p class="txt_slogan" style="font-size: 0.5em;"><i>
                        <?php if($leng=="Es"){echo "Nuestros Valores:";}else{echo "Our values";}?>

                        <ul class="txt_slogan" style="font-size: 0.5em;">
                            <li><?php if($leng=="Es"){echo "Competitividad: Con la mejor calidad y el mejor precio en nuestros productos y servicios.";}
                            else{echo "Competitiveness: With the best quality and the best price on our products and services.";}?></li>
                            <li><?php if($leng=="Es"){echo "Responsabilidad: Con suministros confiables y en el tiempo estipulado.";}
                            else{echo "Responsibility: With reliable supplies and in the stipulated time .";}?></li>
                            <li><?php if($leng=="Es"){echo "Compromiso: Con el ambiente y nuestros clientes.";}
                            else{echo "Commitment: With the environment and our customers.";}?></li>
                            <li><?php if($leng=="Es"){echo "Calidad: Con productos que cumplan los estándares que exige el negocio marino.";}
                            else{echo "Quality: With products that meet the standards required by the marine business.";}?></li>
                            <li><?php if($leng=="Es"){echo "Seguridad: Garantizando operaciones de suministro sin ningún tipo de riesgos, accidentes ni retrasos.";}
                            else{echo "";}?></li>
                        </ul>
                    </i></p> 
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