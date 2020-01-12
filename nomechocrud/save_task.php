<?php

include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $link = $_POST['link'];

    $query = "INSERT INTO test(titulo, link) VALUES ('$title', '$link')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("query failed");
    }

    $_SESSION['message'] = 'guardado satisfactoriamente';
    
    
     header("location:mate 021/mate 021.php");
    
}




?>