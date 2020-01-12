<?php
session_start();

if (!empty($_POST['submit'])){
	if ((!empty($_POST['email'])) && (!empty($_POST['password']))){
		$email = $_POST['email'];
		$pass = $_POST['password'];
		
		if ($email == 'hector.arteaga@usm.cl' && $pass == 'admin1'){
			$_SESSION['nombre'] = 'Héctor';
			header("location: index.php");
			
		}
		else if ($email == 'francisco.manriquezn@usm.cl' && $pass == 'admin1'){
			$_SESSION['nombre'] = 'Francisco';
			header("location: index.php");
			
		}
		else if ($email == 'mauricio.urrutiaa@usm.cl' && $pass == 'admin1'){
			$_SESSION['nombre'] = 'Mauricio';
			header("location: index.php");
			
		}
		else{
			$_SESSION['error'] = 1;
			header("location: login.php");
		}
		
	}
}
else{
	header("location: index.php");
}
?>