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
                    <span class="txt_darkgrey"><?php if($leng=="Es"){echo "Bienvenidos a";}else{echo "Welcome to";}?> </span><span class="txt_orange">Bunker Dynamics</span>
                    <p class="txt_slogan">
                        <br><i><?php if($leng=="Es"){echo "Bunker Dynamics Corp. es una Corporación de Comercio Internacional especializada en
                     actividades de importación y exportación tanto de materias primas como de productos terminados orientados al equipamiento de
                     Puertos Marítimos, Producción Naval y Mantenimiento General de sus industrias conexas.<br>
                     <br> Nuestra división de Bunkers es la solución a las necesidades de Lubricantes y Combustibles Marinos  para las Empresas y sus
                     clientes asociados dentro del negocio marítimo internacional con servicios que incluyen asesoramiento técnico, comercial y
                     operacional en los principales puertos del Caribe y Sudamérica.<br>
                     <br>Crecemos con la confianza de que los productos y servicios que ofrecemos son de alta calidad, apoyando a
                     nuestros clientes con el objetivo firme de establecer relaciones comerciales a largo plazo.
                     ";}else{echo "Bunker Dynamics Corp. is a company oriented to International Trade activities of Petroleum
                     Commodities, Port equipment, Naval Maintenance Supplies, Production Advice and Logistic Support.<br>
                     <br>Our Bunkers division is the solution for Bunkers and Lubricants needs for companies associated to
                     the maritime business with services that include technical, commercial and operational in major ports in the Caribbean and South America.<br>
                     <br>Bunker Dynamics Corp. is growing based on our customers’ needs with the confidence that our products and services bring the higher
                     quality to the maritime sector aiming to establish long term relationship with them.";}?></i></p>
                </div>	
            </div>
        </div>
        
        <div class="templatemo-index">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <!--<div>
                                <img src="images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">AWESOME ICONS</span>
                            </div>-->
                        <p><b><?php if($leng=="Es"){echo "GALERIA DE FOTOS";}else{echo "PHOTO GALERY";}?></b></p>
                            <p><?php if($leng=="Es"){echo "";}?></p>
                            <div class="text-center">
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange"><?php if($leng=="Es"){echo "VER MÁS";}else{echo "MORE";}?></a>
                            </div>
                            <br class="clearfix"/>
                      </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <!--<div>
                                <img src="images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">AWESOME ICONS</span>
                            </div>-->
                      <p><b><?php if($leng=="Es"){echo "NOTICIAS";}else{echo "NEWS";}?></b></p>
                            <p><?php if($leng=="Es"){echo "";}else{echo "";}?></p>
                            <div class="text-center">
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange"><?php if($leng=="Es"){echo "VER MÁS";}else{echo "MORE";}?></a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <!--<div>
                                <img src="images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">AWESOME ICONS</span>
                            </div>-->
                     <p><b><?php if($leng=="Es"){echo "TÉRMINOS DE NEGOCIACIÓN";}else{echo "TERMS OF TRADE";}?> </b></p>
                          <p><?php if($leng=="Es"){echo "";}?></p>
                            <div class="text-center">
                            	<a href="Terminos.php"
                                	class="templatemo-btn-read-more btn btn-orange"><?php if($leng=="Es"){echo "VER MÁS";}else{echo "MORE";}?></a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
             
        <h3 align="center"><b style="font-size:15pt;"><?php if($leng=="Es"){echo "UN ALIADO CONFIABLE Y EFICIENTE PARA AFRONTAR LAS NECESIDADES LOGÍSTICAS DENTRO DEL SERVICIO NAVIERO.
        MUNDIAL";}else{echo "A RELIABLE AND EFFICIENT ALLY TO SATISFY YOUR LOGISTICS NEEDS FOR SERVICES IN THE MARITIME BUSINESS";}?> </b></h3>
                        
        
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