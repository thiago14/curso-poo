<?php

namespace TMO\Classes\Pessoas\Types;
use TMO\Classes\Cliente\ClienteDb;
use TMO\Classes\Pessoas\PessoaAbstract;

class PessoaJuridica extends PessoaAbstract
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
        return $this;
    }

    public function getFantasia()
    {
        return $this->fantasia;
    }

    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getInscricao()
    {
        return $this->inscricao;
    }

    public function setInscricao($inscricao)
    {
        $this->inscricao = $inscricao;
        return $this;
    }

    public function getResponsavelId()
    {
        return $this->responsavel_id;
    }

    public function setResponsavelId($responsavel_id)
    {
        $this->responsavel_id = $responsavel_id;
        return $this;
    }

    public function getAll()
    {
        $responsavel = ClienteDb::find($this->getResponsavelId());
        $array['cnpj'] = $this->getCnpj();
        $array['razao'] = $this->getRazao();
        $array['cnpj'] = $this->getCnpj();
        $array['fantasia'] = $this->getFantasia();
        $array['telefone'] = $this->getTelefone();
        $array['inscricao'] = $this->getInscricao();
        $array['classifica&ccedil;&atilde;o'] = $this->getClassificacaoFormatada();
        $array['responsavel'] = $responsavel->getAll();
        if($this->getCobranca() == 1){
            $array['endere&ccedil;o Cobran&ccedil;a'] = $this->getEndereco();
        }else{
            $array['endere&ccedil;o'] = $this->getEndereco();
        }

        return $array;
    }
}