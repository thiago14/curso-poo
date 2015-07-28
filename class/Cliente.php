<?php

class Cliente
{
    private $nome;
    private $sobrenome;
    private $cpf;
    private $endereco;
    private $idade;
    private $telefone;
    private $sexo;

    public function __construct($sexo = "M")
    {
        $this->setSexo($sexo);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = utf8_encode($nome);
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = utf8_encode($sobrenome);
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = utf8_encode($endereco);
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getAll()
    {
        $array['cpf'] = $this->cpf;
        $array['nome'] = $this->nome;
        $array['sobrenome'] = $this->sobrenome;
        $array['cpf'] = $this->cpf;
        $array['endereco'] = $this->endereco;
        $array['idade'] = $this->idade;
        $array['telefone'] = $this->telefone;
        $array['sexo'] = $this->sexo;

        return $array;
    }
}