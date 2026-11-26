<!doctype html>
<html lang="es">

<head>
    <!-- head -->
    <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
</head>

<body>
    <div class="container mt-3">

        <!-- header -->

        <head>
            <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>

        <main>
            <div class="content">
                <legend>Formulario Nuevo Libro</legend>

                <form action="create.php" method="post">
                    <!-- titulo -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo" required>
                    </div>
                    <!-- fecha publicacion -->
                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de publicación:</label>
                        <input type="date" class="form-control" id="fecha_publicacion" required>
                    </div>
                    <!-- autor -->
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" id="autor" required>
                    </div>
                    <!-- Categoria -->
                    <!-- Genera dinámicamente el select de categorías a partir del array $categorias -->
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría:</label>
                        <div class="mb-3">

                            <label for="categoria" class="form-label">
                                Categoría:
                            </label>

                            <select name="categoria" id="categoria" class="form-select">

                                <?php foreach ($categorias as $indice => $categoria): ?>

                                    <option value="<?= $indice ?>">
                                        <?= $categoria ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>
                        <div class="menu">
                            <!-- lista dinámica de categorías -->

                        </div>
                    </div>
                    <!-- etiquetas -->
                    <div class="mb-3">
                        <label class="form-label">Etiquetas:</label>
                        <!-- lista dinámica de etiquetas -->
                    </div>
                    <!-- numero_paginas -->
                    <div class="mb-3">
                        <label for="numero_paginas" class="form-label">Número de páginas:</label>
                        <input type="number" min="1" step="1" class="form-control" id="numero_paginas" required>
                    </div>
                    <!-- stock -->
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" min="0" step="1" class="form-control" id="stock" required>
                    </div>
                    <!-- precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="precio" required>
                    </div>
                    <br>
                    <div class="btn-group" role="group">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Guardar Libro</button>
                    </div>
                </form>
            </div>
        </main>

        <!-- footer y js_bootstrap -->
    </div>
</body>

</html>