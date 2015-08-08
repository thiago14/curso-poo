<?php

namespace TMO\Classes\Pessoas;
use TMO\Classes\Util\Endereco;
use TMO\Interfaces\Cliente\EnderecoInterface;

abstract class PessoaAbstract extends Endereco implements EnderecoInterface
{
    protected $id;
    protected $nome;
    protected $telefone;
    protected $email;
    protected $classificacao;
    protected $endereco = [];
    protected $endereco_cobranca;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getClassificacao()
    {
        $nota = '<span>'. $this->classificacao .'</span>';
        if ($this->classificacao > 0) {
            for($i=1; $i <= $this->classificacao; $i++) {
                $nota .= '<i class="glyphicon glyphicon-star"></i>';
            }
        }
        return $nota;
    }

    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getEnderecoFormatado()
    {
        return $this->endereco->getLogradouro().', '.$this->endereco->getNumero().', '. $this->endereco->getBairro().', '.$this->endereco->getCidade().' - '. $this->endereco->getEstado();
    }

    public function setEndereco(Endereco $endereco)
    {
        $this->endereco[] = $endereco;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->endereco_cobranca;
    }

    public function setEnderecoCobranca(Endereco $endereco_cobranca)
    {
        $endereco_cobranca->setCobranca(1);
        $this->endereco[] = $endereco_cobranca;
        return $this;
    }

}