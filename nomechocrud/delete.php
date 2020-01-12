<?php
 include("db.php");

 if(isset($_GET['id'])){
     $id = $_GET['id'] ;
     
     
     $query = "DELETE FROM test WHERE id = $id";
     $result = mysqli_query($conn,$query);
     if (!$result){
         die("fail");

     }
     $_SESSION['message'] = 'eliminado satisfactoriamente';
     header("location:mate 021/mate 021.php");
 }



?>