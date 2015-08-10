<?php
use TMO\Classes\Cliente\ClienteDb;
use TMO\Classes\Pessoas\Types\PessoaFisica;

include_once 'topo.php';

$array_clientes = ClienteDb::listar();

?>
    <div class="bs-callout bs-callout-info">
        <h1>Lista de Clientes</h1>
    </div>
    <br>
    <table id="clientes" class="table table-bordered table-hover table-sorter">
        <thead>
            <tr>
                <th id="sl">ID</th>
                <th id="nm">Nome/Raz&atilde;o</th>
                <th>Sobrenome/Nome Fantasia</th>
                <th>Tipo Cliente</th>
                <th>Classifica&ccedil;&atilde;o</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($array_clientes as $key => $cliente): ?>
            <?php
                if($cliente instanceof PessoaFisica){
                    $tipo_pessoa = 'Pessoa F&iacute;sica';
                    $nome = $cliente->getNome();
                    $sobrenome = $cliente->getSobrenome();
                }else {
                    $tipo_pessoa = 'Pessoa Jur&iacute;dica';
                    $nome = $cliente->getRazao();
                    $sobrenome = $cliente->getFantasia();
                }
            ?>
            <tr>
                <td><a href="/ProjetoPOO/?id=<?php echo $cliente->getId() ?>"><?php echo $cliente->getId(); ?></a></td>
                <td><a href="/ProjetoPOO/?id=<?php echo $cliente->getId() ?>"><?php echo $nome; ?></a></td>
                <td><a href="/ProjetoPOO/?id=<?php echo $cliente->getId() ?>"><?php echo $sobrenome; ?></a></td>
                <td><a href="/ProjetoPOO/?id=<?php echo $cliente->getId() ?>"><?php echo $tipo_pessoa; ?></a></td>
                <td><?php echo $cliente->getClassificacaoFormatada(); ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?php include_once 'rodape.php';