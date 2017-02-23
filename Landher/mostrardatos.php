<!doctype html>
<html>
	<head>
		<title>Easy learn</title>
		<link rel="stylesheet" href="estilos.css"/>
	</head>

	<body>
		<div id='contenedor'>
			<header>
				  <table class="menu">
          <tr>  
            <td><a href="index2.html"><h1>Inicio</h1></a></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td><a href="profe.html"><h1>Evaluaciones</h1></a></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td><a href="mostrardatos.php"><h1>Mostrar Evaluaciones</h1></a></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td><a href="test.html"><h1>Test</h1></a></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td><a href="login.html"><h1>Cerrar Sesión</h1></a></td>
          </tr>
        </table>
			</header>
			<nav>
				<table border="0" width="1200">
					<tr>
						<td><img class="logo" src="imagenes/logo.jpg" width=300></img></td>
						<td><h1>Bienvenidos a nuestro sitio web.</h1>
							<h1>Recuerda que puedes contactarnos para enviarnos tus preguntas y/o sugerencias en nuestra sección de Contacto.</h1></td>
					</tr>
				</table>
			</nav>
			<aside>
				<marquee direction="up" id="bienv">
        		<center><H5>Información Adicional</H5></center>
            	<br>
            	<center><a href="cuenta.html"><img class="logos" src="imagenes/logo2.jpg"></a></center>
            	<br>
            	<center><a href="tests.html"><img class="logos" src="imagenes/logo3.jpg"></a></center>
 	   			<br>
            	<center><a href="somos.html"><img class="logos" src="imagenes/logo4.jpg"></a></center>
            	<br>
		    	<center><a href="interactiva.html"><img class="logos" src="imagenes/logo5.jpg"></a></center>
				</marquee>
			</aside>
			<section><br></br><br></br>
          <center><h2>Historial de Evaluaciones</h2></center>
           <center> <?php 
              include("mostrar.php");
              $Con = new conexion();
              $Con -> recuperarDatos();
            ?></center>
			</section>
			<footer>
			</footer>
		</div>	
	</body>
</html>
