<?php

require_once 'dados/dados_clientes.php';
include_once 'topo.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (empty($id)) { ?>
    <div class="bs-callout bs-callout-danger">
        <h1>Ops! Faltou o ID do cliente.</h1>
        <h2>Tente novamente clicando em um cliente na p&aacute;gina anterior.</h2>
    </div>
    <br/><a href="/ProjetoPOO" class="btn btn-primary">Voltar para Home</a>

<?php } else {
    ?>
    <div class="bs-callout bs-callout-info">
        <h1>Cliente ID: <?php echo $id . ' - ' . $array_clientes[$id]->getNome(); ?></h1>
    </div>
    <br>
    <table class="table table-bordered">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <?php
        $clienteAll = $array_clientes[$id]->getAll();
        foreach ($clienteAll as $key => $value):
            ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="/ProjetoPOO" class="btn btn-primary">Voltar para Home</a>
    <?php
}
include_once 'rodape.php';