<h1 class="page-header" align="center">Productos </h1>
<div class="well well-sm text-center">
    <a class="btn btn-primary" href="?c=Productos&a=Crud">Tienda Física</a>
    <a class="btn btn-primary" href="?c=Productos&a=Crud">Tienda Virtual</a>
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
