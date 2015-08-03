<?php
use TMO\Classes\Cliente\Types\ClienteFisica;
use TMO\Classes\Cliente\Types\ClienteJuridica;
use TMO\Classes\Util\Endereco;

$clientes1 = new ClienteFisica();
$clientes1->setNome('Thiago')
        ->setSobrenome('Mori de Oliveira')
        ->setCpf('123.456.789-00')
        ->setIdade(26)
        ->setEndereco(new Endereco('Rua Goias', 5014,'', 'Bragança Paulista','SP'))
        ->setTelefone('(11) 4033-65478')
        ->setClassificacao(5)
        ->setSexo('M');
//-----------------------------------------------------------------------//
$clientes2 = new ClienteFisica();
$clientes2->setNome('Sharon')
        ->setSobrenome('C. Frawley')
        ->setCpf('456.803.891-00')
        ->setIdade(40)
        ->setEndereco(new Endereco('Praça João Paulo', 1776, 'Centro' ,'Rio de Janeiro','RJ'))
        ->setTelefone('(13) 1439-7845')
        ->setClassificacao(4)
        ->setSexo('F');
//-----------------------------------------------------------------------//
$clientes3 = new ClienteFisica();
$clientes3->setNome('Bianca')
        ->setSobrenome('Souza Cardoso')
        ->setCpf('169.823.653-01')
        ->setIdade(55)
        ->setEndereco(new Endereco('Rua José Valadares', 1014,'', 'Salvador','BA'))
        ->setTelefone('(49) 3571-1598')
        ->setClassificacao(2)
        ->setSexo('F');
//-----------------------------------------------------------------------//
$clientes4 = new ClienteFisica();
$clientes4->setNome('Pedro')
        ->setSobrenome('Rodrigues Barbosa')
        ->setCpf('169.823.653-01')
        ->setIdade(20)
        ->setEndereco(new Endereco('Rua Beatriz Pacheco Pompeo de Camargo', 912, '','Campinas','SP'))
        ->setTelefone('(19) 3102-5539')
        ->setClassificacao(4)
        ->setSexo('M');
//-----------------------------------------------------------------------//
$clientes5 = new ClienteFisica();
$clientes5->setNome('Estevan')
        ->setSobrenome('Alves Cunha')
        ->setCpf('621.932.869-81')
        ->setIdade(38)
        ->setEndereco(new Endereco('Rua Arábia', 940,'','Igarassu','PE'))
        ->setTelefone('(81) 2801-5344')
        ->setClassificacao(1)
        ->setSexo('M');
//-----------------------------------------------------------------------//
$clientes6 = new ClienteFisica();
$clientes6->setNome('Luana')
        ->setSobrenome('Barbosa Barros')
        ->setCpf('363.048.547-22')
        ->setIdade(27)
        ->setEndereco(new Endereco('Rua Guilherme Roeder Filho', 1804,'','Joinville','SC'))
        ->setTelefone('(47) 4488-4856')
        ->setClassificacao(2)
        ->setSexo('F');

$clientes6J = new ClienteJuridica();
$clientes6J->setRazao('Barbosa Barros ME')
        ->setFantasia('Barbosa & Cia')
        ->setCnpj('05.363.048/0001-22')
        ->setInscricao('isenta')
        ->setEndereco(new Endereco('Rua Guilherme Roeder Filho', 1804,'','Joinville','SC'))
        ->setTelefone('(47) 4488-4856')
        ->setClassificacao(2)
        ->setResponsavelId(5)
        ->setEnderecoCobranca(new Endereco('Rua Guilherme Roeder Filho', 1864,'','Joinville','SC'));

//-----------------------------------------------------------------------//
$clientes7 = new ClienteFisica();
$clientes7->setNome('Beatriz')
        ->setSobrenome('Castro Barros')
        ->setCpf('827.999.898-53')
        ->setIdade(55)
        ->setEndereco(new Endereco('Rua K', 1866,'', 'Barra Mansa','RJ'))
        ->setTelefone('(24) 6316-9489')
        ->setClassificacao(5)
        ->setSexo('F');
//-----------------------------------------------------------------------//
$clientes8 = new ClienteFisica();
$clientes8->setNome('Kauan')
        ->setSobrenome('Pinto Rodrigues')
        ->setCpf('599.791.628-64')
        ->setIdade(23)
        ->setEndereco(new Endereco('Rua Armando Maritan', 346, '','Mogi das Cruzes','SP'))
        ->setTelefone('(11) 2270-8294')
        ->setClassificacao(4)
        ->setSexo('M');
//-----------------------------------------------------------------------//
$clientes9 = new ClienteFisica();
$clientes9->setNome('Luan')
        ->setSobrenome('Alves Correia')
        ->setCpf('352.277.826-01')
        ->setIdade(59)
        ->setEndereco(new Endereco('Rua Vinte e Três', 1361,'', 'Praia Grande','SP'))
        ->setTelefone('(13) 4225-4674')
        ->setClassificacao(2)
        ->setSexo('M');
//-----------------------------------------------------------------------//
$clientes10 = new ClienteFisica();
$clientes10->setNome('Daniel')
        ->setSobrenome('Costa Cavalcanti')
        ->setCpf('392.204.206-60')
        ->setIdade(36)
        ->setEndereco(new Endereco('Rua Itu', 882,'', 'Goiânia','GO'))
        ->setTelefone('(62) 9290-7591')
        ->setClassificacao(3)
        ->setSexo('M');
$clientes10J = new ClienteJuridica();
$clientes10J->setRazao('Daniel Costa ME')
        ->setFantasia('Costa Empreendimentos')
        ->setCnpj('03.392.204/0001-60')
        ->setInscricao(36459)
        ->setEndereco(new Endereco('Rua Uberaba', 1082,'', 'Goiânia','GO'))
        ->setTelefone('(62) 9290-7591')
        ->setClassificacao(3)
        ->setResponsavelId(10);
//-----------------------------------------------------------------------//

class Dados{

    public $array_cliente;

    public function __construct($dados)
    {
        foreach($dados as $dado){
            $this->create($dado);
        }
    }

    public function create($dados)
    {
        $this->array_cliente[] = $dados;
        return $this;
    }

    public function find($id)
    {
            return $this->array_cliente[$id];
    }

    public function all()
    {
        return $this->array_cliente;
    }
}
global $array_clientes;
$array_clientes = new Dados([$clientes1,$clientes2, $clientes3, $clientes4, $clientes5, $clientes6, $clientes6J, $clientes7, $clientes8, $clientes9, $clientes10, $clientes10J]);
