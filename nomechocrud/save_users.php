<?php

include("db.php");

if (isset($_POST['save_users'])){
    $materia = $_POST['mataria'];
    $link = $_POST['link'];
    $descripcion = $_POST['des'];

    $query = "INSERT INTO subidos_users(mataria, link, Descripcion) VALUES ('$materia', '$link', '$descripcion')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("query failed");
    }

    $_SESSION['message'] = 'guardado satisfactoriamente';
    
    
     header("location:subir archivo.php");
    
}

if(isset($_GET['id'])){
    $id = $_GET['id'] ;
   
    
    $query = "DELETE FROM subidos_users WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if (!$result){
        die("fail");

    }
    $_SESSION['message'] = 'eliminado satisfactoriamente';
    header("location:subir archivo.php");
}




?>