<!DOCTYPE html>
<html>
<head>


	 <meta charset="utf-8"/>	
          <meta name=”description” content="Automatización en Home Assistant"> 
          <meta name=”keywords” content="Broker, Home Assistant, Raspberry Pi">

	<title> Configuracion Relay</title>
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
            <h1>Configuracion de la Red Wifi</h1>
            <br>Configurar red Inalámbrica usando Entorno Gráfico</br>
    <br>Se configurará el acceso a la red usando la interfaz gráfica del sistema operativo Raspbian, para ello requeriremos de contar con el siguiente material</br>
    <br>Material: </br>
   <br><li>Teclado </li></br>
 <br><li>Mouse</li></br>
 <br><li>HDMI</li></br>
 <br><li>Monitor con puerto HDMI</li></br>
<br><li>Raspberry</li></br>
<br></br>
<br><p>
1.- Conectamos el HDMI, del raspberry al monitor, y es así como veremos reflejado en el monitor el sistema operativo Rasbian, y para poder interactuar con el sistema conectaremos el mouse y teclado al raspberry.</br>
<br><img src="images/16.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter" /><br><br></br>
<br>
2.- Para conectarse al WiFi, en la parte superior derecha en el icono de redes nos conectaremos a una red</p></br>
<br><img src="images/17.png" alt="" title="#htmlcaption3" width="450px" height="300px" class="imgcenter"  /><br><br></br>

<br></br>
<br></br>
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