<?php
require_once 'dados/dados_clientes.php';
$orderID = $orderNome = 'DESC';
$class_link_id = $class_link_nome = 'bottom';

if (!empty($_GET)) {
    if (isset($_GET['order']) && $_GET['order'] == 'DESC') {
        if ($_GET['by'] == 'ID') {
            $orderID = 'ASC';
            $class_link_id = 'top';
            krsort($array_clientes);
        }
        if ($_GET['by'] == 'nome') {
            $orderNome = 'ASC';
            $class_link_nome = 'top';
            asort($array_clientes);
        }
    }else{
        if ($_GET['by'] == 'ID') {
            ksort($array_clientes);
        }
        if ($_GET['by'] == 'nome') {
            arsort($array_clientes);
        }
    }
}


?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso Code Education | POO</title>
    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Projeto POO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/">Clientes</a></li>
                <li><a href="/">Contato</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>


<div class="container">

    <table class="table table-bordered table-hover">
        <tr>
            <th><a href="?order=<?php echo $orderID; ?>&by=ID">ID <i
                        class="glyphicon glyphicon-triangle-<?php echo $class_link_id ?>"></i></a></th>
            <th><a href="?order=<?php echo $orderNome; ?>&by=nome">Nome <i
                        class="glyphicon glyphicon-triangle-<?php echo $class_link_nome ?>"></i></a></th>
            <th><a href="?order=<?php echo $orderSobrenome; ?>&by=sobrenome">Sobrenome <i
                        class="glyphicon glyphicon-triangle-<?php echo $class_link_sobre ?>"></i></a></th>
        </tr>
        <?php foreach ($array_clientes as $key => $cliente): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $cliente->getNome(); ?></td>
                <td><?php echo $cliente->getSobrenome(); ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</div>
<!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
