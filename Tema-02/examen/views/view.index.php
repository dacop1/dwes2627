<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen tema 2</title>
    
    <!-- css bootrstrap básico 5.3.8-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!--icons bootstrap básico 5.3.8 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"> 
  </head>
  <body>
    <!--Capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- Cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i> 
            <span class="fs-6">Examen tema 2</span>
        </header>

        <!-- Contenido principal de la aplicación -->
<main>

<div class="content">

    <form action="calcular.php" method="post">

        <div class="mb-3"   >
            <label for="velocidad_inicial">Velocidad inicial (m/s):</label>
            <input type="number" id="velocidad_inicial" name="velocidad_inicial" class="form-control" step="0.01">
        </div>

            <div >
                <label for="tiempo">Tiempo (s):</label>
                <input type="number" id="tiempo" name="tiempo" class="form-control" step="0.01">
            </div>

            <div >
                <label for="masa">Masa (kg):</label>
                <input type="number" id="masa" name="masa" class="form-control" step="0.01">
            </div>

            <div >
                <label for="aceleracion">Aceleración (m/s):</label>
                <input type="number" id="aceleracion" name="aceleracion" class="form-control" step="0.01">

            <button type="submit" class="btn btn-primary">
                Calcular
            </button>

        </form>

    </div>

</main>


        <!-- Pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy;2026
                    Daniel Copete - DWES -2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
  </body>
</html>