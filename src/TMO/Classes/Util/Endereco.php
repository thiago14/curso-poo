<?php

namespace TMO\Classes\Util;

class Endereco
{
    protected $logradouro;
    protected $numero;
    protected $bairro;
    protected $cidade;
    protected $estado;
    protected $cep;

    public function __construct($logradouro='', $numero='', $bairro='', $cidade='', $estado='',$cep=''){
        $this->setLogradouro($logradouro);
        $this->setNumero($numero);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setCep($cep);
    }
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = utf8_encode($logradouro);
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = utf8_encode($numero);
        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = utf8_encode($bairro);
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = utf8_encode($cidade);
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = utf8_encode($estado);
        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = utf8_encode($cep);
        return $this;
    }

}