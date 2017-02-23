<?php

	require("connect_db.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];

	$sql=mysql_query("SELECT * FROM usuarios where nombre='$username'");
	
	if($username=='admin' & $pass=='admin'){
			header("Location: profe.html");
		}elseif ($f=mysql_fetch_array($sql)){
		if ($pass==$f['clave']){
			header("Location: apoderados.html");
		}
		else{
			echo '<script>alert("CLAVE INCORRECTA")</script>';
			echo "<script>location.href='login.html'</script>";
		}
	}else{
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>';
			echo "<script>location.href='login.html'</script>";
	}
?>