<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <meta charset="utf-8"/>	
          <meta name=”description” content="Automatización en Home Assistant"> 
          <meta name=”keywords” content="Broker, Home Assistant, Raspberry Pi">

	<title> Inicio</title>
	<link rel="stylesheet" href="estilos/principal.css">
    <link rel="icon" href="images/favicon.ico">    
    <link rel="stylesheet" href="css/nivo-slider.css">
	<link rel="stylesheet" href="css/mi-slider.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js"></script>

	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
</head>
<body>
>


    <div id="cab">
     <div id="cabecera">
         
         <div class="logoi" id="animacion"  >
             <img src="images/logo1.png">
         </div>
         
         <div id="logocentral" class="animacion">
          <h1>
          Home Assistant   
          </h1>
         </div>
         
         <div class="logod">
              <img src="images/itp.png">
         </div>
     	
     </div>
</div>
 <div> 
     <ul class="nav">
				<li><a id="inicio" href="index.php">Inicio</a></li>
				<li><a href="acercade.php">Acerca de </a>
					<ul>
						<li><a href="objetivos.php">Objetivos</a></li>
						
					</ul>
				</li>
				<li><a href="">Documentos</a>
					<ul>
						<li><a href="raspbian.php">Instalación de Raspbian</a></li>
						<li><a href="redwifi.php">Configuración de la Red WAN</a>
                                <ul>
								<li><a href="consola.php">Modo Consola</a></li>
								<li><a href="grafico.php">Modo Gráfico</a></li>
							    </ul>
                            </li>
						<li><a href="instalaciohome.php">Instalación de Home Assistant </a></li>
						<li><a href="configrelay.php">Integacion de modulo relay</a></li>
                        
					</ul>
				</li>
				<li><a href="tutorial.php">Tutoriales</a></li>
                <li><a href="">Recursos</a>
                     <ul>
								<li><a href="homeassistant.php">Home Assistant</a></li>
								<li><a href="community.php">Home Assistant community</a></li>
                                <li><a href="raspbiann.php">Raspbian</a></li>
                                <li><a href="win32.php">Win32 Disk Image</a></li>
							    </ul>
                </li>
                <li><a href="">Ayuda</a></li>
			</ul>
                
    </div>
		
<div>
     <div id="slaid">
     
     <div class="slider-wrapper theme-mi-slider">
		<div id="slider" class="nivoSlider">     
		    <img src="img/1.jpg" alt="" title="#htmlcaption1" />    
		    <img src="img/2.jpg" alt="" title="#htmlcaption2" />    
		    <img src="img/3.jpg" alt="" title="#htmlcaption3" />     
		</div> 
		<div id="htmlcaption1" class="nivo-html-caption">     
		    <h3> </h3>
		    <p> </p>
		</div>
		<div id="htmlcaption2" class="nivo-html-caption">     
		    <h3> </h3>
		</div>
		<div id="htmlcaption3" class="nivo-html-caption">     
		    <h3> </h3>
		</div>
	</div>
    </div>
    

</div>  
    
<div class="content">
     <div class="informacion">
        <p>
            <p>Sistema Raspbian</p>
            <br>La Raspberry Pi usa normalmente sistema operativo GNU/Linux y por lo tanto libre basado en Debian Jessie (Debian 8.0) este es el sistema operativo que utilizaremos en nuestro  Raspberry pi 3, La distribución usa LXDE como escritorio y Midori como navegador web. Además contiene herramientas de desarrollo como IDLE para el lenguaje de programación Python o Scratch, y diferentes ejemplos de juegos usando los módulos Pygame.</br>
    
    <br>Destaca también el menú "raspi-config" que permite configurar el sistema operativo sin tener que modificar archivos de configuración manualmente. Entre sus funciones, permite expandir la partición root para que ocupe toda la tarjeta de memoria, configurar el teclado, aplicar overclock, etc.</br>
    
<br>El sistema base que nos ayuda en la manipulación de la tarjeta Raspberry en la cual se puede configurar para distintas tareas que se le asigne para su uso en cualquier tipo de proyecto, es fácil de utilizar y no consume muchos recursos.</br>
    <br>Requisitos mínimos de sistema recomendados:</br>
<div >
<table style="width:100%",align="center" >
  <tr>
    <th>Tipo de instalacion</th>
    <th>RAM(minimo)</th> 
    <th>RAM(recomendado)</th>
      <th>Disco duro</th>
  </tr>
  <tr>
    <td>Sin escritorio</td>
    <td>64 Megabytes</td>
    <td>256 Megabytes</td>
    <td>1 Gigabyte</td>
  </tr>
  <tr>
    <td>Con escritotio</td>
    <td>128 Megabytes</td>
    <td>512 Megabytes</td>
      <td>5 Gigabytes</td>
  </tr>
</table>
</div>
<br></br>
<A HREF="https://www.raspberrypi.org/downloads/raspbian/"> Descarga el sistema Raspbian aqui!!</A>

            </p>
        </div>
        
</div>       
        
<div id="footer">
    <h5>
    Copyright © | Home Assistant | ITPinotepa
    </h5>
</div> 
    
    
</body>
</html>