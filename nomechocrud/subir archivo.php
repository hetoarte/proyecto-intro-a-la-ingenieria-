<?php include("db.php") ?> 
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
    <link rel="stylesheet" href="css/main.css">
    <!--font iconos-->
    <script src="https://kit.fontawesome.com/0be153cc79.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
          <div class="container">
            <a class="navbar-brand" href="index.php">nomechomath</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
				if (!empty($_SESSION['nombre'])){
					echo '<p>Bienvenido, ' . $_SESSION["nombre"];
					echo '<a href="cerrar.php"> Cerrar sesión';
        } 
         ?>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown p-1 px-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    cursos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="mate 021/mate 021.php">mate 021</a>
                    <a class="dropdown-item" href="mate 022/mate 022.html">mate 022</a>
                    <a class="dropdown-item" href="mate 023/mate 023.html">mate 023</a>
                    <a class="dropdown-item" href="mate 024/mate 024.html">mate 024</a>
                  </div>
                </li>
                <li class="nav-item p-1 px-3">
                  <a class="nav-link" href="subir archivo.php">Subir material</a>
                </li>
                <li class="nav-item p-1 pl-3">
                  <a class="nav-link" href="nosotros.html">nosotros</a>
                </li>
              </ul>
            </div>
          </div>
    </nav>

    <!--subir archivos-->
    <div class="container text-center">

        <div>
            <h2>Compartir material</h2>
        </div>
        <?php
      if(isset($_SESSION['message'])) {?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <?php  unset($_SESSION['message']); } ?> 
        <hr>
       
       
        <div>
            <h2>Subir archivos</h2>
        </div>



        <form>
            <div class="form-group">
              
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
              <input type="submit" value="enviar">
            </div>
            
                
                
    
            </div>
          </form>

    </div>

    <div class="container">
      <h2 class="text-center">Compartir links</h2>
    <form action="save_users.php" method="POST">
        <div class="form-group">
          <label for="exampleFormControlInput1">Link del video o archivo</label>
          <p>puedes subir link de videos o compartir documentos de google drive entre otros, eso si asegurate de que el documento este publico...</P>
          <input type="link" class="form-control"  name="link"id="exampleFormControlInput1" placeholder="Link">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Cursos</label>
          <select class="form-control" name="mataria" id="exampleFormControlSelect1">
            <option>MAT_021</option>
            <option>MAT_022</option>
            <option>MAT_023</option>
            <option>MAT_024</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripcion</label>
          <p>introduce a que contenido del ramo pertenece la materia..</p>
          <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="text-center">
            <input class="btn btn-primary" name="save_users" type="submit" value="enviar">
        </div>
</form> 
    </div>
    <!--tabla-->

    <?php if((!empty($_SESSION['nombre']))){ ?>
    <div class="container mt-4">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">eliminar</th>
            <th scope="col">Cursos</th>
            <th scope="col">Descricion</th>
            <th scope="col">Documento</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $query = "SELECT * FROM subidos_users";
              $result_tasks = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($result_tasks)){ ?>

          <tr>
            <td><a class="btn btn-danger" href="save_users.php?id=<?php echo $row['id']?>"><i class="far fa-trash-alt"></i></a></td>
            <td><?php echo $row['mataria'] ?></td>
            <td><?php echo $row['Descripcion'] ?></td>
            <td><a href=<?php echo $row['link'] ?> class="list-group-item list-group-item-action">link</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

      <?php } ?>


    </div>
   
    <!--integrantes del grupo -->
      <div class="container ">
          <h2 class="text-center">Contacto</h2>
            <div>
              <p class="text-center">Dudas o problemas con la plataforma comunicarse a la siguiente direccion de correo </p>
              <p class="text-center">nomechomath@gmail.com</p>
            </div>
      </div>


          <!-- Footer -->
      <footer class="page-footer font-small bg-info">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a href="index.html"> nomechomath.com</a>
          <a href="login.php">admin</a>
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