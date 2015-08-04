<?php

namespace TMO\Classes\Pessoas\Types;
use TMO\Classes\Pessoas\PessoaAbstract;

class PessoaFisica extends PessoaAbstract
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
        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getAll()
    {
        $array['cpf'] = $this->getCpf();
        $array['nome'] = $this->getNome();
        $array['sobrenome'] = $this->getSobrenome();
        $array['endereco'] = $this->getEndereco();
        $array['idade'] = $this->getIdade();
        $array['telefone'] = $this->getTelefone();
        $array['sexo'] = ($this->getSexo() == 'F') ? 'Feminino': 'Masculino';
        $array['classifica&ccedil;&atilde;o'] = $this->getClassificacao();

        return $array;
    }
}