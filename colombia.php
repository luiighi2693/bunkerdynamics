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
                    <span class="txt_darkgrey"><?php if($leng=="Es"){echo "PUERTOS";}else{echo "PORTS";}?></span>
                </div>	
            </div>
        </div>
        
 <div class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <center><h3><?php if($leng=="Es"){echo "CARTAGENA";}else{echo "CARTAGENA";}?></h3></center>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
              
              
              
              
	               <ul>
                        <li><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1"><h4><?php if($leng=="Es"){echo "Lubricantes GULF";}else{echo "Lubricants GULF";}?></h4>
	               <ul></button>

							<!-- Modal -->
							<div id="myModal1" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Lubricantes GULF</h4>
							      </div>
							      <div class="modal-body">
							        <p>DIBUJO</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li>
					   <!------------------------------------------------------------------------------------>


                    <ul>
                        <li><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2"><h4><?php if($leng=="Es"){echo "Lubricantes SHELL";}else{echo "Lubricants GULF";}?></h4>
	               <ul></button>

							<!-- Modal -->
							<div id="myModal2" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title"><?php if($leng=="Es"){echo "Lubricantes SHELL";}else{echo "Lubricants GULF";}?></h4>
							      </div>
							      <div class="modal-body">
							        <p>DIBUJO</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li>
                        
                        
<!------------------------------------------------------------------------------------>


                    <ul>
                        <li><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3"><h4><?php if($leng=="Es"){echo "Lubricantes TOTAL";}else{echo "Lubricants TOTAL";}?></h4>
	               <ul></button>

							<!-- Modal -->
							<div id="myModal3" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Lubricants TOTAL</h4>
							      </div>
							      <div class="modal-body">
							        <p>DIBUJO</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li>                        
                        
<!------------------------------------------------------------------------------------>


                    <ul>
                        <li><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal4"><h4><?php if($leng=="Es"){echo "Lubricantes MOBIL";}else{echo "Lubricants MOBIL";}?></h4>
	               <ul></button>

							<!-- Modal -->
							<div id="myModal4" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Lubricants MOBIL</h4>
							      </div>
							      <div class="modal-body">
							        <p>DIBUJO</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li>
                            
<!------------------------------------------------------------------------------------>
                    <ul>
                        <li><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal5"><h4><?php if($leng=="Es"){echo "IFO 380 (RMG – 35)";}else{echo "IFO 380 (RMG – 35)";}?></h4>
	               <ul></button>

							<!-- Modal -->
							<div id="myModal5" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">IFO 380 (RMG – 35)</h4>
							      </div>
							      <div class="modal-body">
							        <p>DIBUJO</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li>                        
<!------------------------------------------------------------------------------------>


                    <ul>
                        <li><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal6"><h4><?php if($leng=="Es"){echo "Marine Gasoil (MGO) ";}else{echo "Marine Gasoil (MGO) ";}?></h4>
	               <ul></button>

							<!-- Modal -->
							<div id="myModal6" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Marine Gasoil (MGO)</h4>
							      </div>
							      <div class="modal-body">
							        <p>DIBUJO</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li>                                                
                        
<!------------------------------------------------------------------------------------>
			             
                <ul>
                        <li><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal7"><h4><?php if($leng=="Es"){echo "Otros IFO´s";}else{echo "Otros IFO´s";}?></h4>
	               <ul></button>

							<!-- Modal -->
							<div id="myModal7" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Otros IFO´s</h4>
							      </div>
							      <div class="modal-body">
							        <p>DIBUJO</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </ul>
							      </div>
							    </div>
							  </div>
							</div>
						</li>
           
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