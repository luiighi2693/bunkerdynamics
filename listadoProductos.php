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

<div class="container">
    <div div="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <center><h3><?php if($leng=="Es"){echo "Listado de Productos";}else{echo "List of Products";}?></h3></center>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <ul>
                        <li><!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1"><h4><?php if($leng=="Es"){echo "Listado 1";}else{echo "List 1";}?></h4>
                                <ul></button>

                            <!-- Modal -->
                            <div id="myModal1" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php if($leng=="Es"){echo "Listado 1";}else{echo "List 1";}?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="images/tablamodelo1.jpg" class="img-responsive">
                                            <a href="images/tablamodelo1.jpg" class="btn btn-default" >Ver Completo</a>
                                            <a href="tablamodelo1.xlsx" class="btn btn-default" style="float: right;">Descargar</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!------------------------------------------------------------------------------------>


                        <ul style="margin-left: -40px;">
                            <li><!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2"><h4><?php if($leng=="Es"){echo "Listado 2";}else{echo "List 2";}?></h4>
                                    <ul></button>

                                <!-- Modal -->
                                <div id="myModal2" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?php if($leng=="Es"){echo "Listado 2";}else{echo "List 2";}?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <img src="images/tablamodelo2.jpg" class="img-responsive">
                                                <a href="images/tablamodelo2.jpg" class="btn btn-default" >Ver Completo</a>
                                                <a href="tablamodelo2.xlsx" class="btn btn-default" style="float: right;">Descargar</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!------------------------------------------------------------------------------------>

                            <ul style="margin-left: -40px;">
                                <li><!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3"><h4><?php if($leng=="Es"){echo "Listado 3";}else{echo "List 3";}?></h4>
                                        <ul></button>

                                    <!-- Modal -->
                                    <div id="myModal3" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><?php if($leng=="Es"){echo "Listado 3";}else{echo "List 3";}?></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="images/tablamodelo3.jpg" class="img-responsive">
                                                    <a href="images/tablamodelo3.jpg" class="btn btn-default" >Ver Completo</a>
                                                    <a href="tablamodelo3.xlsx" class="btn btn-default" style="float: right;">Descargar</a>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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