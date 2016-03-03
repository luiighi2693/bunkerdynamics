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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="jquery.webui-popover.css">
    </head>
    
    <body>

		<section class="menu_completo">
            <!-- Archivo de la sección del logo y del menu -->
            <?php include 'header.php';?>
            <!-- Archivo de la sección del slider -->
        </section>

		<!-- Secciones de contenido de la web en la que estes, en este caso index -->
        <!-- el class debe colocarse templatemo-xxxxx y en el css crearlo con los similares a los otros -->
            
                <br><br><br><br><br><br>
                <center>
                 <img src="Mapa-politico-de-venezuela-ejemplos.png" name="mapaVen" usemap="#mapa">

                 <map id="mapa" name="mapa">
                    <area shape="poly" id="zulia" alt="zulia" title="Zulia" onclick="myFunction()" coords="105,24,73,33,59,59,48,60,43,70,39,72,34,85,28,93,27,111,21,121,23,126,15,138,19,134,19,137,16,137,10,146,2,157,6,157,13,157,21,152,25,156,23,160,27,162,30,160,34,161,38,183,51,197,55,193,55,190,57,195,69,195,74,189,72,184,77,186,80,179,90,182,110,166,113,166,111,157,110,154,116,157,122,156,120,146,115,137,130,136,137,126,138,121,129,115,133,108,138,102,134,99,131,91,127,93,117,83,118,80,110,68,99,68,101,73,100,75,94,76,97,84,96,88,99,92,100,91,98,97,105,104,113,116,113,118,118,123,117,126,120,131,120,137,117,139,119,147,114,154,103,162,91,165,85,159,85,148,73,138,66,123,72,116,78,105,86,98,93,88,93,79,85,66,96,69,85,61,76,51,75,37,105,28,105,26,106,28,104,24,104,24" href="" target="" />
                    <area shape="poly" id="falcon" alt="falcon" title="Falcon" onclick="myFunction()" coords="164,10,176,1,183,21,190,42,203,41,208,39,217,43,231,44,239,50,253,57,261,74,258,76,260,87,244,86,239,86,243,77,238,80,232,80,229,85,225,78,217,83,198,81,194,79,180,79,170,84,165,83,159,89,156,88,151,94,145,92,141,108,133,96,131,91,125,96,116,83,118,81,110,68,117,63,133,54,148,54,163,46,177,40,177,43,182,45,186,43,181,30,162,36,161,30,156,20,160,15,162,15" href="" target="" />
                    <area shape="poly" id="carabobo" alt="carabobo" title="Carabobo" onclick="myFunction()" coords="268,92,277,91,281,93,278,97,287,99,289,114,293,115,296,117,295,122,287,125,286,122,280,119,281,125,272,125,272,122,269,124,264,123,259,116,258,114,262,114,257,116,262,112,256,113,251,105,256,89,262,87,265,91,272,92,272,92" href="" target="" />
               <!--     <area shape="poly" id="tachira" alt="tachira" data-title="tachira" data-content="estado tachira" onclick="myFunction()" coords="52,197,54,209,54,214,47,219,50,222,48,237,50,237,49,244,53,245,62,247,66,248,67,243,70,248,80,244,76,237,104,241,95,232,98,226,94,213,87,214,83,211,79,207,74,205,84,199,79,184,73,183,74,188,70,194,59,195,56,191,56,191,56,191,55,191,55,191" href="" target="" />
                    <area shape="poly" id="merida" alt="merida" title="merida" onclick="myFunction()"  coords="145,166,141,171,142,173,144,173,144,173,133,178,137,182,136,185,130,185,131,195,124,204,122,203,120,210,96,231,92,212,85,215,74,205,82,199,79,184,89,182,110,167,113,166,110,155,118,157,122,156,119,147,121,148,124,152,131,162,138,164,137,167,140,165,140,165,140,165" href="" target="" />
                    <area shape="poly" id="trujillo" alt="trujillo" title="trujillo" onclick="myFunction()" coords="140,116,149,123,155,120,159,128,162,123,166,128,172,130,166,135,170,146,167,151,170,153,170,159,163,162,159,163,155,164,148,166,146,166,142,166,136,166,137,161,131,162,122,150,118,138,130,136,138,124,140,113,140,113" href="" target="" />
                    <area shape="poly" id="lara" alt="lara" title="lara" onclick="myFunction()" coords="177,139,179,137,180,139,177,144,187,144,187,145,191,143,190,138,199,139,204,133,208,120,210,131,223,128,224,115,224,115,221,116,216,124,213,119,215,114,210,111,217,108,219,91,229,86,231,81,224,79,197,80,180,78,172,82,156,89,137,102,138,109,128,111,135,119,141,114,146,120,146,120,147,120,147,120,144,119,147,122,147,122,147,122,147,122,149,121,154,120,158,126,163,122,165,128,171,130,166,136,170,144,174,138,175,138,175,138" href="" target="" />
                    <area shape="poly" id="yaracuy" alt="yaracuy" title="yaracuy" onclick="myFunction()" coords="233,124,238,118,236,118,237,113,246,120,255,117,251,102,255,91,255,89,260,87,241,85,242,77,234,80,230,84,216,95,218,106,210,111,214,115,216,124,222,116,224,116,223,125,237,121,233,121,233,121" href="" target="" />
                    <area shape="poly" id="portuguesa" alt="portuguesa" title="portuguesa" onclick="myFunction()" coords="231,148,241,156,237,154,240,167,244,176,237,179,246,188,234,201,232,204,231,210,228,214,217,196,212,192,208,184,194,183,191,179,184,182,171,172,162,165,161,161,175,159,168,151,171,139,175,137,179,140,181,138,179,144,188,144,191,140,191,138,198,138,211,118,208,129,213,132,224,128,226,138,227,146,242,158,240,167,245,175,241,171,241,171" href="" target="" />
                    <area shape="poly" id="barinas" alt="barinas" title="barinas" onclick="myFunction()" coords="112,245,125,250,131,249,140,252,150,242,154,242,155,233,161,235,171,228,175,228,180,225,188,223,200,212,215,215,218,218,223,216,226,219,233,221,242,218,250,220,256,220,268,221,278,221,281,222,284,219,293,219,290,210,287,203,272,195,268,186,252,186,245,187,241,195,233,203,231,211,221,204,217,199,213,194,211,189,206,183,195,180,188,180,178,176,161,165,159,161,154,161,152,161,147,163,143,172,135,178,138,182,131,186,131,196,123,204,121,206,116,217,102,226,97,232,100,238,117,247,117,247" href="" target="" />
                    <area shape="poly" id="apure" alt="apure" title="apure" onclick="myFunction()" coords="66,258,71,265,81,264,84,263,92,264,106,265,115,264,121,269,128,264,134,261,140,261,143,264,145,261,147,265,154,268,158,269,163,267,167,267,202,311,204,310,207,313,218,307,237,308,241,309,246,307,256,307,267,305,274,307,279,300,291,301,299,306,303,303,308,302,313,291,315,283,318,277,321,269,317,259,326,254,331,256,333,251,338,246,344,249,344,241,349,242,346,241,350,235,355,232,348,228,348,226,337,232,328,227,318,227,306,225,303,220,295,219,282,222,273,220,243,218,239,220,229,220,225,216,221,217,216,213,204,211,189,220,187,223,177,227,172,229,160,235,156,234,155,241,144,245,139,252,128,249,107,244,96,244,87,244,82,240,78,238,79,244,72,247,68,244,66,251,62,249,72,264,72,264" href="" target="" />
                    <area shape="poly" id="cojedes" alt="cojedes" title="cojedes" onclick="myFunction()" coords="285,129,276,136,274,143,277,153,281,162,274,170,272,172,271,182,271,195,271,188,261,184,243,186,238,179,241,179,245,175,240,167,242,157,228,145,225,125,225,125,233,123,237,115,245,120,253,118,253,111,262,113,259,117,265,125,273,123,273,127,280,123,284,131,275,136,275,136" href="" target="" />
                    <area shape="poly" id="aragua" alt="aragua" title="aragua" onclick="myFunction()" coords="299,90,304,96,310,93,317,105,315,112,318,113,341,117,343,130,340,132,343,132,344,133,344,139,342,146,337,154,329,149,321,142,326,138,331,135,328,130,326,134,324,127,321,127,317,127,314,122,314,119,309,121,306,118,300,117,295,121,288,112,287,97,278,97,283,92,284,89,299,88,303,95,304,95,304,95" href="" target="" />
                    <area shape="poly" id="distritocapital" alt="distrito capital" title="distrito capital" onclick="myFunction()" coords="354,84,301,88,298,88,305,96,309,93,312,95,316,95,322,96,328,93,328,89,342,89,354,88,354,86,354,86,354,86" href="" target="" />
                    <area shape="poly" id="miranda" alt="miranda" title="miranda" onclick="myFunction()" coords="399,109,367,92,365,90,368,87,367,86,357,82,352,91,325,90,326,93,320,97,310,94,317,104,315,112,339,117,344,117,349,113,365,118,377,120,382,117,385,118,388,116,391,118,398,112,400,109,400,109" href="" target="" />
                    <area shape="poly" id="guarico" alt="guarico" title="guarico" onclick="myFunction()" coords="389,133,394,138,401,133,408,141,413,144,407,148,413,158,422,159,434,173,430,181,424,178,416,178,414,184,415,190,404,208,396,219,392,220,387,221,381,231,370,232,361,231,359,236,347,227,339,232,327,228,314,226,308,228,303,221,291,220,289,207,281,202,277,198,271,195,273,172,281,163,274,144,279,133,285,130,279,123,280,119,289,124,297,120,300,117,311,121,313,119,317,127,324,128,325,133,329,131,331,134,322,142,337,153,345,139,344,133,340,133,342,127,342,118,351,113,367,119,379,121,382,117,386,121,389,132,389,132" href="" target="" />
                    <area shape="poly" id="anzoategui" alt="anzoategui" title="anzoategui" onclick="myFunction()"  coords="444,104,455,113,458,111,463,114,470,109,478,113,469,113,470,122,476,121,475,127,482,139,475,146,474,150,477,158,483,154,503,168,506,177,526,177,520,180,522,188,538,193,538,196,533,196,531,202,525,200,520,199,510,199,503,204,498,208,482,208,473,218,466,215,463,215,463,211,456,210,453,217,450,214,442,217,442,223,446,224,445,228,438,226,433,232,429,235,420,227,410,223,401,223,398,219,412,195,416,189,415,183,416,178,428,179,430,181,434,175,427,164,420,159,415,158,408,149,413,144,402,135,401,133,391,140,382,118,388,117,391,119,400,109,411,110,417,113,425,111,430,111,432,111,441,104,441,104" href="" target="" />
                    <area shape="poly" id="sucre" alt="sucre" title="sucre" onclick="myFunction()" coords="578,78,561,80,534,78,526,82,510,80,507,85,499,81,494,84,478,82,479,83,466,84,457,82,460,92,463,89,473,87,487,91,486,92,473,94,465,92,462,92,460,95,446,97,450,101,444,104,455,112,458,112,464,114,466,111,478,113,479,110,483,105,491,106,497,99,506,106,513,109,516,103,522,114,527,111,530,114,533,111,540,111,540,102,537,96,530,90,535,87,555,89,561,84,575,84,576,83,576,83" href="" target="" />
                    <area shape="poly" id="monagas" alt="monagas" title="monagas" onclick="myFunction()" coords="554,121,556,126,552,135,550,141,555,149,555,159,563,164,564,163,568,163,568,168,569,177,558,187,552,189,546,189,539,195,521,188,521,181,526,177,506,177,498,163,482,156,475,157,473,148,484,139,473,130,477,120,472,116,475,113,483,107,483,105,488,106,492,105,497,99,509,108,516,104,523,113,526,111,528,113,534,112,539,112,539,102,546,105,550,114,552,117,552,117" href="" target="" />
                    <area shape="poly" id="deltaamacuro" alt="delta amacuro" title="delta amacuro" onclick="myFunction()" coords="600,128,616,138,621,135,631,147,636,159,639,162,635,163,633,168,640,179,637,181,644,184,644,187,650,189,654,183,670,188,683,200,677,207,674,204,672,215,666,216,658,222,631,221,628,222,626,228,613,219,610,217,600,221,597,225,590,219,590,213,586,210,583,206,585,203,588,198,586,195,585,194,557,202,542,193,548,189,561,186,570,177,568,164,561,163,556,157,555,145,551,142,555,127,551,116,555,115,560,113,569,118,580,125,587,126,589,126,591,127,588,119,596,123,599,131,599,131" href="" target="" />
                    <area shape="poly" id="bolivar" alt="bolivar" title="Bolivar" onclick="myFunction()" coords="398,333,393,329,391,317,395,308,378,315,378,321,373,324,362,338,349,336,346,327,342,330,338,329,332,333,328,330,320,336,316,328,309,331,309,325,314,320,313,309,301,309,300,306,309,299,316,282,320,272,316,265,322,254,328,256,330,251,340,248,343,245,344,239,356,231,360,239,360,229,383,229,389,218,400,220,400,221,419,226,428,235,439,226,445,228,447,224,443,223,442,215,450,214,453,217,457,209,463,211,464,217,474,218,483,207,499,208,511,199,532,201,534,195,545,195,557,202,586,194,588,201,583,201,584,206,591,215,591,220,596,224,597,225,602,218,612,217,619,227,627,229,628,221,657,223,655,226,649,222,644,226,640,235,635,238,638,243,642,251,638,254,644,256,651,253,658,257,657,264,651,271,638,274,626,274,624,279,613,282,613,308,601,320,643,366,632,381,623,379,625,389,615,392,606,388,609,393,602,395,594,395,599,401,590,404,583,404,574,411,572,408,565,414,553,409,548,406,549,411,546,412,545,417,543,416,535,414,536,421,535,427,535,436,526,441,519,435,509,435,505,426,501,422,496,432,486,429,487,424,482,419,471,422,468,417,460,410,456,414,451,411,441,413,437,405,442,402,438,395,445,393,443,389,445,384,438,386,434,387,428,388,425,382,418,376,417,369,416,363,410,357,409,351,416,350,412,343,415,342,409,340,411,329,403,331,403,331" href="" target="" />
                    <area shape="poly" id="amazonas" alt="amazonas" title="Amazonas" onclick="myFunction()"  coords="292,342,279,349,281,357,281,361,282,371,278,390,282,392,281,406,287,412,290,428,296,428,304,443,306,443,303,453,279,473,280,478,285,472,288,477,291,476,294,483,297,483,311,496,315,499,312,506,316,510,317,514,316,520,321,530,326,539,327,547,330,549,328,555,357,577,361,574,364,580,368,575,373,577,379,568,392,566,395,569,397,575,391,579,395,582,401,580,403,569,408,569,413,570,413,560,423,558,424,555,427,555,431,553,435,554,443,550,444,543,455,540,451,545,454,546,459,542,469,533,469,522,471,518,481,516,491,514,492,510,502,508,504,499,503,498,497,494,489,492,481,496,473,491,470,489,474,483,468,468,462,460,459,456,466,454,463,441,461,433,448,425,440,416,431,412,436,409,430,400,439,402,437,406,443,402,438,395,445,393,444,385,428,388,421,378,416,367,414,366,414,362,408,358,410,351,417,351,411,343,415,341,410,340,410,330,395,335,392,325,396,308,379,315,377,322,362,338,347,336,347,328,338,329,334,333,328,330,321,336,316,330,312,330,308,325,314,319,313,309,301,309,301,305,298,309,301,315,291,325,291,338,290,337,290,337" target="" />
                    -->
                 </map>
                </center>
		
                <div id="myContentZulia">
                    <a href="#">Maracaibo</a>
                </div>

                <div id="myContentFalcon">
                    <a href="#">Amuay</a><br><br>
                    <a href="#">Cardon</a>
                </div>

                <div id="myContentCarabobo">
                    <a href="#">Puerto Cabello</a>
                </div>
        <?php include 'footer.php';?>
        <!-- todos los JS que necesita la web -->
        <?php include 'include_js.php';?>
         <script src="jquery.webui-popover.js"></script>
		
        <script type="text/javascript"> <!-- codigo en cada php para que marque el menu en el que esta -->
			(function(){
               // var x =  document.getElementById("mapa").areas;
                //$('area').webuiPopover({title:'Titlesdfcsdfsd',content:'Content'}); 
              //  var objTag = document.getElementById("zulia");
                //objTag.setAttribute("data-content","este es el estado zulia")
                $('#zulia').webuiPopover({title:'Puertos',url:'#myContentZulia'});
                $('#falcon').webuiPopover({title:'Puertos',url:'#myContentFalcon'});
                $('#carabobo').webuiPopover({title:'Puertos',url:'#myContentCarabobo'});

            })();
            var c1;
            var c2;
            function myFunction() {
                    
                     $(document).mousemove(function(event) {
                         $(".webui-popover").css("margin-left", event.pageX);
                         $(".webui-popover").css("margin-top", event.pageY-110-document.body.scrollTop);    
                        $(document).unbind(event);
                    });
                    c1 = $(".webui-popover").css("margin-left");
                    c2 = $(".webui-popover").css("margin-top");
                        console.log(c1+"  "+c2);
                         console.log("document.body.scrollTop");
                        console.log(document.body.scrollTop);
                }
		</script>
        
    </body>
</html>