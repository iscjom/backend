<!DOCTYPE html>
<html>
<head>
    <title>Alm. Físico</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Resources/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Resources/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="Resources/js/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="Resources/css/style.css" />

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
<h1 class="page-header text-center">Almacenes físicos </h1>
<div class="well well-sm text-center">
    <a class="btn btn-primary" href="?c=tfisica&a=nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
    <th>SKU</th>
    <th>Descripcion</th>
    <th>Marca</th>
    <th>Existencias</th>
    <th>Almacen</th>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $p): ?>
        <tr>
            <td><?php echo $p->sku; ?></td>
            <td><?php echo $p->descripcion; ?></td>
            <td><?php echo $p->marca; ?></td>
            <td><?php echo $p->existencias; ?></td>
            <td><?php echo $p->nombre; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=tfisica&a=edit&id=<?php echo $p->id; ?>"> Editar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="row">
    <div class="col-xs-12">
        <hr />
        <footer class="text-center well">
            <p>Backend | Juan Manuel Olguin Medina | iscjom@gmail.com</a></p>
        </footer>
    </div>
</div>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/js/ini.js"></script>
<script src="assets/js/jquery.anexsoft-validator.js"></script>
</body>
</html>