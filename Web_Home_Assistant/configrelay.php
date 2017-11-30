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
            <br>ESQUEMA DE CONEXIÓN DE MODULO RELE A LOS PINES DE RASPBERRY PI</br>
    <br><img src="images/23.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
    <br>CREACION DE BOTONES EN HOME ASISTANT 
(PRESENTANDO UN EJEMPLO CONTROLANDO UN FOCO DESDE LA APLICACIÓN DE HOME ASSISTANT)
</br>
    <br>1.-Lo primero a realizar es buscar el directorio de Home Asistan que esta oculto en el directorio personal del usuario, para poder visualizarlo utilizamos el comando  ls –lha</br>
    <br><img src="images/24.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>2.-Una vez localizado entramos al directorio de Home Asistant </br>
<br>cd .homeassistant (se escribe con el punto ya que es un directorio oculto)</br>
<br>Una vez dentro del directorio ejecutamos el comando ls para ver el listado que se encuentra dentro de home asistant</br>
<br><img src="images/25.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>3.-una vez dentro del directorio configuraremos el archivo de home assistant</br> 
<br>configuration.yaml</br>
<br><img src="images/26.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
            </p>
<br>4.-este archivo será configurado en sus tres momentos </br>
<br>switch</br>
<br>binary_sensor</br>
<br>automation</br>
<br><img src="images/27.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>4.1- switch</br>
<br>Este momento es para crear el interruptor de encendido y apagado, aquí ocuparemos los puertos GPIO 17 y 18, en nuestro caso solo estará funcionando el pin 12 que pertenece al puerto GPIO 18(basado en la tabla de conexión de GPIO), ya que solo utilizaremos un foco.</br>
<br><img src="images/28.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>4.2- binary_sensor</br>
<br>En este momento se realiza la lectura del la señalización del puerto para verificar  en que estado se encuentra</br>
<br><img src="images/29.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>4.3- automation</br>
<br>En este momento se realiza la acción al momento que realiza las instrucciones del switch de la activación y desactivación del reley</br>
<br><img src="images/30.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>En la aplicación de home Assitant quedaría asi:</br>
<br>En dispositivo móvil</br>
<br><img src="images/31.jpg" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>En computadora</br>
<br><img src="images/32.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>

<br>DIAGRAMA DE CONEXION DEL MODULO RELE CON RASPBERRY PI</br>
<br>Al momento de conectar el módulo rele  en el raspberry pi es importante hacer la conexión basándose en el esquema anterior, para la conexión de los pines de GND, IN1 y VCC</br>
<br>GND: se conecta en el pin 6, ya que va a tierra</br>
<br>VCC: alimenta al módulo rele el cual lo podemos obtener del pin número 2 ó 4, este lo alimenta con 5 volts</br>
<br>IN1: pertenece al GPIO, en nuestro caso lo conectaremos al pin 12 al cual le pertenece el  puerto 18</br>
<br><img src="images/33.png" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
<br>Materiales</br>
<li>foco</li>
<li>raspberry</li>
<li>módulo rele</li>
<li>4 cables macho hembra</li>
<li>cable de corriente para el foco</li>
<br><img src="images/35.jpg" alt="" title="#htmlcaption3" width="400px"  /><br><br></br>
        </div>
</div>       
        
<div id="footer">
    <h5>
    Copyright © | Home Assistant | ITPinotepa
    </h5>
</div> 
    
    
</body>
</html>