<?php
include '../controlador/conexion.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Araiza Hoteles</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <img src="../assets/images/logos/logo-n.png" width="200">&nbsp;&nbsp;&nbsp;
      <h3>Junta de Empleados</h3>
    </a>
  </header>

  <main>
    <h5>Registro de Asistentes</h5>
    <form action="../controlador/registrar.php" method="post" class="d-flex align-items-center">
  <div class="mb-3 me-3">
    <label>Número de Empleado</label>
    <select class="form-select" name="num">
  <option selected disabled>- Seleccione Empleado -</option>


    <?php
    $sql_empleados = "SELECT usuario, CONCAT(nombres,' ',apellidoPaterno) AS Nombre FROM usuario WHERE cveLocal IN (0,1) ORDER BY nombres ASC ";
    $empleados = $conn->query($sql_empleados);
    $cont = 0;
    if ($empleados->num_rows > 0) {
        while ($empleado = $empleados->fetch_assoc()) { ?>
  <option value="<?php echo $empleado['usuario'];?>"><?php echo $empleado['usuario'] ." - ". $empleado['Nombre'];?></option>
         <?php
        }}
  ?>


</select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


    <hr class="col-12 col-md-12 mb-5">

    <div class="row g-5">
    <table class="table table-bordered hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Num. Empleado</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>

  
  <?php
    $sql = "SELECT asistentes.id AS id,CONCAT(usuario.nombres,' ',usuario.apellidoPaterno) AS Nombre,usuario.usuario AS Numemple FROM `asistentes` INNER JOIN usuario ON usuario.usuario=num_empleado ORDER BY asistentes.id ASC ";
    $result = $conn->query($sql);
    $cont = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '
           <tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$row['Numemple'].'</td>
      <td>'.$row['Nombre'].'</td>
    </tr>
          ';
        }}
?>
  </tbody>
</table>
    </div>
  </main>
  <footer class="pt-5 my-5 text-muted border-top">
   Araiza Hoteles
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>
