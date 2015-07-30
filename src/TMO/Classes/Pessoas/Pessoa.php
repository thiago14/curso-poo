<?php

namespace TMO\Classes\Pessoas;
use TMO\Classes\Util\Endereco;

class Pessoa extends Endereco
{
    protected $tipo_pessoa;
    protected $nome;
    protected $telefone;
    protected $email;
    protected $classificacao;
    protected $endereco;

    public function getTipoPessoa()
    {
        return $this->tipo_pessoa;
    }

    public function setTipoPessoa($tipo_pessoa)
    {
        $this->tipo_pessoa = $tipo_pessoa;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getClassificacao()
    {
        return $this->classificacao;
    }

    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;
    }

    public function getEndereco()
    {
        return $this->endereco->getLogradouro().', '.$this->endereco->getNumero().', '. $this->endereco->getBairro().', '.$this->endereco->getCidade().' - '. $this->endereco->getEstado();
    }

    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

}