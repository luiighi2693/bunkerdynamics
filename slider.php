<?php
    $fp = fopen("lenguaje.txt", "r");
    $leng= fgets($fp);
    fclose($fp);
?>

<div style="padding: 120px 0 0 0;">
    <!-- Carousel -->
    <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators"> <!-- Gotas de Aceite -->
            <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#templatemo-carousel" data-slide-to="1"></li>
            <li data-target="#templatemo-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Elementos que aparecen en el Slider -->
        <div class="carousel-inner"> 
            <div class="item active"> <!-- Elementos que aparecen en la Gota 1 -->
                <div class="container">
                <div class="carousel-caption">
                <h1><?php if($leng=="Es"){echo "BIENVENIDOS A BUNKER DYNAMICS";}else{echo "WELCOME TO BUNKER DYNAMICS";}?></h1>
                <p><?php if($leng=="Es"){echo "ELIJA EL ADECUADO PARA USTED";}else{echo "CHOOSE THE ONE SUITABLE FOR YOU";}?></p>
                </div>
                </div>
            </div>
            
            <div class="item"> <!-- Elementos que aparecen en la Gota 2 -->
                <div class="container">
                    <div class="carousel-caption">
                        <div class="col-sm-6 col-md-6">
                            <h1><?php if($leng=="Es"){echo "FLUIDOS";}else{echo "FLUIDS";}?></h1>
                            <p>Suspendisse pellentesque, odio vel ultricies interdum, mauris nulla ullamcorper magna, non aliquet odio velit aliquam augue.</p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                        <h1><?php if($leng=="Es"){echo "ENERGIA";}else{echo "ENERGY";}?></h1>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam mattis fringilla urna.</p>
                        </div>
                    </div>
            	</div>
            </div>
            
            <div class="item"> <!-- Elementos que aparecen en la Gota 2 -->
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php if($leng=="Es"){echo "ETIQUETA ADAPTABLE";}else{echo "RESPONSIVE LAYOUT";}?></h1>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit. Etiam metus libero mauriec ignissim fermentum.</p>
                        <p><a class="btn btn-lg btn-orange" href="#" role="button"><?php if($leng=="Es"){echo "Leer Mas";}else{echo "Read More";}?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Botones del Adelante y Atras del Slider -->
        <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        
    </div>
</div>
        