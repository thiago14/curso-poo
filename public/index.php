<?php
use TMO\Classes\Pessoas\Types\PessoaFisica;

include_once 'topo.php';

$con = new \TMO\Connection\BancoPDO();
$sql = new \TMO\Connection\Sql($con->getCon());
$array_clientes = $sql->all();

echo '<pre>';
print_r($array_clientes);
echo '</pre>';

?>
    <div class="bs-callout bs-callout-info">
        <h1>Lista de Clientes</h1>
    </div>
    <br>
    <table id="clientes" class="table table-bordered table-hover">
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
                <td><a href="/ProjetoPOO/?id=<?php echo $key ?>"><?php echo $key; ?></a></td>
                <td><a href="/ProjetoPOO/?id=<?php echo $key ?>"><?php echo $nome; ?></a></td>
                <td><a href="/ProjetoPOO/?id=<?php echo $key ?>"><?php echo $sobrenome; ?></a></td>
                <td><a href="/ProjetoPOO/?id=<?php echo $key ?>"><?php echo $tipo_pessoa; ?></a></td>
                <td><?php echo $cliente->getClassificacao(); ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?php include_once 'rodape.php';