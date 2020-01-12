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



    
</head>
<body>
    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
          <div class="container">
            <a class="navbar-brand" href="index.html">nomechomath</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown p-1 px-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    cursos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="mate 021/mate 021.html">mate 021</a>
                    <a class="dropdown-item" href="mate 022/mate 022.html">mate 022</a>
                    <a class="dropdown-item" href="mate 023/mate 023.html">mate 023</a>
                    <a class="dropdown-item" href="mate 024/mate 024.html">mate 024</a>
                  </div>
                </li>
                <li class="nav-item p-1 px-3">
                  <a class="nav-link" href="subir archivo.html">Subir material</a>
                </li>
                <li class="nav-item p-1 pl-3">
                  <a class="nav-link" href="nosotros.html">nosotros</a>
                </li>
              </ul>
            </div>
          </div>
    </nav>


    <!--login -->
	
	<div class="error_reporting">
		<p>Datos incorrectos. Intenta de nuevo.</p>
	</div>
	
    <div class="container mt-4 text-center">
        <form method="POST" action="validador.php">
          <input id="email" type="email" placeholder="Email" required>
          <input id="password" type="password" placeholder="Contraseña" required>
          <input id="submit" type="submit" value="Acceder">
        </form>
      
 


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
          <a> nomechomath.com</a>
          <a href="login.html">admin</a>
          
          <div id="contenido"> 

          </div>
          
          
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->




    <script src="js/code.js"></script>
    <script src="js/fire.js"></script>
    <!--bootstrap 4 script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>