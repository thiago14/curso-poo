<?php

namespace TMO\Classes\Cliente;

use TMO\Classes\Cliente\Types\ClienteFisica;
use TMO\Classes\Cliente\Types\ClienteJuridica;
use TMO\Classes\Util\Endereco;
use TMO\Connection\BancoPDO;
use TMO\Connection\Sql;

class ClienteDb {

    public static function listar()
    {
        $con = new BancoPDO();
        $sql = new Sql($con->getCon());
        $clientes_db = $sql->all();
        $clientes = self::clientObj($clientes_db);
        return $clientes;
    }

    public static function find($id)
    {
        $con = new BancoPDO();
        $sql = new Sql($con->getCon());
        $cliente_db = $sql->find($id);
        $cliente = self::clientObj($cliente_db);
        return $cliente[0];
    }

    public static function clientObj($clientes)
    {
        $array_clientes = [];
        foreach($clientes['cliente'] as $cliente){
            if(!empty($cliente->cpf)){
                $ci = new ClienteFisica();
                $ci->setNome($cliente->nome)
                   ->setSobrenome($cliente->sobrenome)
                   ->setIdade($cliente->idade)
                   ->setSexo($cliente->sexo)
                   ->setCpf($cliente->cpf);
            }else{
                $ci = new ClienteJuridica();
                $ci->setRazao($cliente->razao)
                   ->setFantasia($cliente->fantasia)
                   ->setCnpj($cliente->cnpj)
                   ->setInscricao($cliente->inscricao)
                   ->setResponsavelId($cliente->responsavel_id);
            }
            $ci->setId($cliente->id)
               ->setTelefone($cliente->telefone)
               ->setClassificacao($cliente->classificacao);
            if(!empty($clientes['endereco'])){
                foreach($clientes['endereco'] as $endereco){
                    $ci->setEndereco(new Endereco($endereco->logradouro,$endereco->numero,$endereco->bairro,$endereco->cidade, $endereco->estado, $endereco->cep,$endereco->cobranca));
                }
            }
            $array_clientes[] = $ci;
        }

        return $array_clientes;
    }
}
