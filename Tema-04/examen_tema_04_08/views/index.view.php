<!doctype html>
<html lang="es">

<head>
    <!-- Head layout -->
    <title>Proyecto 4.3 - CRUD Libros - POO Sin Encapsulamiento</title>
</head>

<body>
    <div class="container mt-3">

        <!-- header y menu layout -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


        <!-- icons bootstrap 1.13.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- menú principal de la aplicación -->
        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <main>
            <div class="content">
                <legend>Tabla de libros - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Publicación</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Etiquetas</th>
                            <th scope="col" class="text-end">Páginas</th>
                            <th scope="col" class="text-end">Stock</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Detalles libros -->
                        <?php foreach ($libros as $libro): ?>

                            <tr>

                                <td class="text-end">
                                    <?= $libro->id ?>
                                </td>

                                <td>
                                    <?= $libro->titulo ?>
                                </td>

                                <td>
                                    <?= $libro->fecha_publicacion ?>
                                </td>

                                <td>
                                    <?= $libro->autor ?>
                                </td>

                                <td>
                                    <?= $categorias[$libro->categoria] ?>
                                </td>

                                <td>
                                    <?= implode(', ', $tabla_libros->indice_etiquetas_a_nombres($libro->etiquetas)) ?>
                                </td>

                                <td class="text-end">
                                    <?= $libro->numero_paginas ?>
                                </td>

                                <td class="text-end">
                                    <?= $libro->stock ?>
                                </td>

                                <td class="text-end">
                                    <?= $libro->precio ?> €
                                </td>

                                <td>

                                    <a href="edit.php?id=<?= $libro->id ?>" class="btn btn-sm btn-primary">
                                        Editar
                                    </a>

                                    <a href="delete.php?id=<?= $libro->id ?>" class="btn btn-sm btn-danger">
                                        Borrar
                                    </a>

                                    <a href="show.php?id=<?= $libro->id ?>" class="btn btn-sm btn-info">
                                        Mostrar
                                    </a>

                                </td>

                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <!-- mostrar el total de libros en la tabla -->
                            <td colspan="9"><?= count($libros) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- Pie de página -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">
                     2026 Daniel Copete Jiménez - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>




    </div>
</body>

</html>