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

    <! -- contenido principal de la aplicacion -- >
      <main>
    <div class="content">

        <form action="update.php?indice=<?= $indice ?>" method="POST">

            <h1>Formulario Editar Película</h1>

            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text"
                       class="form-control"
                       id="titulo"
                       name="titulo"
                       value="<?= $pelicula['titulo'] ?>"
                       required>
            </div>

            <div class="mb-3">
                <label for="idioma" class="form-label">Idioma</label>
                <input type="text"
                       class="form-control"
                       id="idioma"
                       name="idioma"
                       value="<?= $pelicula['idioma'] ?>"
                       required>
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text"
                       class="form-control"
                       id="director"
                       name="director"
                       value="<?= $pelicula['director'] ?>"
                       required>
            </div>

            <div class="mb-3">
                <label for="generos" class="form-label">Géneros</label>
                <input type="text"
                       class="form-control"
                       id="generos"
                       name="generos"
                       value="<?= $pelicula['generos'] ?>"
                       required>
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">Año</label>
                <input type="number"
                       class="form-control"
                       id="año"
                       name="año"
                       value="<?= $pelicula['año'] ?>"
                       required>
            </div>

            <div class="mb-3">
                <label for="duracion" class="form-label">Duración</label>
                <input type="number"
                       class="form-control"
                       id="duracion"
                       name="duracion"
                       value="<?= $pelicula['duracion'] ?>"
                       required>
            </div>

            <div class="mb-3">
                <label for="recaudado" class="form-label">Recaudación</label>
                <input type="text"
                       class="form-control"
                       id="recaudado"
                       name="recaudado"
                       value="<?= $pelicula['recaudado'] ?>"
                       required>
            </div>

            <a href="index.php" class="btn-solid theme-secondary" role="button">
                Cancelar
            </a>

            <button type="reset" class="btn-solid theme-danger">
                Reset
            </button>

            <button type="submit" class="btn-solid theme-primary">
                Actualizar
            </button>

        </form>

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