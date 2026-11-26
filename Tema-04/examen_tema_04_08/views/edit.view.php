<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Libro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-3">

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-book"></i>
            <span class="fs-6">CRUD Libros - Editar Libro</span>
        </header>

        <main>

            <div class="content">

                <legend>Formulario Edición Libro</legend>

                <form action="update.php?id=<?= $id ?>" method="post">

                    <!-- Título -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>

                        <input
                            type="text"
                            class="form-control"
                            id="titulo"
                            name="titulo"
                            value="<?= $libro->titulo ?>"
                            required>
                    </div>

                    <!-- Fecha publicación -->
                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">
                            Fecha publicación:
                        </label>

                        <input
                            type="date"
                            class="form-control"
                            id="fecha_publicacion"
                            name="fecha_publicacion"
                            value="<?= $libro->fecha_publicacion ?>"
                            required>
                    </div>

                    <!-- Autor -->
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>

                        <input
                            type="text"
                            class="form-control"
                            id="autor"
                            name="autor"
                            value="<?= $libro->autor ?>"
                            required>
                    </div>

                    <!-- Categoría -->
                    <div class="mb-3">

                        <label class="form-label">Categoría:</label>

                        <select name="categoria" class="form-select">

                            <?php foreach($categorias as $indice => $categoria): ?>

                                <option
                                    value="<?= $indice ?>"
                                    <?= ($libro->categoria == $indice) ? 'selected' : '' ?>>

                                    <?= $categoria ?>

                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <!-- Etiquetas -->
                    <div class="mb-3">

                        <label class="form-label">Etiquetas:</label>

                        <?php foreach($etiquetas as $indice => $etiqueta): ?>

                            <div class="form-check">

                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="etiqueta_<?= $indice ?>"
                                    name="etiquetas[]"
                                    value="<?= $indice ?>"
                                    <?= in_array($indice, $libro->etiquetas) ? 'checked' : '' ?>>

                                <label
                                    class="form-check-label"
                                    for="etiqueta_<?= $indice ?>">

                                    <?= $etiqueta ?>

                                </label>

                            </div>

                        <?php endforeach; ?>

                    </div>

                    <!-- Número páginas -->
                    <div class="mb-3">

                        <label for="numero_paginas" class="form-label">
                            Número de páginas:
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            id="numero_paginas"
                            name="numero_paginas"
                            value="<?= $libro->numero_paginas ?>">
                    </div>

                    <!-- Stock -->
                    <div class="mb-3">

                        <label for="stock" class="form-label">
                            Stock:
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            id="stock"
                            name="stock"
                            value="<?= $libro->stock ?>">
                    </div>

                    <!-- Precio -->
                    <div class="mb-3">

                        <label for="precio" class="form-label">
                            Precio:
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            class="form-control"
                            id="precio"
                            name="precio"
                            value="<?= $libro->precio ?>">
                    </div>

                    <div class="btn-group">

                        <a href="index.php" class="btn btn-danger">
                            Cancelar
                        </a>

                        <button type="reset" class="btn btn-warning">
                            Borrar
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Actualizar Libro
                        </button>

                    </div>

                </form>

            </div>

        </main>

        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">
                     2026 Daniel Copete Jiménez - DWES - 2º DAW
                </span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script>

    </div>

</body>

</html>