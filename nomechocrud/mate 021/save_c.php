<?php

include("../db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $link = $_POST['link'];

    $query = "INSERT INTO certamenes(titulo, link) VALUES ('$title', '$link')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("query failed");
    }

    $_SESSION['message'] = 'guardado satisfactoriamente';
    
    
     header("location:mate 021.php");
    
}

if(isset($_GET['id'])){
    $id = $_GET['id'] ;
    
    
    $query = "DELETE FROM certamenes WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if (!$result){
        die("fail");

    }
    $_SESSION['message'] = 'eliminado satisfactoriamente';
    header("location:mate 021.php");
}




?>