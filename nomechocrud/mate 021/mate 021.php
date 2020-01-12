<?php include("../db.php") ?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nomechomath</title>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" href="../css/main.css">
    <!--font iconos-->
    <script src="https://kit.fontawesome.com/0be153cc79.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
          <div class="container">
            <a class="navbar-brand" href="../index.html">nomechomath</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
				if (!empty($_SESSION['nombre'])){
					echo '<p>Bienvenido, ' . $_SESSION["nombre"];
					echo '<a href="../cerrar.php"> Cerrar sesión';
        } 
         ?>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown p-1 px-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    cursos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../mate 021/mate 021.php">mate 021</a>
                    <a class="dropdown-item" href="../mate 022/mate 022.html">mate 022</a>
                    <a class="dropdown-item" href="../mate 023/mate 023.html">mate 023</a>
                    <a class="dropdown-item" href="../mate 024/mate 024.html">mate 024</a>
                  </div>
                </li>
                <li class="nav-item p-1 px-3">
                  <a class="nav-link" href="../subir archivo.php">Subir material</a>
                </li>
                <li class="nav-item p-1 pl-3">
                  <a class="nav-link" href="../nosotros.html">nosotros</a>
                </li>
              </ul>
            </div>
          </div>
    </nav>


    <div class="container">
    
      <div>
        <h1 class="text-center">Matematicas 021</h1>
      </div>
      <?php
      if(isset($_SESSION['message'])&&!empty($_SESSION['nombre'])) {?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <?php  unset($_SESSION['message']); } ?> 
      <hr>

      <!--calculo y complemento -->
      <div class=" d-flex justify-content-around">
              
              <div class="list-group col-sm-3 col-md-3 col-5">
                  <span class="badge badge-info p-3 text-uppercase "><h5>Calculo</h5></span>
                  <a class="btn btn-light" href="Calculo/Limites.html" role="button">Limites</a>
                  <a class="btn btn-light" href="https://drive.google.com/file/d/1fCYBaurhJUV6vUs2E-yQh1x-IPZYHFQm/view?usp=sharing" role="button">Ejemplo</a>
                  <a class="btn btn-light" href="#" role="button">Funciones</a>
                  <a class="btn btn-light" href="Calculo/Limites.html" role="button">Limites</a>
                  <a class="btn btn-light" href="Calculo/Limites.html" role="button">Funciones</a>
                  <a class="btn btn-light" href="Calculo/Limites.html" role="button">Derivadas</a>
                  <a class="btn btn-light" href="Calculo/Limites.html" role="button">Inecuaciones</a>
                  <a class="btn btn-light" href="Calculo/Limites.html" role="button">Trigonometria</a>
                  
              </div>
          
          
            <div class="list-group col-sm-3 col-md-3 co-5">
                <span class="badge badge-info p-3 text-uppercase"><h5>Complemento</h5></span>
                <a class="btn btn-light" href="Calculo/Limites.html" role="button">Trigonometria</a>
                <a class="btn btn-light" href="#" role="button">Sumatorias</a>
                <a class="btn btn-light" href="#" role="button">Geometria analitica</a>
                <a class="btn btn-light" href="Calculo/Limites.html" role="button">Polinomios</a>
                <a class="btn btn-light" href="Calculo/Limites.html" role="button">Fracciones parciales</a>
                <a class="btn btn-light" href="Calculo/Limites.html" role="button">Formas polares</a>
                <a class="btn btn-light" href="Calculo/Limites.html" role="button">Trigonometria</a>
                <a class="btn btn-light" href="Calculo/Limites.html" role="button">Trigonometria</a>
                
            </div>
          
        
      </div>

    </div>


    <!--scroll resumenes y apuntes generales-->
    <div class="container escrolear col-sm-7 col-md-7 col-11">
      <div class="text-center">
      

      
      <!-- apuntes y resumenes -->
        <span class="badge badge-info p-3 text-uppercase .d-flex " style="width:100%; height:60px; border:0;"><h5>Apuntes y resumenes</h5></span>
        
        
        <?php 
        if((!empty($_SESSION['nombre']))){ ?>
          <form action = "../save_task.php" method="POST">
              <input type="text" name="title"  placeholder="nombre" class="form-control my-2">
              <input type="url" name ="link" placeholder="link" class="form-control my-2">
              <input class="btn btn-primary" name="save_task" type="submit" value="guardar">
          </form>
       <?php } ?>
      </div>
      <!--tabla con php-->
      <div class="box">
        <table class="table">
          <thead >
            <tr>
              <th>documentos</th>
              <?php if((!empty($_SESSION['nombre']))){ ?>
              <th>acciones</th>
              <?php } ?>
            
           </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM test";
              $result_tasks = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($result_tasks)){ ?>

                <tr>
                  <td><a href=<?php echo $row['link'] ?> class="list-group-item list-group-item-action"><?php echo $row['titulo'] ?></a></td>
                  
                   <?php if((!empty($_SESSION['nombre']))){ ?>
                  <td><a class="btn btn-danger" href="../delete.php?id=<?php echo $row['id']?>"><i class="far fa-trash-alt"></i></a></td>
                   <?php } ?>
                 </tr>

              <?php } ?>
            
        </tbody>
        
        </table>
        
      </div>

      <div class="list-group pt-5 pb-5">
        <span class="badge badge-info p-3 text-uppercase .d-flex " style="width:100%; height:60px; border:0;"><h5 >Certamenes</h5></span>
         
        <?php if((!empty($_SESSION['nombre']))){ ?>
        <form action = "save_c.php" method="POST">
            <input type="text" name="title"  placeholder="nombre" class="form-control my-2">
            <input type="url" name ="link" placeholder="link" class="form-control my-2">
            <input class="btn btn-primary" name="save_task" type="submit" value="guardar">
        </form>
        <?php } ?>
        <div class="box">
        <table class="table">
          <thead >
            <tr>
              <th>documentos</th>
              <?php if((!empty($_SESSION['nombre']))){ ?>
              <th>acciones</th>
              <?php } ?>
            
           </tr>
          </thead>
          <tbody>
            <?php
              ;
              $query = "SELECT * FROM certamenes";
              
              $result_tasks = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($result_tasks)){ ?>

                <tr>
                  <td><a href=<?php echo $row['link'] ?> class="list-group-item list-group-item-action"><?php echo $row['titulo'] ?></a></td>
                  
                  <?php if((!empty($_SESSION['nombre']))){ ?>
                  <td><a class="btn btn-danger" href="save_c.php?id=<?php echo $row['id'];?> "><i class="far fa-trash-alt"></i></a></td>
                  <?php } ?>
                 </tr>

              <?php } ?>
            
        </tbody>
        
        </table>
        
      </div>
      </div>

    </div>
        
   

          <!-- Footer -->
      <footer class="page-footer font-small bg-info">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a href="../index.html"> nomechomath.com</a>
          <a href="../login.php">admin</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->

  
    




    <!--bootstrap 4 script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>