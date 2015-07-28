<?php
require_once 'dados/dados_clientes.php';
$orderID = $orderNome = 'DESC';
$class_link_id = $class_link_nome = 'bottom';

if (!empty($_GET)) {
    $order = filter_input(INPUT_GET, 'order', FILTER_SANITIZE_STRING);
    $by = filter_input(INPUT_GET, 'by', FILTER_SANITIZE_STRING);
    if (isset($order) && $order == 'DESC') {
        if ($by == 'ID') {
            $orderID = 'ASC';
            $class_link_id = 'top';
            krsort($array_clientes);
        }
        if ($by == 'nome') {
            $orderNome = 'ASC';
            $class_link_nome = 'top';
            asort($array_clientes);
        }
    }else{
        if ($by == 'ID') {
            ksort($array_clientes);
        }
        if ($by == 'nome') {
            arsort($array_clientes);
        }
    }
}

include_once 'topo.php';
?>
    <div class="bs-callout bs-callout-info">
        <h1>Lista de Clientes</h1>
    </div>
    <br>
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
                <td><a href="/ProjetoPOO/cliente.php?id=<?php echo $key ?>"><?php echo $key; ?></a></td>
                <td><a href="/ProjetoPOO/cliente.php?id=<?php echo $key ?>"><?php echo $cliente->getNome(); ?></a></td>
                <td><a href="/ProjetoPOO/cliente.php?id=<?php echo $key ?>"><?php echo $cliente->getSobrenome(); ?></a></td>
            </tr>
        <?php endforeach ?>
    </table>
<?php include_once 'rodape.php';