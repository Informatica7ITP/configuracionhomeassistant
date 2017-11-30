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
            CONECTAR EL RASPBERRY A LA RED<br> <br>

Para poder conectar el Raspberry a la red debemos de hacer uso primeramente de una conexión por cable, y posteriormente establecer la conexión inalámbrica mediante una conexión ssh.<br> <br>
Configurando red Inalámbrica mediante cable usando puerto Ethernet <br> <br>
Material: <br> <br>
1.- Router <br> <br>
2.- Cable de red directo<br> <br>
3.- Raspberry PI 3 “B”<br> <br>


1.- Conectamos el Raspberry PI con el router mediante el cable de red:<br><br>
            
            <img src="images/9.jpg" alt="" title="#htmlcaption3" width="300px"  /><br><br>
            
2.- Entramos al router a través de la dirección de la puerta de enlace en este caso la ip es 192.168.0.1 con su respectivo usuario y contraseña  <br><br>
            
                        <img src="images/10.png" alt="" title="#htmlcaption3" width="400px"  /><br><br>
            
            
3.- una vez dentro de la interfaz del router localizamos la lista de clientes conectados, y allí estará nuestro Raspberry Pi con su respectiva ip, esta nos servirá para podernos conectar remotamente al Raspberry pi<br><br>
            
            <img src="images/11.png" alt="" title="#htmlcaption3" width="400px"  /><br><br>
            
            4.- Una vez localizada la dirección ip, nos loguemos a través de ssh con la herramienta Putty para iniciar sesión en nuestro Raspberry será con el usuario y contraseña por defecto usuario: pi contraseña: raspberry 

            <br><br>
                        <img src="images/12.png" alt="" title="#htmlcaption3" width="400px"  /><br><br>

            
                        <img src="images/13.png" alt="" title="#htmlcaption3" width="400px"  /><br><br>
            
            5.- Una vez logueados en el raspberry pi tendremos que configurar el archivo interfaces con el siguiente comando<br><br>
sudo nano /etc/network/interfaces<br><br>
una vez dentro del archivo veremos lo siguiente y configuraremos<br><br>
            

                        <img src="images/14.png" alt="" title="#htmlcaption3" width="400px"  /><br><br>

                         <img src="images/15.png" alt="" title="#htmlcaption3" width="400px"  /><br><br>

            
            
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