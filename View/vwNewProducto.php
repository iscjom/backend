<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Producto</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Resources/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Resources/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="Resources/js/jquery-ui/jquery-ui.min.css"/>
    <link rel="stylesheet" href="Resources/css/style.css"/>

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="page-header">Nuevo producto</h1>
    <form method="post" action="?c=guardar">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">Producto:</div>
            <div class="col-md-3">
                <select name="cmbProducto" id="cmbProducto">
                    <?php foreach ($this->model->listarProducto() as $p): ?>
                    <option value="<?php echo $p->id ?>"><?php echo $p->descripcion ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">Almacen:</div>
            <div class="col-md-3">
                <select name="cmbAlmacen" id="cmbAlmacen">
                    <?php foreach ($this->model->listarAlmacen() as $alm): ?>
                        <option value="<?php echo $alm->id ?>"><?php echo $alm->nombre ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">Existencias:</div>
            <div class="col-md-3">
                <input type="number" name="txtExistencias">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="submit" name="btnGuardar" value="Salvar">
            </div>
        </div>
    </form>
</div>


<div class="row">
    <div class="col-xs-12">
        <hr/>
        <footer class="text-center well">
            <p>Backend | Juan Manuel Olguin Medina | iscjom@gmail.com</a></p>
        </footer>
    </div>
</div>
</body>
</html>


