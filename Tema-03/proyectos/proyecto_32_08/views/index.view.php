<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>

  <!-- css bootstrap basico 6.0 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


  <!-- icons bootstrap basico 5.3.8 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">

</head>

<body>
  <!-- capa principal de la aplicacion -->
  <div class="container mt-3">

    <header class="bg-primary text-white p-3 mb-3">
      <i class="bi bi-stack"></i>
      <span class="fs-6">Titulo de la aplicación</span>
    </header>

    <! -- contenido principal de la aplicacion -->
      <main>
        <div class="content">


          <legend>Tabla de libros</legend>
<!-- Aqui es para mostrar los articulos en pantalla  -->
          <table class="table">

          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col" class="text-end"></th>
            </tr>
          </thead>
            <tbody>
              <?php foreach ($articulos as $articulo): ?>
                <tr>
                  <th scope="row" class="text-end"><?= $articulo['id'] ?></th>
                  <td><?= $articulo['descripcion'] ?></td>
                  <td><?= $articulo['modelo'] ?></td>
                  <td><?= implode(', ', $articulo['categorias']) ?></td>
                  <td><?= $articulo['unidades'] ?></td>
                  <td><?= $articulo['precio'] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          </thead>



        </div>
      </main>


      <!-- Pie de página -->
      <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
          <span class="text-muted">&copy; 2026
            Daniel Copete Jiménez - DWES - 2º DAW - Curso 26/27
          </span>
        </div>
      </footer>

      <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

  </div>
</body>

</html>