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
    protected $cobranca;

    public function __construct($logradouro='', $numero='', $bairro='', $cidade='', $estado='',$cep='', $cobranca = 0){
        $this->setLogradouro($logradouro);
        $this->setNumero($numero);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setCep($cep);
        $this->setCobranca($cobranca);
    }
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCobranca()
    {
        return $this->cobranca;
    }

    public function setCobranca($cobranca)
    {
        $this->cobranca = $cobranca;
        return $this;
    }

}