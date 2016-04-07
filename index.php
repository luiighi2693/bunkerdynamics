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
                    <p class="txt_slogan"><i><?php if($leng=="Es"){echo "Bunker Dynamics Corp. es una Corporación de Comercio 
                    Internacional especializada en actividades de importación y exportación tanto de materias primas como de 
                    productos terminados dirigidos al equipamiento de Puertos Marítimos, Producción Naval y Mantenimiento General 
                    e industrias conexas. Además nuestra división de Bunkers es la solución a las necesidades de Lubricantes y
                     Combustibles Marinos (Bunkers) para las empresas y clientes asociados con el negocio marítimo internacional. 
                     Nuestros servicios incluyen asesoramiento técnico, comercial y operacional en los principales puertos del 
                     Caribe y Sudamérica. <br> Bunker Dynamics Corp. está creciendo en base a las necesidades de nuestros clientes, 
                     con la confianza de que los productos y servicios que ofrecemos son  de alta calidad, lo cual nos permite apoyar 
                     a empresas del sector marítimo internacional con el objetivo de establecer relaciones comerciales a largo 
                     plazo.";}else{echo "Bunker Dynamics Corp. is a company specialized in International Trade 
                     import and export activities of both raw materials as finished products for the equipment Seaports , Naval 
                     General Maintenance Production and Related Industries . : Besides Bunkers Our division is the solution Needs 
                     Marine Fuels and Lubricants ( Bunkers ) for companies and associated m Customers with international maritime 
                     business . Our services include technical, commercial and operational in major ports in the Caribbean and South 
                     America Consulting. <br> Bunker Dynamics Corp. is growing based on the needs of our customers with the confidence
                     that the products and services we offer are high quality , which allows us to support companies in the international 
                     maritime sector with the aim of establishing trade relations long term.";}?></i></p>
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
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange"><?php if($leng=="Es"){echo "VER MÁS";}else{echo "MORE";}?></a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
             
        <h3 align="center"><b style="font-size:15pt;"><?php if($leng=="Es"){echo "UN ALIADO CONFIABLE Y EFICIENTE PARA AFRONTAR LAS NECESIDADES LOGÍSTICAS DENTRO DEL SERVICIO NAVIERO 
        MUNDIAL";}else{echo "AN ALLY RELIABLE AND EFFICIENT TO MEET THE NEEDS LOGISTICS SERVICE IN GLOBAL SHIPPING";}?> </b></h3>     
                        
        
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