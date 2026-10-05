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
            <i class="bi bi-calculator"></i> 
            <span class="fs-6">Proyecto 2.1- Calculadora</span>
        </header>

        <!-- Contenido principal de la aplicación -->
        <main>
            <div class="content">

            <!-- Formulario de la calculadora -->
             <form method="post">
                <div class="mb-3">
                    <label for="Valor1" class="form-label">Valor 1:</label>
                    <input type="number" step="any" class="form-control" step="0.01" placeholder="0.00" id="Valor1" name="Valor1" required>
             

                          
                <div class="mb-3">
                    <label for="Valor2" class="form-label">Valor 2:</label>
                    <input type="number" step="any" class="form-control" step="0.01" placeholder="0.00" id="Valor2" name="Valor2" required>

                 <div class="btn-group" role="group"></div>
                        <button type="reset" class="btn btn-danger">Borrar</button>
                        <button type="submit" class="btn btn-primary" name="operacion" value="suma" formaction="sumar.php">Sumar</button>
                        <button type="submit" class="btn btn-primary" name="operacion" value="resta" formaction="restar.php">Restar</button>
                        <button type="submit" class="btn btn-primary" name="operacion" value="multiplicacion" formaction="multiplicar.php">Multiplicar</button>
                  </div>
             </form>
             
             <!-- botones de accción -->


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