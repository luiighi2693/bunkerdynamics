<?php
    $fp = fopen("lenguaje.txt", "r");
    $leng= fgets($fp);
    fclose($fp);
?>



<div class="navbar yamm navbar-default navbar-fixed-top">
<div style="float:right;">
<a href="lenguaje.php?leng=Es" role="button"><img src="/bunker/images/ico_venezuela.png" class="img-responsive" alt="Responsive image"></a>
</div>
<div style="float:right;">
	<a href="lenguaje.php?leng=En" role="button"><img src="/bunker/images/ico_usa.png" class="img-responsive" alt="Responsive image"></a>
</div>
    <div class="container">
    <div class="navbar-header">
    <!-- Boton cuando la web se redimensiona a tamaño smartphone -->
    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
    	<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!-- Logo de la Web -->
    <a href="#" class="navbar-brand img_menu">
    	<img src="images/logo.svg" alt="Bunker Dynamics" title="Bunker Dynamics" style="height:120px;" />
    </a>
    </div> <!-- Menu -->
        <div id="navbar-collapse-1" class="navbar-collapse collapse float_right" style="margin-top: 40px;">
            <ul class="nav navbar-nav">
            	<li class="dropdown menu_inicio"> <!-- Boton Simple -->
                	<a href="index.php"  class="dropdown-toggle"><?php if($leng=="Es"){echo "INICIO";}else{echo "HOME";}?></a>
                </li>
            	<li class="dropdown menu_nosotros"> <!-- Boton con sub-botones -->
                	<a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php if($leng=="Es"){echo "NOSOTROS";}else{echo "ABOUT US";}?><b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a tabindex="-1" href="quienesSomos.php"><?php if($leng=="Es"){echo "QUIENES SOMOS";}else{echo "WHO ARE WE?";}?></a></li>
                        <li><a tabindex="-1" href="mision.php"><?php if($leng=="Es"){echo "MISIÓN";}else{echo "MISSION";}?></a></li>
                        <li><a tabindex="-1" href="vision.php"><?php if($leng=="Es"){echo "VISIÓN";}else{echo "VISION";}?></a></li>
                        <!--<li class="divider"></li>
                        <li><a tabindex="-1" href="#"> Separated link </a></li>-->
                    </ul>
                </li>
                <li class="dropdown menu_producto">  
                     <a href="productos.php" class="dropdown-toggle"><?php if($leng=="Es"){echo "PRODUCTOS";}else{echo "PRODUCTS & SERVICES";}?></a>
                </li>
                <li class="dropdown menu_puerto">  
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php if($leng=="Es"){echo "PUERTOS";}else{echo "PORTS";}?><b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a tabindex="-1" href="venezuela.php"><?php if($leng=="Es"){echo "VENEZUELA";}else{echo "VENEZUELA";}?></a></li>
                        <li><a tabindex="-1" href="otrsop.php"><?php if($leng=="Es"){echo "OTROS PUERTOS";}else{echo "OTHERS PORTS ";}?></a></li>
                	</ul>
                </li>
                <li class="dropdown menu_contacto"> <!-- Boton Simple -->
                    <a href="contact.php"  class="dropdown-toggle"><?php if($leng=="Es"){echo "CONTACTENOS";}else{echo "CONTACT US";}?></a>
                </li>
                <!--<li class="dropdown menu_idioma">
                	<a class="btn btn-default" href="lenguaje.php?leng=Es" role="button"><img src="/bunker/images/ico_venezuela.png" class="img-responsive" alt="Responsive image"></a>
                </li>
                <li class="dropdown menu_idioma">
                	<a class="btn btn-default" href="lenguaje.php?leng=En" role="button"><img src="/bunker/images/ico_usa.png" class="img-responsive" alt="Responsive image"></a>
                </li>-->	
            </ul>      
        </div>

        </div>   
		</div>
    </div>
</div>