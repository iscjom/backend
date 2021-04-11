<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Resources/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Resources/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="Resources/js/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="Resources/css/style.css" />

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
<h1 class="page-header text-center">Productos </h1>
<div class="well well-sm text-center">
    <a class="btn btn-primary" href="?c=ProductosControl&a=fisica">Tienda Física</a>
    <a class="btn btn-primary" href="?c=ProductosControl&a=virtual">Tienda Virtual</a>
</div>

<table class="table table-striped">
    <thead>
    <th>SKU</th>
    <th>Descripcion</th>
    <th>Color</th>
    <th>Marca</th>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $p): ?>
        <tr>
            <td><?php echo $p->sku; ?></td>
            <td><?php echo $p->descripcion; ?></td>
            <td><?php echo $p->color; ?></td>
            <td><?php echo $p->marca; ?></td>
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