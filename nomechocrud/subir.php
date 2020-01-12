<?php
require('db.php');

$temporal = $_FILES['archivo']['tmp_name'];
$archivo = $_FILES['archivo']['name'];
$tamano = $_FILES['archivo']['size'];
$tipo = $_FILES['archivo']['type'];
$fileNameCmps = explode(".", $archivo);
/*$extension = strtolower(end($fileNameCmps));*/
/*$newFileName = md5(time() . $archivo) . '.' . $extension;*/

$titulo = $_POST['titulo'];

/*$extensiones_posibles = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf');
if (!in_array($extension, $extensiones_posibles)){
	echo 'No se puede subir archivos con la extensión .'.$extension;
}
else{
	if (move_uploaded_file($temporal, 'archivos_usuarios/'.$nombre)){
      		echo "El archivo ha sido cargado correctamente.";
   	}else{
      		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
	}
}
*/

if($archivo != "none"){
	$fp = fopen($temporal, "rb");
	$contenido = fread($fp, $tamano);
	$contenido = addslashes($contenido);
	fclose($fp);
	
	$consulta = "INSERT INTO archivos VALUES (default, '$archivo', '$titulo', '$contenido', '$tipo')";
	mysqli_query($con, $consulta);
	
	if (mysqli_affected_rows($con) > 0){
		echo "Operación exitosa";
	}else{
		echo "Error";
	}
}

?>