<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
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
            <span class="fs-6">Título de la aplicación</span>
        </header>

        <!-- Contenido principal de la aplicación -->
        <main>
            <div class="content">
                <table class="table table-sm">

             <tr>
                <td>Velocidad inicial (m/s):</td>
                <td><?= number_format($velocidad_inicial, 2, ',', '.'); ?></td>
                <td>m/s</td>
             </tr>

             <tr>
                <td>Aceleración (m/s2):</td>
                <td><?= number_format($aceleracion, 2, ',', '.'); ?></td>
                <td>m/s2</td>
            </tr>

            <tr>
               <td>Tiempo (s):</td>
               <td><?= number_format($tiempo, 2, ',', '.'); ?></td>
               <td>s</td>
            </tr>

            <tr>
              <td>Masa (kg):</td>
              <td><?= number_format($masa, 2, ',', '.'); ?></td>
              <td>kg</td>
            </tr>

            <tr>
                <td>Velocidad final (m/s):</td>
                <td><?= number_format($velocidadFinal, 2, ',', '.'); ?></td>
                <td>m/s</td>
             </tr>

            <tr>
                <td>Espacio recorrido (m):</td>
                <td><?= number_format($espacioRecorrido, 2, ',', '.'); ?></td>
                <td>m</td>
             </tr>

            <tr>
                <td>Fuerza neta (N):</td>
                <td><?= number_format($fuerzaNeta, 2, ',', '.'); ?></td>
                <td>N</td>
            </tr>

             <tr>
              <td>Energía cinética (J):</td>
                <td><?= number_format($energiaCinetica, 2, ',', '.'); ?></td>
                <td>J</td>
             </tr>     
                    

                </table>
            </div>

            <form action="index.php" method="post">
                <button type="submit" class="btn btn-primary">
                volver
                </button>
            </form>
           
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