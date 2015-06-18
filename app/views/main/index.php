<!DOCTYPE html>
<html>
<!-- Encabezado: Titulo, plugin, estilos de letras etc-->
<head>

	<title>REVISTA DIGITAL UDONE - LIC. INFORMATICA </title>
	<base href="http://localhost/IHM/app/res/">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!--<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>-->
	<link rel="stylesheet" type="text/css" href="css/style2015.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
				<div id="logocont"><img id="logo" src="pics/udo.png"></div>				
				<div id="textheader">			
				REVISTA DIGITAL INFORMATICA <br>
				<span class="sub">Universidad de Oriente - Nucleo Nueva Esparta</span> 
				</div>			
		</div>
		
		<div class="nav"> 
		<ul>
			<td class=""> <a class="acceso" href="http://localhost/ihm/public/">Home</a></td>
			<td class=""><span class="separador"></span></td>
			<td class=""> <a class="acceso" href="http://localhost/ihm/public/home/comite">Comite Editorial</a></td>
	        <td class=""><span class="separador"></span></td>
	        <td class=""> <a class="acceso"href="http://localhost/ihm/public/home/normas">Normas</a></td>
	        <td class=""><span class="separador"></span></ut>
	        <td class=""> <a class="acceso"href="http://localhost/ihm/public/home/comite">Tematicas</a></td>
	        <td class=""><span class="separador"></span></td>
	        <td class=""> <a class="acceso"href="http://localhost/ihm/public/home/comite">Informacion</a></td>
	        <td class=""><span class="separador"></span></td>
	        <td class=""> <a class="acceso"href="http://localhost/ihm/public/home/comite">Contacto</a></td>
		</ul>
		</div>
		<div class="store sombra">
			<div class="shelf">
				<div class="center">

					<?php echo $data[1]; ?>
					  
					<!--<script type="text/javascript">prueba(JSON.parse('<?php echo json_encode($data[0]); ?>'));</script>-->

					
		    		<!--<div class="caja" id="2" onmouseover="abrir(2);">
		      			<div class="item">
		       				<div class="lomo"></div>
		        			<div class="portada" onclick="mostrarinfo(2);">
		        				<img class="imgp" src="http://3.bp.blogspot.com/-YOXA09JZ9wA/T065PbgMo9I/AAAAAAAAEOU/c9Qsic3DrVI/s640/noticias_del_mundo_increible-insolito-wtf-II.jpg">
								<a href="http://compass-style.org/">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</a>
		        			</div>
		      			</div>
		    		</div>
		    		<div class="caja" id="3" onmouseover="abrir(3);">
		      			<div class="item">
		       				<div class="lomo"></div>
		        			<div class="portada" onclick="mostrarinfo(3);">
		        				<img class="imgp" src="http://www.laotravoz.cl/wp-content/uploads/2013/01/PORTADA_DEFSOLA.jpg">
		        			</div>
		      			</div>
		    		</div>
		    		<div class="caja" id="4" onmouseover="abrir(4);">
		      			<div class="item">
		       				<div class="lomo"></div>
		        			<div class="portada" onclick="mostrarinfo(4);">
		        				<img class="imgp" src="http://www.chilloutpoint.com/images/2010/01/unpublished-playboy-issues-cartoon-characters-edition/cartoon-characters-on-playboy-09.jpg">
		        			</div>
		      			</div>
		    		</div>
		    		<div class="caja" id="5" onmouseover="abrir(5);">
		      			<div class="item">
		       				<div class="lomo"></div>
		        			<div class="portada" onclick="mostrarinfo(5);">
		        				<img class="imgp" src="http://globedia.com/imagenes/noticias/2012/11/3/revista-world-america-latina-octubre-2012_1_1446313.jpg">
		        			</div>
		      			</div>			    			
					</div>-->
				</div>
			</div>
			<div class="info">
				<div class="interinfo">
					<p id="titulo">loeee</p>
					<p id="descrip" style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div id="botones"></div>
					<button id="ver" class="button" onclick="modal()">LEER</button>
					<button id="descargar" class="button">DESCARGAR</button>
				</div>
			</div>
		</div>	

		<div class="general sombra" style="text-align:justify">
			<div class="interg" >

				<p id="titulog"> REVISTA DIGITAL INFORMATICA </p>

				<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<div class="footer">

		</div>	

	</div>

<div id="modal" class="styled">

    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    	<button onclick="ocultar()">Cerrar</button>

</div>
<div id="modal-background"></div>


</body>
</html>