<?php

namespace TMO\Classes\Pessoas\Types;
use TMO\Classes\Pessoas\Pessoa;

class PessoaFisica extends Pessoa
{
    protected $sobrenome;
    protected $sexo;
    protected $cpf;
    protected $idade;

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAll()
    {
        $array['cpf'] = $this->getCpf();
        $array['nome'] = $this->getNome();
        $array['sobrenome'] = $this->getSobrenome();
        $array['endereco'] = $this->getEndereco();
        $array['idade'] = $this->getIdade();
        $array['telefone'] = $this->getTelefone();
        $array['sexo'] = $this->getSexo();

        return $array;
    }
}