<?php

	$rut=$_POST['rut'];
	$realname=$_POST['nombre'];
	$edad=$_POST['edad'];
	$curso=$_POST['curso'];
	$tipo=$_POST['tipo'];
	$resultado=$_POST['resultado'];

	require("connect_db.php");


		if($rut == ''){
				echo ' <script language="javascript">alert("Atencion, verifique sus datos");</script> ';
				echo "<script>location.href='profe.html'</script>";
		}elseif($realname == ''){
				echo ' <script language="javascript">alert("Atencion, verifique sus datos");</script> ';
				echo "<script>location.href='profe.html'</script>";
		}elseif($edad == ''){
				echo ' <script language="javascript">alert("Atencion, verifique sus datos");</script> ';
				echo "<script>location.href='profe.html'</script>";
		}elseif($curso == ''){
				echo ' <script language="javascript">alert("Atencion, verifique sus datos");</script> ';
				echo "<script>location.href='profe.html'</script>";
		}elseif($tipo == ''){
				echo ' <script language="javascript">alert("Atencion, verifique sus datos");</script> ';
				echo "<script>location.href='profe.html'</script>";
		}elseif($resultado==''){
				echo ' <script language="javascript">alert("Atencion, verifique sus datos");</script> ';
				echo "<script>location.href='profe.html'</script>";
		}else{

				//require("connect_db.php");
				mysql_query("INSERT INTO evaluaciones VALUES('$rut','$realname','$edad','$curso','$tipo','$resultado')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con exito");</script> ';
				echo "<script>location.href='profe.html'</script>";
				mysql_close($link);
			}
		


?>