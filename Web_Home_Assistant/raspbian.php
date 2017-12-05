<!DOCTYPE html>
<html>
<head>
	

	 <meta charset="utf-8"/>	
          <meta name=”description” content="Automatización en Home Assistant"> 
          <meta name=”keywords” content="Broker, Home Assistant, Raspberry Pi">

	<title> Raspbian</title>
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
            <h1>Instalación del Sistema Operativo Raspbian</h1><br> <br>
1.- Para la realización de la instalación de Home Assistant en Raspberry Pi 3 es necesario descargar e instalar el sistema operativo Raspbian desde la página oficial.
<br><br> https://www.raspberrypi.org/downloads/raspbian/ <br><br>
            
  <img src="images/1.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" />
            <br><br>
            Una vez dentro descargamos el archivo descomprimido de Raspbian Stretch With Desktop dando click en  Download ZIP.<br><br>
            
            Al terminar la descarga de nuestro sistema operativo Raspbian, pasaremos este mismo a una memoria micro SD con un espacio de  almacenamiento de 16 gb o más, la cual debe de estar completamente vacía para evitar problemas de instalación.<br><br>
            
            2.- Para poder hacer que nuestra memoria sea booteable utilizaremos la herramienta  Win32 Disk Imager, la cual debemos de descargar e instalar.<br><br>
            
              <img src="images/2.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br>
            
            Antes de comenzar a utilizar la herramienta formateamos la memoria micro sd.<br><br>
            
Una vez ejecutada la aplicación Win32 Disk Imager  seleccionamos la unidad en la que se encuentra la tarjeta sd:<br><br>
            <img src="images/3.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br>
            
            Posteriormente seleccionamos la imagen del sistema Raspbian, una vez seleccionada se da click en write para que se monte el sistema en la unidad extensible
            <br><br>
            <img src="images/4.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br>
            
            3.- Una vez montado el sistema en la sd, crearemos un archivo vacio ssh sin extensión, para posteriormente ponerlo dentro de la tarjeta sd.<br><br>
Para esto, debemos de conectar la memoria micro sd a nuestra computadora y abrir una terminal en la ubicación de la memoria micro sd.<br><br>
La creación del archivo lo realizaremos en  el sistema operativo Ubuntu de dos maneras una será con la terminal usando el comando touch.<br><br>
uso de comandos:<br><br>
-  ls (para listar los ficheros y directorios existentes)<br><br>
-  touch (para crear un archivo vacio ) seguido de ssh (en este caso nombre de nuestro archivo vacio)<br><br>
por ultimo volvemos a dar ls y vemos que se ha creado el archivo ssh. <br><br>

            <img src="images/5.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br> 
            
            La segunda forma es creándolo con la interfaz gráfica, abrimos nuestra tarjeta micro sd, y realizamos lo siguiente:<br><br>
-	Damos Click derecho, elegimos nuevo documento y por ultimo seleccionamos “documento  vacío” y le pondremos el nombre ssh, recuerde que este no debe de llevar extensión.
<br><br>
            <img src="images/6.jpg" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br>
            <img src="images/7.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br>
            Ya finalizado el proceso el sistema está listo para usarse, así que  insertamos la tarjeta de memoria sd en la placa Raspberry PI.
            <br><br>
                 <img src="images/8.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br>
            

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