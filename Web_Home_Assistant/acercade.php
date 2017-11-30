<!DOCTYPE html>
<html>
<head>
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
    Este es un proyecto de Home Assistant (Es una plataforma automatizado de código abierto) implementado en una tarjeta Raspberry pi 3 en la cual se realizó una práctica del encendido y apago de un foco, de forma remota, no solo hace esta función, sino que también se utiliza para múltiples funciones en aparatos electrónico del hogar.
Si no que también tiene la función de Observar o rastrear el estado del dispositivo que sea necesario a una cierta distancia.
Controla: cualquier dispositivo desde una interfaz.
Automatiza: establece las reglas para llevar el control de los dispositivos que se maneja.

Un ejemplo:
 Sería que prenda el aire acondicionado de una oficina con solo una aplicación móvil desde la comodidad de tu lugar de trabajo.

Los materiales que se utilizaron son los siguientes:
-Tarjeta Raspberry Pi 3
-Tarjeta SD de 16 GB
-Router 
-Cable de red
- Modulo relay
-Un socket
-Un foco
Software utilizado:
-Win32 Disk Imager
-Sistema operativo Rabian.
Utilizando estas herramientas se logró esta práctica de home asisstan con raspberry pi 3 para la función de encendido y apagado de un foco.
-





Este trabajo se orienta al uso de nuevas tecnologías como es la utilización de la placa Raspberry, esta placa posee la principal característica de alojar en su interior, la utilización de home asisstan esta se encuentra recientemente en el mercado mundial, donde no existe mucho desarrollo. El tema propuesto ayudará al usuario a controlar de manera amigable las escenas de luminosidad de su hogar, reduciendo costos y espacio por medio de la utilización de la Raspberry.
SISTEMA INFORMÁTICO El sistema informático de control de luces RaspControl, es la interfaz que permite conectar al usuario con el sistema. El programa permitirá accionar las luces cuando el usuario pulse un evento de botón en la interfaz. Esta fue realizada con home asisstan según las características de la raspberry, ya que es multiplataforma, es decir puede ser ejecutado.
La Placa Raspberry servirá como servidor del sistema para ello es mencionaremos las características y bondades de esta placa. Cabe recalcar que la ejecución del raspberry y home asisstant necesarios para conectarse con los periféricos externos que se realiza de diferentes maneras en dispositivos electrónicos.
Placa de Interacción La placa de interacción es una tarjeta electrónica que permite conectar a la placa Raspberry con el sistema eléctrico de la casa.
    
    </p>
    </div>
        
</div>       
        
      
        
        
    
</body>
</html>