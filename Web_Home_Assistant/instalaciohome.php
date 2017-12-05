<!DOCTYPE html>
<html>
<head>
	

	 <meta charset="utf-8"/>	
          <meta name=”description” content="Automatización en Home Assistant"> 
          <meta name=”keywords” content="Broker, Home Assistant, Raspberry Pi">

	<title> Instalacion Home Assistant</title>
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
						<li><a href="redwifi.php">Configuración de la Red Wifi</a>
                                <ul>
								<li><a href="consola.php">Modo Consola</a></li>
								<li><a href="grafico.php">Modo Gráfico</a></li>
							    </ul>
                            </li>
						<li><a href="instalaciohome.php">Instalación de Home Assistant </a></li>
						<li><a href="configrelay.php">Integracion de modulo relay</a></li>
                        
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
                <li><a href="Ayuda.php">Ayuda</a></li>
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
            <br><h1>Instalación de Home Assistant</h1></br>
    <br>
En este punto ya debemos de contar con acceso a la red de internet, por lo que procederemos a realizar la instalación del Home Asistant a través de la terminal.
</br>
    <br>1.-Lo primero a realizar es la actualización de paquetes del sistema raspbian con los siguientes comandos:</br>
    <br># apt-get update<br>
<br># apt-get upgrade<br>
<br>2.-Posteriormente procederemos a revisar la versión de Python con el comando de 
Python –versión
<br>
<br><img src="images/18.png" alt="" title="#htmlcaption3" width="750px" height="200px" class="imgcenter" />
    <br><br><br>
<br>Si es la versión 3 en adelante se puede iniciar el proceso de instalación si no es el caso se tendrá que instalar la versión de python3 ya que Home Asistant corre sobre Python a partir de la versión 3 en adelante para su instalacion usaremos el siguiente comando</br>
<br>apt-get install python3-dev python3-pip</br>

<br><img src="images/19.png" alt="" title="#htmlcaption3" width="750px" height="200px" class="imgcenter" /><br><br></br>
<br>3.-ya teniendo Python 3  instalaremos home Assitant con el siguiente comando</br>
<br>pip3 install homeassistant</br>
<br><img src="images/20.png" alt="" title="#htmlcaption3" width="750px" height="200px" class="imgcenter" /><br><br></br>
<br>Una vez finalizado el proceso iniciaremos el servicio de home Assitant con el siguiente comando</br>
<br>hass --open-ui</br>
<br><img src="images/21.png" alt="" title="#htmlcaption3" width="750px" height="200px" class="imgcenter"  /><br><br></br>
<br>Ahora verificaremos que Home Assistant este activo mediante la dirección ip:8123, 8123 es el puerto que utiliza Home Asistant</br>
<br><img src="images/22.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br></br>
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