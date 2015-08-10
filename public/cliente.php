<?php

use TMO\Classes\Cliente\ClienteDb;
use TMO\Classes\Cliente\Types\ClienteJuridica;
use TMO\Classes\Util\Endereco;

/**
 * @param $pessoa
 */
function table($pessoa)
{
    ?>
    <table class="table table-bordered table-hover table-striped">
    <colgroup>
        <col width="30%">
        <col width="70%">
    </colgroup>
    <thead>
    <tr>
        <th>Campo</th>
        <th>Valor</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($pessoa as $key => $value):
        if (!is_array($value)) {
            ?>
            <tr>
                <td><?php echo ucfirst($key); ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php } else {
            foreach ($value as $endereco) {
                if ($endereco instanceof Endereco) { ?>
                    <tr>
                        <td colspan="2">
                            <b><?php if ($endereco->getCobranca() == 1) {
                                    echo utf8_encode('Endereço Cobrança');
                                } else {
                                    echo utf8_encode('Endereço');
                                } ?>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td>Logradouro</td>
                        <td><?php echo utf8_encode($endereco->getLogradouro()); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo utf8_encode('Número');?></td>
                        <td><?php echo $endereco->getNumero(); ?></td>
                    </tr>
                    <tr>
                        <td>Bairro</td>
                        <td><?php echo utf8_encode($endereco->getBairro()); ?></td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td><?php echo utf8_encode($endereco->getCidade()); ?></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td><?php echo $endereco->getEstado(); ?></td>
                    </tr>
                    <tr>
                        <td>CEP</td>
                        <td><?php echo $endereco->getCep(); ?></td>
                    </tr>
                    <?php

                }
            }
        }
        endforeach; ?>
    </tbody>
    </table>
<?php
}

if (empty($id) && !is_numeric($id)) { ?>
    <div class="bs-callout bs-callout-danger">
        <h1>Ops! Faltou o ID do cliente.</h1>

        <h2>Tente novamente clicando em um cliente na p&aacute;gina anterior.</h2>
    </div>
    <br/><a href="/ProjetoPOO" class="btn btn-primary">Voltar para Home</a>

<?php } else {
    $cliente = ClienteDb::find($id);
    ?>
    <div class="bs-callout bs-callout-info">
        <?php $title = ($cliente instanceof ClienteJuridica) ? $cliente->getRazao() : $cliente->getNome(); ?>
        <h1>Cliente ID: <?php echo $id . ' - ' . $title; ?></h1>
    </div>
    <br>
    <?php
    $clienteAll = $cliente->getAll();
    table($clienteAll);
    if ($cliente instanceof ClienteJuridica): ?>
        <h3>Respons&aacute;vel</h3>
        <?php
        table($clienteAll['responsavel']);
    endif; ?>
    <a href="/ProjetoPOO" class="btn btn-primary">Voltar para Home</a>
    <?php
}
include_once 'rodape.php';