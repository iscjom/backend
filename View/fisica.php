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
    <a class="btn btn-primary" href="?c=fisica&a=index">Nuevo Producto</a>
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
            <td><?php echo $p->color; ?></td>
            <td><?php echo $p->marca; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>