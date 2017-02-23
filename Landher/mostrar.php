<?php 
	class conexion{
	function recuperarDatos(){
		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "educacion";

		$con = mysql_connect($host, $user, $pw) or die("No se puede conectar a la base de datos");
		mysql_select_db($db, $con) or die ("No se encontró la base de datos.");
		$query = "SELECT * FROM evaluaciones";
		$resultado= mysql_query($query);
			echo "<table border=1>";
			echo "<tr>";
			echo "<td colspan=5><h3>Rut del Estudiante</h3>";
			echo "</td>";
			echo "<td colspan=5><h3>Nombre del Estudiante</h3>";
			echo "</td>";
			echo "<td colspan=5><h3>Edad</h3>";
			echo "</td>";
			echo "<td colspan=5><h3>Curso</h3>";
			echo "</td>";
			echo "<td colspan=5><h3>Tipo de Test</h3>";
			echo "</td>";
			echo "<td colspan=5><h3>Resultado</h3>";
			echo "</td>";
			echo "<tr></tr>";
			echo "<tr></tr>";
			echo "</tr>";

			echo "<tr>";
			while ($fila = mysql_fetch_array($resultado)) {

			echo "<td colspan=5><h3>$fila[rut_estudiante]</h3></td>";
			echo "<td colspan=5><h3>$fila[nombre]</h3></td>";
			echo "<td colspan=5><h3>$fila[edad]</h3></td>";
			echo "<td colspan=5><h3>$fila[curso]</h3></td>";
			echo "<td colspan=5><h3>$fila[tipo_test]</h3></td>";
			echo "<td colspan=5><h3>$fila[resultado]</h3></td>";
			echo "<tr></tr>";
			echo "<tr></tr>";
	}
			echo "</table>";
		}
	}