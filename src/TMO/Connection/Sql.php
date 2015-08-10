<?php

namespace TMO\Connection;

use TMO\Classes\Cliente\Types\ClienteJuridica;
use TMO\Classes\Pessoas\PessoaAbstract;

class Sql
{
    protected $clientes;
    protected $pdo;
    protected $query;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function persist(PessoaAbstract $clientAbstract){
        $this->clientes[] = $clientAbstract;
        return $this;
    }

    public function getPersist(){
        return $this->clientes;
    }

    public function flush(){
        foreach($this->clientes as $cliente){
            if($cliente instanceof ClienteJuridica){
                $this->query = $this->pdo->prepare("INSERT INTO poo_clientes (classificacao, telefone, razao, fantasia, cnpj, inscricao, responsavel_id)
                                                    VALUES (:classificacao, :telefone, :razao, :fantasia, :cnpj, :inscricao, :responsavel_id)");
                $this->query->bindParam(":razao", $cliente->getRazao());
                $this->query->bindParam(":fantasia", $cliente->getFantasia());
                $this->query->bindParam(":cnpj", $cliente->getCnpj());
                $this->query->bindParam(":inscricao", $cliente->getInscricao());
                $this->query->bindParam(":responsavel_id", $cliente->getResponsavelId());
            }else{
                $this->query = $this->pdo->prepare("INSERT INTO poo_clientes (classificacao, telefone, nome, sobrenome, cpf, idade, sexo)
                                                    VALUES (:classificacao, :telefone, :nome, :sobrenome, :cpf, :idade, :sexo)");
                $this->query->bindParam(":nome", $cliente->getNome());
                $this->query->bindParam(":sobrenome", $cliente->getSobrenome());
                $this->query->bindParam(":cpf", $cliente->getCpf());
                $this->query->bindParam(":idade", $cliente->getIdade());
                $this->query->bindParam(":sexo", $cliente->getSexo());
            }

            $this->query->bindParam(":classificacao", $cliente->getClassificacao());
            $this->query->bindParam(":telefone", $cliente->getTelefone());

            $this->query->execute();

            $cliente_id = $this->pdo->lastInsertId();

            if(!empty($cliente->getEndereco())){
                foreach($cliente->getEndereco() as $endereco){
                    $this->query = $this->pdo->prepare("INSERT INTO poo_enderecos (cliente_id, logradouro, cidade, bairro, numero, estado, cep, cobranca)
                                                        VALUES (:cliente_id, :logradouro, :cidade, :bairro, :numero, :estado, :cep, :cobranca)");
                    $this->query->bindParam(":cliente_id", $cliente_id);
                    $this->query->bindParam(":logradouro", $endereco->getLogradouro());
                    $this->query->bindParam(":bairro", $endereco->getBairro());
                    $this->query->bindParam(":cidade", $endereco->getCidade());
                    $this->query->bindParam(":numero", $endereco->getNumero());
                    $this->query->bindParam(":estado", $endereco->getEstado());
                    $this->query->bindParam(":cep", $endereco->getCep());
                    $this->query->bindParam(":cobranca", $endereco->getCobranca());

                    $this->query->execute();
                }
            }
        }
    }

    public function all(){
        $this->query = $this->pdo->prepare("SELECT * FROM poo_clientes");
        $this->query->execute();
        $clientes['cliente'] = $this->query->fetchAll(\PDO::FETCH_OBJ);

        return $clientes;
    }

    public function find($id){
        $this->query = $this->pdo->prepare("SELECT * FROM `poo_clientes` WHERE id = :id");
        $this->query->bindParam(':id', $id);
        $this->query->execute();
        $array['cliente'] = $this->query->fetchAll(\PDO::FETCH_OBJ);
        $this->query = $this->pdo->prepare("SELECT * FROM `poo_enderecos` WHERE cliente_id = :id");
        $this->query->bindParam(':id', $id);
        $this->query->execute();
        $array['endereco'] = $this->query->fetchAll(\PDO::FETCH_OBJ);

        return $array;
    }

}