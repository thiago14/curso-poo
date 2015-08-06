<?php

use TMO\Classes\Pessoas\Types\PessoaFisica;
use TMO\Classes\Pessoas\Types\PessoaJuridica;

if (empty($id) && $id != 0) { ?>
    <div class="bs-callout bs-callout-danger">
        <h1>Ops! Faltou o ID do cliente.</h1>
        <h2>Tente novamente clicando em um cliente na p&aacute;gina anterior.</h2>
    </div>
    <br/><a href="/ProjetoPOO" class="btn btn-primary">Voltar para Home</a>

<?php } else {
    ?>
    <div class="bs-callout bs-callout-info">
        <?php $title = ($array_clientes->find($id) instanceof PessoaFisica) ? $array_clientes->find($id)->getNome() : $array_clientes->find($id)->getRazao(); ?>
        <h1>Cliente ID: <?php echo $id . ' - ' . $title ; ?></h1>
    </div>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <colgroup>
            <col width="30%"><col width="70%">
        </colgroup>
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $clienteAll = $array_clientes->find($id)->getAll();
        foreach ($clienteAll as $key => $value):
            if(!is_array($value)):
        ?>
            <tr>
                <td><?php echo ucfirst($key); ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endif;
        endforeach; ?>
        </tbody>
    </table>
    <?php if($array_clientes->find($id) instanceof PessoaJuridica): ?>
        <h3>Respons&aacute;vel</h3>
    <table class="table table-bordered table-hover table-striped">
        <colgroup>
            <col width="30%"><col width="70%">
        </colgroup>
        <thead>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($clienteAll['responsavel'] as $k => $val) : ?>
            <tr>
                <td><?php echo ucfirst($k); ?></td>
                <td><?php echo $val; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <a href="/ProjetoPOO" class="btn btn-primary">Voltar para Home</a>
    <?php
}
include_once 'rodape.php';