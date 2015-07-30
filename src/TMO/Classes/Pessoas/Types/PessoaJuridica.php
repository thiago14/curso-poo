<?php

namespace TMO\Classes\Pessoas\Types;
use TMO\Classes\Pessoas\Pessoa;

class PessoaJuridica extends Pessoa
{
    protected $razao;
    protected $fantasia;
    protected $cnpj;
    protected $inscricao;
    protected $responsavel_id;

    public function getRazao()
    {
        return $this->razao;
    }

    public function setRazao($razao)
    {
        $this->razao = $razao;
    }

    public function getFantasia()
    {
        return $this->fantasia;
    }

    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getInscricao()
    {
        return $this->inscricao;
    }

    public function setInscricao($inscricao)
    {
        $this->inscricao = $inscricao;
    }

    public function getResponsavelId()
    {
        return $this->responsavel_id;
    }

    public function setResponsavelId($responsavel_id)
    {
        $this->responsavel_id = $responsavel_id;
    }

    public function getAll()
    {
        $array['cnpj'] = $this->getCnpj();
        $array['razao'] = $this->getRazao();
        $array['cnpj'] = $this->getCnpj();
        $array['fantasia'] = $this->getFantasia();
        $array['endereco'] = $this->getLogradouro().', '.$this->getNumero().', '. $this->getBairro().', '.$this->getCidade().' - '. $this->getEstado();
        $array['telefone'] = $this->getTelefone();
        $array['inscricao'] = $this->getInscricao();
        $array['responsavel_id'] = $this->getResponsavelId();
        return $array;
    }
}