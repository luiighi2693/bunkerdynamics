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
                    <span class="txt_darkgrey"><?php if($leng=="Es"){echo "Productos";}else{echo "Products";}?></span>
                </div>	
            </div>
        </div>
        
 <div class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <center><h3><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></h3></center>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
	               <h3><?php if($leng=="Es"){echo "Cilindros de Motores";}else{echo "Cylinder Engine";}?></h3>
	               <ul class="nav navbar-nav">
                        <li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal1">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal1" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 	
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal2">Gulf XXX (Colombia)</a>
							<!-- Modal -->
							<div id="myModal2" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal3">PDV Cilmar 70 (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal3" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Cilmar 70 (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p><h3><b>Características:</h3></b><br>
										    Aceite para motores diésel marinos con un amplio margen de seguridad. 
											Diseñado para la lubricación de cilindros de motores de diésel de cruceta 
											de baja velocidad.<br>
                                            
											<h3><b>Usos:</h3></b>
											Ofrece una protección integral bajo las más exigentes condiciones de servicio. 
											Esta línea completa cubre todas las necesidades operacionales.
											CILMAR 70 (SAE 50, BN 70) es el lubricante más ampliamente usado en motores 
											operando con combustibles intermedio o pesado con alto nivel de azufre.<br>
                                    </p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                    <h3><?php if($leng=="Es"){echo "Sistemas y Crucetas";}else{echo "Systems and Crosses";}?></h3>

                    <ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal4">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal4" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal5">Gulf XXX (Colombia)</a>


							<!-- Modal -->
							<div id="myModal5" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal6">PDV Crumar 3005 (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal6" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Crumar 3005 (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
                                  
							        <p align="justify">
                                    <a href="cremr.pdf"> PDF <img src="PDF.JPEG"> </a>
                                   <!-- <embed src="cremr.pdf" width="100%" height="100%"><br>
									muestra parte del PDF
                                   -->
                                    <h3><b> Características:</h3></b>
									   <br><h5 align="justify"><br>
                                        Aceite lubricante monogrado, elaborado con básicos altamente refinados y 
										aditivos cuidadosamente seleccionados que le proporcionan una alta 
										detergencia que asegura la limpieza del cárter, del cigüeñal y de 
										las áreas bajo la corona del pistón, apropiada alcalinidad para 
										neutralizar los ácidos de la combustión, apropiadas cualidades 
										antioxidantes y excepcional poder antidesgaste al sobrepasar la 
										etapa 10 de la prueba FZG.</h5><br>
										<h3><b>Usos:</h3></b>
									<br><h5 align="justify">
                                    	Ha sido especialmente desarrollado para cumplir con los requisitos de lubricación 
										del cárter de motores diesel tipo cruceta de baja velocidad. Adicionalmente puede 
										ser utilizado en cojinetes y bocinas del eje de propulsión, engranajes medianamente 
										cargados y compresores de aire donde un aceite con las cualidades descritas
             							satisfaga plenamente los requerimientos de lubricación de los mismos</h5>.<br>
								   </p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                    <h3><?php if($leng=="Es"){echo "Motores Diesel Mediana Velocidad con Combustible Residual";}else{echo "Medium Speed ​​Diesel Engines with fuel oil";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal7">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal7" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal8">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal8" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal9">PDV Dieselmar MR (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal9" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Dieselmar MR (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>


                    <h3><?php if($leng=="Es"){echo "Motores Diesel Mediana y Alta Velocidad con Combustible Destilado";}else{echo "Engines Medium and High Speed ​​Diesel with Fuel Distillate";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal10">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal10" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal11">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal11" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal12">PDV Dieselmar MD (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal12" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Dieselmar MD (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                    <h3><?php if($leng=="Es"){echo "Sistemas Hidráulicos";}else{echo "hydraulics";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal13">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal13" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal14">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal14" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal15">PDV Hidramar (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal15" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Hidramar (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                    <h3><?php if($leng=="Es"){echo "Turbinas";}else{echo "turbines";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal16">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal16" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal17">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal17" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal18">PDV Turbolub (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal18" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Turbolub (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                    <h3><?php if($leng=="Es"){echo "Sistemas de Engranajes";}else{echo "Gear systems";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal19">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal19" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal20">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal20" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal21">PDV Turbolub (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal21" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Engralub (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                    <h3><?php if($leng=="Es"){echo "Compresores de Aire";}else{echo "Air Compressors";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal22">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal22" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal23">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal23" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal24">PDV Compresolub (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal24" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Compresolub (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                    <h3><?php if($leng=="Es"){echo "Compresores de Refrigeración";}else{echo "Refrigeration Compressors";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal25">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal25" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal26">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal26" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal27">PDV Frilub (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal27" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Frilub (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>

                     <h3><?php if($leng=="Es"){echo "Grasas";}else{echo "greases";}?></h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal28">Mobil XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal28" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Mobil XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal29">Gulf XXX (Colombia)</a>

							<!-- Modal -->
							<div id="myModal29" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Gulf XXX (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal30">PDV Industrial EP // Chasis // Multiple 2 (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal30" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">PDV Industrial EP // Chasis // Multiple 2 (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>

              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <center><h3><?php if($leng=="Es"){echo "Combustibles Marinos (Bunkers)";}else{echo "Marine Fuels ( Bunkers )";}?></h3></center>
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <h3>Marine Gas Oil (MGO)</h3>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal31">ISO 8217:2005 (Colombia)</a>

							<!-- Modal -->
							<div id="myModal31" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">ISO 8217:2005 (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal32">ISO 8217:2005 (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal32" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">ISO 8217:2005 (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>
                    <h4>Fuel Oil 380 (IFO 380 – RMG 35)</h4>
					<ul class="nav navbar-nav">
                    	<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal33">ISO 8217:2005 (Colombia)</a>

							<!-- Modal -->
							<div id="myModal33" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">ISO 8217:2005 (Colombia)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
						<li><!-- Trigger the modal with a button -->
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal34">ISO 8217:2005 (Venezuela)</a>

							<!-- Modal -->
							<div id="myModal34" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">ISO 8217:2005 (Venezuela)</h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> 
                    </ul>
                    <br><br><br>
                    <ul class="nav navbar-nav">
                    	<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal35"><h4><?php if($leng=="Es"){echo "Otros IFO´s (IFO 180, IFO 120 e IFO 90)";}else{echo "Others IFO´s (IFO 180, IFO 120 e IFO 90)";}?></h4></a>
							<!-- Modal -->
							<div id="myModal35" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title"><?php if($leng=="Es"){echo "Otros IFO´s (IFO 180, IFO 120 e IFO 90)";}else{echo "Others IFO´s (IFO 180, IFO 120 e IFO 90)";}?></h4>
							      </div>
							      <div class="modal-body">
							        <p>descripcion y tablas</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li>	
					</ul>		
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <center><h3><?php if($leng=="Es"){echo "Servicios";}else{echo "Services";}?></h3></center>
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
              <ul class="nav navbar-nav">
                <li>
                	<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal36">Commodities</a>
					<!-- Modal -->
					<div id="myModal36" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Commodities</h4>
					      </div>
					      <div class="modal-body">
					        <p>descripcion y tablas</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div></li>

					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal37"><?php if($leng=="Es"){echo "Asesoría y Soporte Operacional";}else{echo "Advice and Operational Support";}?></a>
					<!-- Modal -->
					<div id="myModal37" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title"><?php if($leng=="Es"){echo "Asesoría y Soporte Operacional";}else{echo "Advice and Operational Support";}?></h4>
					      </div>
					      <div class="modal-body">
					        <p>descripcion y tablas</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div></li>

					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal38"><?php if($leng=="Es"){echo "Asesoría y Soporte Técnico";}else{echo "Advisory and Support";}?></a>
					<!-- Modal -->
					<div id="myModal38" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title"><?php if($leng=="Es"){echo "Asesoría y Soporte Técnico";}else{echo "Advisory and Support";}?></h4>
					      </div>
					      <div class="modal-body">
					        <p>descripcion y tablas</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div></li>

					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal39"><?php if($leng=="Es"){echo "Análisis de Muestras de Lubricantes y Combustibles";}else{echo "Sample analysis of lubricants and fuels";}?></a>
					<!-- Modal -->
					<div id="myModal39" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title"><?php if($leng=="Es"){echo "Análisis de Muestras de Lubricantes y Combustibles";}else{echo "Sample analysis of lubricants and fuels";}?></h4>
					      </div>
					      <div class="modal-body">
					        <p>descripcion y tablas</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div></li>

					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal40"><?php if($leng=="Es"){echo "Plan de Lubricación";}else{echo "Lubrication Plan";}?></a>
					<!-- Modal -->
					<div id="myModal40" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title"><?php if($leng=="Es"){echo "Plan de Lubricación";}else{echo "Lubrication Plan";}?></h4>
					      </div>
					      <div class="modal-body">
					        <p>descripcion y tablas</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div></li>
				</ul>
              </div>
            </div>
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