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
                    <p class="txt_slogan"><i><?php if($leng=="Es"){echo "Bunker Dynamics, es una Corporación de Comercio Internacional especializada en actividades de importación 
                    y exportación tanto de materias primas como de productos terminados dirigidos al equipamiento de Puertos Marítimos, Producción Naval y Mantenimiento General 
                    de sus industrias conexas";}else{echo "Bunker Dynamics, is an international trade corporation specializing in import and export activities of both raw materials 
                    and finished products for the equipment of Seaports, Naval General Maintenance Production and related industries";}?></i></p>
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
                        <p><b><?php if($leng=="Es"){echo "PROCURA DE COMODIDAD";}else{echo "SEEKS COMFORT";}?></b></p>
                            <p><?php if($leng=="Es"){echo "Negociación y Gestión de Volúmenes de Combustibles MGO, IFO 380, IFO 180,  así como otros derivados petroleros dentro 
                            de la cartera de Productores a Nivel Mundial.";}else{echo "Negotiation and management Fuel Volumes MGO, IFO 380, IFO 180 and other oil derivatives in 
                            the portfolio of producers worldwide.";}?></p>
                            <div class="text-center">
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange"><?php if($leng=="Es"){echo "LEER MAS";}else{echo "READ MORE";}?></a>
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
                      <p><b><?php if($leng=="Es"){echo "GESTION LOGISTICA NAVAL";}else{echo "NAVAL LOGISTICS MANAGEMENT";}?></b></p>
                            <p><?php if($leng=="Es"){echo "Suministro de productos terminados para satisfacer las necesidades de la  operación de puertos marítimos, su equipamiento 
                            y el mantenimiento requerido dentro de los mismos.a.";}else{echo "Supply of finished products to meet the needs of the operation of seaports, equipment 
                            and maintenance required within the same products.";}?></p>
                            <div class="text-center">
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange"><?php if($leng=="Es"){echo "LEER MAS";}else{echo "READ MORE";}?></a>
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
                     <p><b><?php if($leng=="Es"){echo "SOPORTE MARINA MERCANTE";}else{echo "MERCHANT MARINE SUPPORT";}?> </b></p>
                          <p><?php if($leng=="Es"){echo "Gestión logística para el suministro de Lubricantes y Combustibles a Buques en distintos Puertos 
                          Internacionales, actuando como empresa de comercialización directa o intermediación/negociación.";}else{echo "Logistics management 
                          to supply fuels and lubricants to ships in different international ports, acting as direct marketing company or brokerage / 
                          trading.";}?></p>
                            <div class="text-center">
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange"><?php if($leng=="Es"){echo "LEER MAS";}else{echo "READ MORE";}?></a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
             
        <h3 align="right"><b><?php if($leng=="Es"){echo "UN ALIADO CONFIABLE Y EFICIENTE PARA AFRONTAR LAS NECESIDADES LOGÍSTICAS DENTRO DEL SERVICIO NAVIERO 
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