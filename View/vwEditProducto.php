<!DOCTYPE html>
<html>
<head>
    <title>Alm. Físico</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Resources/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Resources/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="Resources/js/jquery-ui/jquery-ui.min.css"/>
    <link rel="stylesheet" href="Resources/css/style.css"/>

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
<h1 class="page-header">
    <?php echo $prod->id != null ? $prod->nombre : 'Nuevo Registro'; ?>
</h1>

<div class="row">
    <div class="col-xs-12">
        <hr/>
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
